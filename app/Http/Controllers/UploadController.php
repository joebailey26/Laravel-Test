<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class UploadController extends Controller
{
    public function UploadImage()
    {
        $image = new Image();
        $image->path = request()->file('userpic')->hashName();
        $image->save();
        return request()->file('userpic')->store('/public/userpics');
    }
}
