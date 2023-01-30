<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Reviews;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // $faker = Faker::create();
    	// foreach (range(1,30) as $index) {
        //     DB::table('products')->insert([
        //         'name' => $faker->name,
        //         's_description' => $faker->text(35),
        //         'l_description' => $faker->text(200),
        //         'category' => $faker->randomElement(['clothing', 'mobiles', 'computer']),
        //         'image_src' => $faker->image('public/images',640,480, null, false),
        //         'quantity' => $faker->numerify('####'),
        //         'price' =>  $faker->numerify('####'),

        //     ]);
        // }

        User::factory(10)->create();
        // Products::factory(10)->create(); 
        // Reviews::factory(50)->create();

        // $faker = Faker::create();
    	// foreach (range(1,50) as $index) {
        //     DB::table('reviews')->insert([
        //         'user_id' =>  rand(1,22),
        //         'product_id' => Products::factory()->create()->id,
        //         'comment' => $faker->paragraph(1),
        //         'created_at' => $faker->date(),
        //         'updated_at' => $faker->date(),
               

        //     ]);
        // }
    }
}
