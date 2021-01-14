<?php

namespace App\Services;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageService
{
    private const PUBLIC_PATH = '/img/project/';
    private const IMAGE_WIDTH = 996;
    private const IMAGE_HEIGHT = null;
    /**
     *
     * @param  Request  $request
     * @return string
     *
     */
    public function upload(Request  $request)
    {
        $file = $request->file('image');
        $name = $request->file('image')->getClientOriginalName();
        Image::make($file)->resize(self::IMAGE_WIDTH, self::IMAGE_HEIGHT, function ($constraint) {
            $constraint->aspectRatio();
        })->save(self::PUBLIC_PATH.time().$name);

        return self::PUBLIC_PATH . $name;
    }
}
