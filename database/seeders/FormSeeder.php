<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
            ['name' => 'JSS 1'],
            ['name' => 'JSS 2'],
            ['name' => 'JSS 3'],

            ['name' => 'SSS 1 - Science'],
            ['name' => 'SSS 1 - Commercial'],
            ['name' => 'SSS 1 - Art'],
            
            ['name' => 'SSS 2 - Science'],
            ['name' => 'SSS 2 - Commercial'],
            ['name' => 'SSS 2 - Art'],
            
            ['name' => 'SSS 3 - Science'],
            ['name' => 'SSS 3 - Commercial'],
            ['name' => 'SSS 3 - Art'],
        ];
        Form::insert($forms);
    }
}
