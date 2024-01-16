<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Tambahkan 20 postingan
        for ($i = 1; $i <= 20; $i++) {
            $title = $faker->sentence;
            $slug = Str::slug($title, '-');

            Post::create([
                'category_id' => rand(1, 5),
                'user_id' => rand(1, 5),
                'title' => $title,
                'slug' => $slug,
                'excerpt' => $faker->paragraph,
                'body' => $faker->text,
                'published_at' => $faker->dateTimeThisMonth,
            ]);
        }
    }
}
