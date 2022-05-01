<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{

    public function run(){
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(QuizSeeder::class);
    }
}
