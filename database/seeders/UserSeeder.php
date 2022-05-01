<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        User::create([
            'name' => 'Ruben',
            'email' => 'ru@gmail.com',
            'password' => bcrypt('asdf1234')
        ]);

        User::factory(20)->create();
        
    }
}
