<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); //faker library to data fake
        // insert 10 data
        for($i = 0; $i < 10; $i++)
        {
            DB::table('products')->insert([
                'title' => $faker->text($maxNbChars = 100),
                'thumbnail' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
                'deskripsi' => $faker->paragraph($nbSentences = 200, $variableNbSentences = true),
                'stok' => $faker->randomNumber($nbDigits = 3, $strict = false),
                'price' => $faker->randomNumber($nbDigits = 3, $strict = false),
            ]);
        }
    }
}
