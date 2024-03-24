<?php

namespace Database\Seeders;

use App\Models\Employer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createTestEmployer();
        Employer::factory(5)->create();
    }

    public function createTestEmployer(): void
    {
        Employer::create([
            'name' => 'Test Employer',
            'description' => 'IT Company with a lot of jobs',
            'email' => 'test@emploeyr.com',
            'web_site' => 'https://employer.ch',
            'city' => 'Luzern',
            'address' => 'Blumenstrasse, 8',
            'contact' => 'Maria Schiller, +41-76-5432100',
            'comment' => 'TEST Comment',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
