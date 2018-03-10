<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use LojaCurso\Models\Permission;

class Permissions extends Seeder
{
    public function run()
    {
        Permission::create([
            'name'=>'Visualizar',
            'label'=>'Vê conteúdos.'
        ]);
        
        Permission::create([
            'name'=>'Cadastrar',
            'label'=>'Cadastrar Conteúdos'
        ]);

        Permission::create([
            'name'=>'Editar',
            'label'=>'Altera os Conteúdos Criados'
        ]);

        Permission::create([
            'name'=>'Apagar',
            'label'=>'Apaga conteúdos existentes.'
        ]);
    }
}
