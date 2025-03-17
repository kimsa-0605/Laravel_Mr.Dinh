<?php

namespace App\Service;

use Illuminate\Support\Facades\File;

class RequestHandling
{
    public static function uploadImage($image, $path) {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path($path), $imageName);
        return $imageName;
    }
    public static function deleteImage($imagePath){
        $fullPath = public_path($imagePath);

        if (File::exists($fullPath)) {
            File::delete($fullPath);
            return true; 
        }

        return false; 
    }
}