<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CriaTabelaUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '220',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '220',
            ],
            'cpf' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'password_hash' => [
                'type'       => 'VARCHAR',
                'constraint' => '240',
            ],
            'reset_hash' => [
                'type'       => 'VARCHAR',
                'constraint' => '240',
                'null' => true,
                'default' => null,
            ],
            'reset_expira_em' => [
                'type'       => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'imagem' => [
                'type'       => 'VARCHAR',
                'constraint' => '240',
                'null' => true,
                'default' => null,
            ],
            'ativo' => [
                'type'       => 'BOOLEAN',
                'null' => false,
            ],
            'criado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'alterado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'deletado_em' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('email');
        $this->forge->addUniqueKey('cpf');

        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
