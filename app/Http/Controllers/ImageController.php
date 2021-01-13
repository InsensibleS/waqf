<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class ImageController extends Controller
{
    public function upload(Request  $request)
    {
        $file = $request->file('image');
        $name = $request->file('image')->getClientOriginalName();
        Image::make($file)->resize(300, 200)->save('img/project/'. $name );
        return view('welcome');
    }
}
