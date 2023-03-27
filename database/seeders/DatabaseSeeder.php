<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            HandSeeder::class,
            HandNormalSeeder::class,
            HandHardSeeder::class,

            FaceSeeder::class,
            FaceNormalSeeder::class,
            FaceHardSeeder::class,

            FootSeeder::class,
            FootNormalSeeder::class,
            FootHardSeeder::class,
        ]);
    }
}
