<?php

namespace Database\Seeders;

use App\Models\Quiz;

use App\Models\Level;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder{

    public function run(){
        $levels = Level::all();
        foreach($levels as $level){
            Quiz::factory(1)->create([
                'level_id' => $level->id
            ])->each(function(Quiz $quiz){
                Question::factory(20)->create([
                    'quiz_id' => $quiz->id
                ]);
            });
        }
    }
}
