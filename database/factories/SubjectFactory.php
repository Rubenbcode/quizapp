<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $icons = [
            'https://images.unsplash.com/photo-1630514969818-94aefc42ec47?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'https://images.unsplash.com/photo-1650295751050-b184e54e177c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'https://images.unsplash.com/photo-1626362814904-d27009a10da7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ];
        shuffle($icons);
        $category  = Category::all()->random();
        $name = $this->faker->sentence(2);
        $slug = Str::slug($name);
        return [
            'name' => $name,
            'slug'=> $slug,
            'category_id' => $category->id,
            'icon' => $icons[0]
        ];
    }
}
