<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'title' => 'Cliente',
            'description' => 'el cliente'
        ]);
        DB::table('categorias')->insert([
            'title' => 'Proveedor',
            'description' => 'un proveedor'
        ]);
        DB::table('categorias')->insert([
            'title' => 'Funcionario Interno',
            'description' => 'Funcionario Interno'
        ]);
    }
}
