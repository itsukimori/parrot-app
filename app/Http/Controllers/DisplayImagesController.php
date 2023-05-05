<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class DisplayImagesController extends Controller
{
    public function face() {
        $countImages = Image::where('body_parts', 'face')->count();
        $facePaths = Image::where('body_parts', 'face')->pluck('image_path')->toArray();

        return view('display-images.face',['countImages' => $countImages, 'facePaths' => $facePaths]);
    }
    public function hand() {
        $countImages = Image::where('body_parts', 'hand')->count();
        $handPaths = Image::where('body_parts', 'hand')->pluck('image_path')->toArray();

        return view('display-images.hand',['countImages' => $countImages, 'handPaths' => $handPaths]);
    }
    public function foot() {
        $countImages = Image::where('body_parts', 'foot')->count();
        $footPaths = Image::where('body_parts', 'foot')->pluck('image_path')->toArray();

        return view('display-images.foot',['countImages' => $countImages, 'footPaths' => $footPaths]);
    }
}
