<?php

namespace App\Actions;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class UploadImage
{
    public static function uploadImage(UploadedFile $uploadedFile, string $folder): string
    {
        $filenameWithExt = $uploadedFile->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $uploadedFile->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = Str::random(16).'_'.time().'.'.$extension;

        return $uploadedFile->move('images/'.$folder,$fileNameToStore);
    }

}
