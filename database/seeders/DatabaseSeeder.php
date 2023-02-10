<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Commodity;
use App\Models\warehouse;
use Faker;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $faker = Faker\Factory::create();
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('0833126198')
        ]);

        $house = warehouse::create([
            'name' => $faker->unique()->name(),
            'organisation' => 'A',
            'location' => $faker->country()
        ]);
        $house2 = warehouse::create([
            'name' => $faker->unique()->name(),
            'organisation' => 'A',
            'location' => $faker->country()
        ]);
        $house3 = warehouse::create([
            'name' => $faker->unique()->name(),
            'organisation' => 'A',
            'location' => $faker->country()
        ]);

        $category = Category::create([
            'name' => 't-shirts',
        ]);
        $category2 = Category::create([
            'name' => 'shorts',
        ]);
        $category3 = Category::create([
            'name' => 'shoes',
        ]);

        for( $i = 0; $i < 10; $i )
        {
            Commodity::create([
                'name' => $faker->unique()->name(),
                'category_id' => $faker->randomElement([$category->id, $category2->id, $category3->id]),
                'warehouse_id' => $faker->randomElement([$house->id, $house2->id, $house3->id]),
                'price' => $faker->randomFloat(),
                'quantity' => $faker->randomNumber(),
                'remaining' => $faker->randomNumber(),
            ]);
        }
    }
}
