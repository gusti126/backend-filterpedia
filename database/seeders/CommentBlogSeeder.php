<?php

namespace Database\Seeders;

use App\Models\CommentBlog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 1; $i < 5; $i++)
        {
            CommentBlog::create([
                'blog_id' => $i,
                'name_visitor' => $faker->name,
                'note' => $faker->text($maxNbChars = 200)
            ]);
        }
    }
}
