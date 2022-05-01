<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Tecnologías de la información',
                'slug' => Str::slug('Tecnologías de la información'),
                'icon' => 'https://images.unsplash.com/photo-1633791583517-c828e6f851a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=425&q=80'
            ],
            [
                'name' => 'Inglés',
                'slug' => Str::slug('Inglés'),
                'icon' => 'https://images.unsplash.com/photo-1610116306796-6fea9f4fae38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
            ]
        ];

        foreach($categories as $category){
            Category::create($category);
        }

        
    }
}
