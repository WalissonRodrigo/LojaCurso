<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use LojaCurso\Models\Role;

class Roles extends Seeder
{
    public function run()
    {
        Role::create([
            'name'=>'Administrador',
            'label'=>'Permissão Total no Sistema.'
        ]);

        Role::create([
            'name'=>'Funcionario',
            'label'=>'Visualizar, Editar, Cadastrar, Deletar'
        ]);

        Role::create([
            'name'=>'Moderador',
            'label'=>'Visualizar, Editar, Cadastrar'
        ]);

        Role::create([
            'name'=>'Usuario',
            'label'=>'Visualizar, Cadastrar'
        ]);
    }
}
