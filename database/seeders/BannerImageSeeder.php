<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\BannerImage;
use Illuminate\Database\Seeder;

class BannerImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countBanner = Banner::count();
        $faker = \Faker\Factory::create(); //faker library
        
        for($i = 1; $i <= $countBanner; $i++)
        {
            // insert tiga gambar di stiap id banner
            for($j = 1; $j <= 3; $j++)
            {
                BannerImage::create([
                    'banner_id' => $i,
                    'image' => $faker->imageUrl($width = 640, $height = 480, 'gallery'),
                ]);
            }
        }
    }
}
