<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // public/test-image 画像一括挿入
        $folderPath= public_path('/test-image/face/easy/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png
        $imagesPath = str_replace('/var/www/html/public/test-image', '/test-image', $imageFullPath);
        foreach ($imagesPath as $imagePath) {
            DB::table('images')->insert([
                'body_parts' => 'face',
                'level' => 'easy',
                'image_path' => $imagePath,
            ]);
        }
    }
}

class FaceNormalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // public/test-image 画像一括挿入
        $folderPath= public_path('/test-image/face/normal/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png
        $imagesPath = str_replace('/var/www/html/public/test-image', '/test-image', $imageFullPath);
        foreach ($imagesPath as $imagePath) {
            DB::table('images')->insert([
                'body_parts' => 'face',
                'level' => 'normal',
                'image_path' => $imagePath,
            ]);
        }
    }
}

class FaceHardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // public/test-image 画像一括挿入
        $folderPath= public_path('/test-image/face/hard/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png
        $imagesPath = str_replace('/var/www/html/public/test-image', '/test-image', $imageFullPath);
        foreach ($imagesPath as $imagePath) {
            DB::table('images')->insert([
                'body_parts' => 'face',
                'level' => 'hard',
                'image_path' => $imagePath,
            ]);
        }
    }
}