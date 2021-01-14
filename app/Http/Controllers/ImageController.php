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
        $path = Image::make($file)->resize(996, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save('img/project/'.time().$name);

        return response($path);
    }
}
