<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++) { 
            Blog::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'slug' => $faker->sentence,
            ]);
        }
    }
}
