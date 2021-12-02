<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = [
            [
                'name' => 'bayu pamungkas',
                'username' => 'bayupamungkas',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'status_id' => '1',
                'class_id' => '1',
                'subjects_id' => '1, 2',
            ], [
                'name' => 'bayu',
                'username' => 'bayupamung',
                'password' => password_hash('password', PASSWORD_BCRYPT),
                'status_id' => '2',
                'class_id' => '3',
                'subjects_id' => '1',
            ]
        ];
        DB::table('teachers')->insert($teacher);
    }
}
