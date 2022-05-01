<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $subjects = Subject::all();
        foreach($subjects as $subject){
            Level::factory(1)->create(['subject_id' => $subject->id,'level_order' => 1]);
            Level::factory(1)->create(['subject_id' => $subject->id,'level_order' => 2]);
        }
    }
}
