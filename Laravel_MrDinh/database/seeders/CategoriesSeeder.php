<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('categories2')->insert([
                'name-table' => Str::slug($faker->unique()->words(2, true)),
                'description' => $faker->sentence, 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}