<?php

namespace App\Services;

use App\Http\Requests\ProjectStoreRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageService
{
    private const STORAGE_PATH = '/storage';
    private const PUBLIC_PATH = '/images/projects/';
    private const IMAGE_WIDTH = 996;
    private const IMAGE_HEIGHT = null;

    /**
     *
     * @param  $file
     * @return string
     *
     */
    public function uploadAndResizeImage($file): string
    {
        $name = time() . '_' . $file->getClientOriginalName();
        Image::make($file)->resize(self::IMAGE_WIDTH, self::IMAGE_HEIGHT, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path(self::STORAGE_PATH . self::PUBLIC_PATH) . $name);

        return self::PUBLIC_PATH . $name;
    }

    /**
     *
     * @param  Request $request
     * @return void
     *
     */
    public function storeImagesForProject(ProjectStoreRequest &$request)
    {
        for($i=0; $i<5; $i++) {
            if($request->file('images.' . $i)) {
                $imageName = self::uploadAndResizeImage($request->file('images.' . $i));
                $request['image' . ($i+1)] = $imageName;
            }
        }
    }
}
