<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Study;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Study::create(['name' => 'Teknik Informatika']);
        Study::create(['name' => 'Sistem Informasi']);
        Study::create(['name' => 'Bisnis Digital']);
        Study::create(['name' => 'Teknologi Informasi']);
        Study::create(['name' => 'Pendidikan Teknologi Informasi']);

        // Student::create([
        //     'name' => 'Andi',
        //     'nim' => 20220909,
        //     'study_id' => 1
        // ]);

        // Student::create([
        //     'name' => 'Iwan',
        //     'nim' => 20221010,
        //     'study_id' => 2
        // ]);

        Student::factory(100)->create();
    }
}
