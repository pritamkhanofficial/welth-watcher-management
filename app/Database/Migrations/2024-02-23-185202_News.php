<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'news_category_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 30,
                'unsigned'       => true
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       =>true
            ],
            'featured_image' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'content' => [
                'type'       => 'LONGTEXT',
            ],
            'published_status' => [
                'type'       => 'ENUM',
                'constraint' => ['draft', 'published'],
                'default'    => 'draft'
            ],
            'published_at datetime default null',
            'published_by' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null'           =>true
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
                'unsigned'       => true,
                'null'           =>true
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('news', true);
    }

    public function down()
    {
        $this->forge->dropTable('news', true);
    }
}
