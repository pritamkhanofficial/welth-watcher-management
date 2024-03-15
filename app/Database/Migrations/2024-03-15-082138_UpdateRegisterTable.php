<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateRegisterTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('register', [
            'user_id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'default' => null,
                'after' => 'id', // Position of the new column after 'id'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('register', 'user_id');
    }
}
