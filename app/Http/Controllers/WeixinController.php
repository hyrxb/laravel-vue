<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeixinController extends Controller{

    /**
     *　微信小程序上传
     */
    public function upload(Request $request){

        if($request->isMethod('post'))
        {
            $file =  $request->file('files');
            if($file){
                $extension = $file -> guessExtension();
                $newName = str_random(18).".".$extension;
                // echo base_path().'/public/storage/uploads';
                $file -> move(base_path().'/public/storage/uploads',$newName);
                $idCardFrontImg = "http://www.cms.com/storage/uploads/".$newName;
                return json_encode($idCardFrontImg);
            }else{
                $idCardFrontImg = '';
                return json_encode($idCardFrontImg);
            }
        }
    }

}