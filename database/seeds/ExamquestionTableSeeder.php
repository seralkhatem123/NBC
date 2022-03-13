<?php

use Illuminate\Database\Seeder;
use App\Exam_Question;

class ExamquestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    $question = [
        [
            'examcode'       => '1',
            'question' => 'This is test seeder question',
            'option_A' => 'this test of seeder worksA',
            'option_A' => 'this test of seeder worksB',
            'option_A' => 'this test of seeder worksC',
            'option_A' => 'this test of seeder worksD',
            'correct_option' => 'c',
         ],
         [
            'examcode'       => '1',
            'question' => 'This is test seeder question',
            'option_A' => 'this test of seeder worksA',
            'option_A' => 'this test of seeder worksB',
            'option_A' => 'this test of seeder worksC',
            'option_A' => 'this test of seeder worksD',
            'correct_option' => 'c',
        ],
        
        
    ];
    Exam_Question::insert($question);
}
}
