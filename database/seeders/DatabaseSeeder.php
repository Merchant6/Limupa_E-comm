<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,500) as $index) {
            DB::table('products')->insert([
                'name' => $faker->name,
                's_description' => $faker->text(35),
                'l_description' => $faker->text(200),
                'category' => $faker->randomElement(['clothing', 'mobiles', 'computer']),
                'image_src' => $faker->image('public/images',640,480, null, false),
                'quantity' => $faker->numerify('####'),
                'price' =>  $faker->numerify('####'),

            ]);
        } 
    }
}
