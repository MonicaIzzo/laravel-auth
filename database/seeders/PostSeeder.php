<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $post = new Post();
            $post->title = $faker->text(20);
            $post->content = $faker->paragraphs(15, true);
            $post->slug = Str::slug($post->title, '_');
            //$post->image = $faker->imageUrl(250, 250);
            $post->image = Storage::putFile('post_images', $faker->image(storage_path('app/public/post_images'), 250, 250));
            $post->save();
        }
    }
}
