<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Yustria Akbar',
                'email' => 'yustria@mailinator.com',
                'password' => Hash::make('password'),
                'created_at' => '2022-03-21 11:32:57',
                'updated_at' => '2022-03-21 11:32:57',
            )
        ));
    }
}
