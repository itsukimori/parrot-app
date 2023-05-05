<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $imagesCount = $this->countImages(); 
        return view('index', compact('imagesCount'));
    }
    public function countImages()
    {
        $count = Image::count();
        return $count;
    }
}
