<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            CmsSeeder::class,
            BlogSeeder::class,
            CommentBlogSeeder::class,
            ReplyCommentBlogSeeder::class,
            ProductSeeder::class,
            GalleryProductSeeder::class,
            BannerSeeder::class,
            BannerImageSeeder::class,
            ReviewsSeeder::class,
        ]);
    }
}
