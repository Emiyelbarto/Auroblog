<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;

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

        for ($i = 0; $i < 50; $i++) {
            $title = $faker->sentence;
            $slug = Str::slug($title, "-");
            Blog::create([
                'title' => $title,
                'content' => $faker->realText(6000, 2),
                'slug' => $slug,
                'image' => $faker->imageUrl(400, 400),
                'created_at' => $faker->dateTimeThisDecade('now', null),
            ]);
        }
    }
}
