<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\Subject;
use App\Models\FormSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = Form::all();
        $subjects = Subject::pluck(3);
        foreach($forms as $form){
            foreach($subjects as $subject){
                FormSubject::create([
                    'form_id' => $form->id,
                    'subject_id' => $subject->id,
                ]);
            }
        }
    }
}
