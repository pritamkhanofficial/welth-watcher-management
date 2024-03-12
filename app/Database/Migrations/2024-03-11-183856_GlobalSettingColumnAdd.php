<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GlobalSettingColumnAdd extends Migration
{
    public function up()
    {
        $fields = [
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'front_logo' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'back_logo_lg' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'back_logo_sm' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'business_setup_growth' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'business_problem_solving' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'goal_achiever' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'passive_income_earners' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'footer_text' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'about_us' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'mission' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vision' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ];
        $this->forge->addColumn('global_settings', $fields);
    }

    public function down()
    {
        $forge->dropColumn('global_settings', 'email');
        $forge->dropColumn('global_settings', 'front_logo');
        $forge->dropColumn('global_settings', 'back_logo_lg');
        $forge->dropColumn('global_settings', 'back_logo_sm');
        $forge->dropColumn('global_settings', 'business_setup_growth');
        $forge->dropColumn('global_settings', 'business_problem_solving');
        $forge->dropColumn('global_settings', 'goal_achiever');
        $forge->dropColumn('global_settings', 'passive_income_earners');
        $forge->dropColumn('global_settings', 'footer_text');
        $forge->dropColumn('global_settings', 'about_us');
        $forge->dropColumn('global_settings', 'mission');
        $forge->dropColumn('global_settings', 'vision');
    }
}
