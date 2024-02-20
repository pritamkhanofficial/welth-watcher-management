<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GlobalSetting extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'facebook_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       =>true
            ],
            'twitter_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       =>true
            ],
            'linkedin_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'defult'    => 'NULL'
            ],
            'youtube_url' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       =>true
            ],
            'mobile_no' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       =>true
            ],
            'address' => [
                'type'       => 'LONGTEXT',
                'null'       =>true
            ],
            
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('global_settings', true);
    }

    public function down()
    {
        $this->forge->dropTable('global_settings', true);
    }
}
