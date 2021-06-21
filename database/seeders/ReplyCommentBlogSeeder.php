<?php

namespace Database\Seeders;

use App\Models\ReplyCommentBlog;
use Illuminate\Database\Seeder;

class ReplyCommentBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); //library faker for data dummy
        for($i = 1; $i < 5; $i++)
        {
            ReplyCommentBlog::create([
                'comment_blog_id' => $i,
                'name' => $faker->name,
                'note' => $faker->paragraph($nbSentences = 100, $variableNbSentences = true)
            ]);
        }
    }
}
