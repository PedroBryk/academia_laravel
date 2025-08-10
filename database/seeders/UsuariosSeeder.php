<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'nome' => 'Administrador',
                'email' => 'admin@academia.com',
                'senha' => Hash::make('senha123'),
                'role' => 'admin',
                'telefone' => '123456789',
                'data_nascimento' => '1980-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Professor João',
                'email' => 'joao@academia.com',
                'senha' => Hash::make('senha123'),
                'role' => 'professor',
                'telefone' => '987654321',
                'data_nascimento' => '1985-05-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Aluno Pedro',
                'email' => 'pedro@academia.com',
                'senha' => Hash::make('senha123'),
                'role' => 'aluno',
                'telefone' => '1122334455',
                'data_nascimento' => '2000-08-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
