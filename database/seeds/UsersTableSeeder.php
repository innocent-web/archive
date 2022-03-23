<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User :: truncate();
      DB:: table('role_user')->truncate();


     $admin = User::create([
          'name'=>'Ernesto',
          'pseudo'=>'Rbt',
          'email'=>'rabutinernesto2@gmail.com',
          'password'=>Hash::make('password')

      ]);


    $utilisateur = User::create([
        'name'=>'utilisateur',
        'pseudo'=>'user',
        'email'=>'utilisateur@gmail.com',
        'password'=>Hash::make('password')

    ]);

            $adminRole =  Role::where('name', 'admin')->first();

            $utilisateurRole = Role::where('name', 'utilisateur')->first();

            $admin->roles()->attach($adminRole);
            $utilisateur->roles()->attach($utilisateurRole);
    }
}
