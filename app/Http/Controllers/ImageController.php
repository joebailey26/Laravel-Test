<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function getImage()
    {
        $image = Image::all()[0];
        return $image;
    }
}
