<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10000)->create();
        // \App\Models\Post::factory(1)->create();

        \App\Models\Post::factory(5000)->create([
            'user_id' => \App\Models\User::all()->random()->id,
        ]);
    }
}
