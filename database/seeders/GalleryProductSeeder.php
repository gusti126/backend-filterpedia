<?php

namespace Database\Seeders;

use App\Models\GalleryProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GalleryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(); //faker library
        
        $productCount = Product::count(); //count data product
        // insert 4 gambar di setiap products
        for($i = 1; $i < $productCount; $i++)
        {
            // insert data to table gallery_products
            for($j = 1; $j <= 4; $j++)
            {
                GalleryProduct::create([
                    'product_id' => $i,
                    'image' => $faker->imageUrl($width = 640, $height = 480, 'gallery'),
                ]);
            }
        }
    }
}
