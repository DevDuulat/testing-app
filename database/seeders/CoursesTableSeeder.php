<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\Factory as Faker;
class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Course::create([
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
                'date' => $faker->dateTimeThisMonth(),
                'image' => $faker->imageUrl(),
            ]);
        }
    }
}
