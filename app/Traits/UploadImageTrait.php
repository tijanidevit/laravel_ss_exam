<?php
namespace App\Traits;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

trait UploadImageTrait{

    protected function uploadImage($index, $path) : string
    {
        $request = request();
        if ($request->hasFile($index)) {
            $image      = $request->file($index);
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->stream(); // <-- Key point

            //dd();
            if (Storage::disk('local')->put($path.$fileName, $img, 'public')) {
                return $fileName;
            }
            else {
                return 'default.jpg';
            } 
        }
    }
}