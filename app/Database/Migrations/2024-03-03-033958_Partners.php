<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Partners extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'label' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'default'    => 1,
                'constraint' => 1,
                'comment'    => '0 for no 1 for yes'
            ],
            'created_at datetime default current_timestamp',
            'created_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true
            ],
            'updated_at datetime default null',
            'updated_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null'           =>true
            ],
            'deleted_at datetime default null',
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('partners', true);
    }

    public function down()
    {
        $this->forge->dropTable('partners', true);
    }
}
