<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class DrawingContentController extends Controller
{
    public function drawing()
    {
        //dbからパスを受け取り配列にまとめる
        $imagesPath = Image::all();
        $imageData = $imagesPath->toArray();
        // dd($imageData);
        $drawingImagePaths = json_encode($imageData);
        // dd($drawingImagePaths);
        
        return view('drawing.drawing-content')->with('imageData', $drawingImagePaths);
    }
}
