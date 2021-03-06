<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Student::factory(32)->create();

        $this->call([
            StatusSeeder::class,
            ClassSeeder::class,
            SubjectSeeder::class,
            DaysSeeder::class,
            TeacherSeeder::class,
            SubjectTeacherSeeder::class
        ]);
    }
}
