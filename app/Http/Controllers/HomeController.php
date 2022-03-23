<?php

namespace App\Http\Controllers;

use App\Dossier;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user= User::all();
       $dossier=Dossier::all();
        return view('home', [
            'user'=> $user,
            'dossier'=>$dossier
        ]);
    }
}

