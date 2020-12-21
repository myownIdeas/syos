<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImages(Request $request){
        $names = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file){

                $name = uniqid().$file->getClientOriginalName();
                $data[ 'movie_name' ] = $name;
                $file->move(public_path('images'), $name);
                $names[]= $name;
            }


            //$waterMarkUrl = public_path('images/s2.jpg');
            //$image = Image::make(public_path('images/'.$name));
            /* insert watermark at bottom-left corner with 5px offset */
            //$image->insert($waterMarkUrl, 'bottom-left', 5, 5);
            //$image->save(public_path('images/'.$name));
            return $names;
        } else {
            return false;
        }
    }
}
