<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTableUserTypeColumnAdd extends Migration
{
    public function up()
    {
        $fields = [
            'user_type' => [
                'type' => "ENUM('FRONT', 'ADMIN')",
                'default' => 'FRONT',
                'after' => 'id'
            ]
        ];
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'user_type');
    }
}
