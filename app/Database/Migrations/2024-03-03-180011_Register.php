<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Register extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE register (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            budget_planning VARCHAR(255),
            household_size VARCHAR(255),
            age VARCHAR(255),
            offers_promotions VARCHAR(255),
            income VARCHAR(255),
            income_frequency VARCHAR(50),
            income_after_taxes VARCHAR(255),
            income_after_taxes_frequency VARCHAR(50),
            social_security_taxes VARCHAR(255),
            social_security_taxes_frequency VARCHAR(50),
            food_and_beverages VARCHAR(255),
            food_and_beverages_frequency VARCHAR(50),
            clothes VARCHAR(255),
            clothes_frequency VARCHAR(50),
            housing VARCHAR(255),
            housing_frequency VARCHAR(50),
            transportation VARCHAR(255),
            transportation_frequency VARCHAR(50),
            healthcare_and_personal_care VARCHAR(255),
            healthcare_and_personal_care_frequency VARCHAR(50),
            entertainment VARCHAR(255),
            entertainment_frequency VARCHAR(50),
            education VARCHAR(255),
            education_frequency VARCHAR(50),
            other_expenses VARCHAR(255),
            other_expenses_frequency VARCHAR(50),
            retirement_savings_amount VARCHAR(255),
            retirement_savings_frequency VARCHAR(50),
            employer_contribution VARCHAR(255),
            employer_contribution_frequency VARCHAR(50),
            starting_age_for_saving VARCHAR(255),
            bank_accounts_value VARCHAR(255),
            investment_accounts_value VARCHAR(255),
            home_value VARCHAR(255),
            rental_properties_value VARCHAR(255),
            vehicles_value VARCHAR(255),
            other_assets_value VARCHAR(255),
            retirement_savings_value VARCHAR(255),
            emergency_assets_value VARCHAR(255),
            mortgage_loans_value VARCHAR(255),
            business_debt_value VARCHAR(255),
            vehicle_loans_value VARCHAR(255),
            credit_card_debt_value VARCHAR(255),
            student_debt_value VARCHAR(255),
            other_debts_value VARCHAR(255),
            debt_payment_value VARCHAR(255),
            debt_payment_frequency VARCHAR(50),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci
        ");
    }

    public function down()
    {
        $this->forge->dropTable('register', true);
    }
}
