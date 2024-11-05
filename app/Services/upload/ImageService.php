<?php

namespace App\Services\Upload;
use Intervention\Image\Facades\Image;

class ImageService
{
    public static function uploadImage($image)
    {
        $imageConverter = Image::make($image)->encode('webp', 90);
        $newFileName = rand(10000, 99999) . time() . '.webp';
        $destinationPath = public_path('storage/files');
        $imageConverter->save($destinationPath . '/' . $newFileName);
        return '/storage/files/' . $newFileName;
    }

}