<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::all();
       return  view ('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('admin.users.index');
        }
        $roles = Role::all();
        return view('admin.users.modifier', [
            'user' => $user,
            'roles' => $roles,
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, User $users)
    {
        $users = new User;
        $users->name = $request->name;
        $users->pseudo = $request->pseudo;
        $users->email = $request->email;
        $users->password =hash::make($request->password) ;
        $users->save();
        $role = Role::select('id')->Where('name', 'utilisateur')->first();
        $users->roles()->attach($role);
        return view('admin.users.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('admin.users.index');
        }
        $roles = Role::all();
        return view('admin.users.modifier', [
            'user' => $user,
            'roles' => $roles,
         ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->pseudo = $request->pseudo;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('delete-users')) {
            return redirect()->route('admin.users.index');
        }
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
