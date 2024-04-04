<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function uploadImage($request, $fileName)
    {
        if ($request->hasFile($fileName)) {
            $img = $request->file($fileName);
            $imgName = time() ."-". str_replace(" ", "_", $img->getClientOriginalName());
            $img->move(public_path('uploads'), $imgName);
            return $imgName;
        }else {
            return null;
        }
    }
    // function checkStock($quantity)
    // {
    //     if ($quantity >= 1) {
    //         return 'in stock';
    //     } else {
    //         return 'out of stock';
    //     }
    // }

}
