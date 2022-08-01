<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioFakerSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel();

        // Usar o Faker para popular a tabela Usuários
        $faker = \Faker\Factory::create();

        $qtdUsuariosCriados = 10000;

        $usuariosPush = [];

        for ($i = 0; $i <= $qtdUsuariosCriados; $i++) {
            array_push($usuariosPush, [
                'nome' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'cpf' => $faker->unique()->ssn,
                'password_hash' => '123456',
                'ativo' => $faker->numberBetween(0, 1), //Ativo ou não ativo
            ]);
        }

        // echo '<pre>';
        // print_r($usuariosPush);
        // exit;

        $usuarioModel->skipValidation(true)
            ->protect(false)
            ->insertBatch($usuariosPush);
        
        echo "$qtdUsuariosCriados usuários criados com sucesso!";
    }
}
