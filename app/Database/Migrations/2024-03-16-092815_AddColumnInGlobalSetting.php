<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnInGlobalSetting extends Migration
{
    public function up()
    {
        $this->forge->addColumn('global_settings', [
            'insta_url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => null,
                'after' => 'linkedin_url',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('global_settings', 'new_column');
    }
}
