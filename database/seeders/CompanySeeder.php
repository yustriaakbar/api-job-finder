<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('companies')->delete();

        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_name' => 'Google',
                'company_address' => 'Jakarta, Indonesia',
                'logo' => 'company/google_logo.png',
                'created_at' => '2023-05-29 14:16',
                'updated_at' => '2023-05-29 14:16',
            ),
            1 => 
            array (
                'id' => 2,
                'company_name' => 'Linkedin',
                'company_address' => 'Jakarta, Indonesia',
                'logo' => 'company/linkedin_logo.png',
                'created_at' => '2023-05-29 14:16',
                'updated_at' => '2023-05-29 14:16',
            ),
            2 => 
            array (
                'id' => 3,
                'company_name' => 'Airnb',
                'company_address' => 'Jakarta, Indonesia',
                'logo' => 'company/airbnb_logo.png',
                'created_at' => '2023-05-29 14:16',
                'updated_at' => '2023-05-29 14:16',
            ),
        ));
    }
}
