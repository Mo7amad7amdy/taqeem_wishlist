<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('items')->insert([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 10, 1000),
                'seller' => $faker->name,
            ]);
        }
    }
}
