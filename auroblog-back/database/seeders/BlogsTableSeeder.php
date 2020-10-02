<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;
use GrahamCampbell\Markdown\Facades\Markdown;

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
            $content = $faker->realText(6000, 2);
            $content_md = Markdown::convertToHtml($content);
            Blog::create([
                'title' => $title,
                'content' => $content,
                'slug' => $slug,
                'image' => $faker->imageUrl(400, 400),
                'content_md' => $content_md,
                'created_at' => $faker->dateTimeThisDecade('now', null),
            ]);
        }
    }
}
