<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            ['name' => 'Eglish Language'],
            ['name' => 'Mathematics'],
            ['name' => 'Yoruba Language'],
            ['name' => 'French Language'],
            ['name' => 'Commerce'],
            ['name' => 'Biology'],
            ['name' => 'Chemistry'],
            ['name' => 'Physics'],
            ['name' => 'Geography'],
            ['name' => 'Government'],
            ['name' => 'Literature in English'],
            ['name' => 'Home Economics'],
            ['name' => 'Social Studies'],
            ['name' => 'Computer Studies'],
            ['name' => 'Basic Technology'],
            ['name' => 'Islamic Religion Studies'],
            ['name' => 'Christianity Religion Studies'],
            ['name' => 'Business Studies'],
            ['name' => 'Physical Health Education'],
            ['name' => 'Economics'],
            ['name' => 'Agricultural Science'],
        ];

        Subject::insert($subjects);
    }
}
