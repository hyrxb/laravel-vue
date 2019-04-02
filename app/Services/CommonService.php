<?php

namespace App\Services;

use Request;


class CommonService{
    /**
     * 上传文件字段名
     * @param $field
     */
    public static function upload($field){
        $file =  Request::file($field);
        if($file){
            $extension = $file -> guessExtension();
            $newName = str_random(18).".".$extension;
            $file -> move(base_path().'/public/storage/uploads',$newName);
            $idCardFrontImg = '/storage/uploads/'.$newName;
            return $idCardFrontImg;
        }
        return "";
    }
}