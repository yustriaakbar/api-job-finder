<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('jobs')->delete();

        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_id' => '1',
                'job_name' => 'Software Engineer',
                'job_type' => 'Full Time',
                'salary' => '10.000.000 - 15.000.000',
                'location' => 'Jakarta',
                'deadline' => '2023-06-06 14:16',
                'requirement' => collect(array(
                    0 => "1. 3+ tahun pengalaman dalam pengkodean dalam setidaknya satu bahasa modern seperti Node.js, Python, Java, dan Go.",
                    1 => "2. 3+ tahun pengalaman berkontribusi pada arsitektur dan desain sistem baru dan yang sudah ada",
                    2 => "3. Memahami praktik keamanan dalam mengelola server dan jaringan. Menunjukkan kemampuan untuk membimbing dan mengembangkan orang lain"
                )),
                'created_at' => '2023-05-29 14:16',
                'updated_at' => '2023-05-29 14:16',
            ),
            1 => 
            array (
                'id' => 2,
                'company_id' => '2',
                'job_name' => 'Backend Developer',
                'job_type' => 'Full Time',
                'salary' => '12.000.000 - 15.000.000',
                'location' => 'Jakarta',
                'deadline' => '2023-06-07 14:16',
                'requirement' => collect(array(
                    0 => "1. 3+ tahun pengalaman dalam pengkodean dalam setidaknya satu bahasa modern seperti Node.js, Python, Java, dan Go.",
                    1 => "2. 3+ tahun pengalaman berkontribusi pada arsitektur dan desain sistem baru dan yang sudah ada",
                    2 => "3. Memahami praktik keamanan dalam mengelola server dan jaringan. Menunjukkan kemampuan untuk membimbing dan mengembangkan orang lain"
                )),
                'created_at' => '2023-05-29 14:16',
                'updated_at' => '2023-05-29 14:16',
            ),
            2 => 
            array (
                'id' => 3,
                'company_id' => '3',
                'job_name' => 'Frontend Developer',
                'job_type' => 'Full Time',
                'salary' => '9.000.000 - 15.000.000',
                'location' => 'Jakarta',
                'deadline' => '2023-06-08 14:16',
                'requirement' => collect(array(
                    0 => "1. 3+ tahun pengalaman dalam pengkodean dalam setidaknya satu bahasa modern seperti Node.js, Python, Java, dan Go.",
                    1 => "2. 3+ tahun pengalaman berkontribusi pada arsitektur dan desain sistem baru dan yang sudah ada",
                    2 => "3. Memahami praktik keamanan dalam mengelola server dan jaringan. Menunjukkan kemampuan untuk membimbing dan mengembangkan orang lain"
                )),
                'created_at' => '2023-05-29 14:16',
                'updated_at' => '2023-05-29 14:16',
            ),
        ));
    }
}
