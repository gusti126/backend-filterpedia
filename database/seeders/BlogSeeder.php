<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); //faker library

        for($i = 0; $i < 10; $i++)
        {
            DB::table('blogs')->insert([
                'title' => $faker->title,
                'thumbnail' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
                'deskripsi' => $faker->paragraph($nbSentences = 200, $variableNbSentences = true)
            ]);
        }
    }
}
