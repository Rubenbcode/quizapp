<?php

namespace Database\Factories;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::all()->random();
        $name = $this->faker->sentence(3);
        $slug = Str::slug($name);
        $description = $this->faker->text();
        $status  =[Quiz::DISABLED,Quiz::ENABLED];
        shuffle($status);

        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'status' =>1,
            'watch' => $this->faker->randomDigit(),
            'user_id' => $user->id
        ];
    }
}
