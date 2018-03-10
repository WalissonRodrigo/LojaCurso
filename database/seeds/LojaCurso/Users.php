<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use LojaCurso\Models\User;

class Users extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'Walisson Rodrigo',
            'email'=>'walissonrodrigo@outlook.com',
            'password'=>bcrypt('97498037'),
        ]);

        User::create([
            'name'=>'Funcionario',
            'email'=>'funcionario@laravel.com',
            'password'=>bcrypt('123456'),
        ]);
    }
}
