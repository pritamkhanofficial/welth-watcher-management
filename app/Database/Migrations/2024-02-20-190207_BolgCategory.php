<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BolgCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 30,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'label' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'default'    => 1,
                'constraint'    => 1,
                'comment'    => '0 for no 1 for yes'
            ],
            'created_at datetime default current_timestamp',
            'created_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true
            ],
            'updated_at datetime default null on update current_timestamp',
            'updated_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null'           =>true
            ],
            'deleted_at datetime default null',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('blog_category', true);
    }

    public function down()
    {
        $this->forge->dropTable('blog_category', true);
    }
}
