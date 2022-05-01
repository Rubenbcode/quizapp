<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){

        $section = Section::all()->random();
        $answers = [1,2,3,4];
        shuffle($answers);
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'answer_1' => $this->faker->sentence(4),
            'answer_2' => $this->faker->sentence(5),
            'answer_3' => $this->faker->sentence(6),
            'answer_4' => $this->faker->sentence(7),
            'correct_answer' => $answers[0],
            'section_id' => $section->id,
            'order_quiz' => $this->faker->randomDigit()
        ];
    }
}
