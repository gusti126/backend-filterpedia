<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;
class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data fake with role admin
        DB::table('users')->insert([
            'name' => 'admin2021',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('220900'),
            'role' => 'admin'
        ]);

        // inisial faker library
        $faker = \Faker\Factory::create();
        
        // input 10 user
        for($i = 0; $i < 10; $i++)
        {
            // insert data ke table pegawai menggunakan Faker
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password'),
            ]);
        }
    }
}
