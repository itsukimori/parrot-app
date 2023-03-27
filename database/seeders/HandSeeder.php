<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HandSeeder extends Seeder
{
    public function run(): void
    {
        // public/test-image 画像一括挿入
        $folderPath= public_path('/test-image/hand/easy/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png
        $imagesPath = str_replace('/var/www/html/public/test-image', '/test-image', $imageFullPath);
        foreach ($imagesPath as $imagePath) {
            DB::table('images')->insert([
                'body_parts' => 'hand',
                'level' => 'easy',
                'image_path' => $imagePath,
            ]);
        }
    }
}

class HandNormalSeeder extends Seeder
{
    public function run(): void
    {
        // public/test-image 画像一括挿入
        $folderPath= public_path('/test-image/hand/normal/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png
        $imagesPath = str_replace('/var/www/html/public/test-image', '/test-image', $imageFullPath);
        foreach ($imagesPath as $imagePath) {
            DB::table('images')->insert([
                'body_parts' => 'hand',
                'level' => 'normal',
                'image_path' => $imagePath,
            ]);
        }
    }
}

class HandHardSeeder extends Seeder
{
    public function run(): void
    {
        // public/test-image 画像一括挿入
        $folderPath= public_path('/test-image/hand/hard/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png
        $imagesPath = str_replace('/var/www/html/public/test-image', '/test-image', $imageFullPath);
        foreach ($imagesPath as $imagePath) {
            DB::table('images')->insert([
                'body_parts' => 'hand',
                'level' => 'hard',
                'image_path' => $imagePath,
            ]);
        }
    }
}
