<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImagesHandSeeder extends Seeder
{
    public function run(): void
    {
        // public/drawing-images の画像をPathをDB保管処理
        $folderPath = public_path('/drawing-images/hand/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png

        foreach ($imageFullPath as $imagePath) {
            $relativeImagePath = str_replace(public_path(), '', $imagePath);
            DB::table('images')->insert([
                'body_parts' => 'hand',
                'image_path' => $relativeImagePath,
            ]);
        }

    }
}

class ImagesFaceSeeder extends Seeder
{
    public function run(): void
    {
        // public/drawing-images の画像をPathをDB保管処理
        $folderPath = public_path('/drawing-images/face/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png

        foreach ($imageFullPath as $imagePath) {
            $relativeImagePath = str_replace(public_path(), '', $imagePath);
            DB::table('images')->insert([
                'body_parts' => 'face',
                'image_path' => $relativeImagePath,
            ]);
        }

    }
}

class ImagesFootSeeder extends Seeder
{
    public function run(): void
    {
        // public/drawing-images の画像をPathをDB保管処理
        $folderPath = public_path('/drawing-images/foot/*');
        $imageFullPath = glob($folderPath); // ←/var/www/html/public/test-image/hoge.png

        foreach ($imageFullPath as $imagePath) {
            $relativeImagePath = str_replace(public_path(), '', $imagePath);
            DB::table('images')->insert([
                'body_parts' => 'foot',
                'image_path' => $relativeImagePath,
            ]);
        }

    }
}