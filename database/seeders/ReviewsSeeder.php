<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($user = 1; $user < 4; $user++)
        {
            for($product = 1; $product <= 10; $product++)
            {
                Review::create([
                    'user_id' => $user,
                    'product_id' => $product,
                    'rating' => rand(1, 5),
                    'note' => $faker->text($maxNbChars = 200)
                ]);
            }
        }
    }
}
