<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getApp()
    {
        return view('app', ['title' => 'An even cooler way to do the title']);
    }

    public function getPage()
    {
        return view('page', [
                'title' => 'Page2 -A little about Author',
                'author' => json_encode([
                    'name' => 'Firsayo Afolayan',
                    'role' => 'Software Enginner',
                    'Code' => "Always keeping it clean"
                ])

            ]
        );
    }

    /**
     *　微信小程序上传
     */
    public function upload(Request $request){

        if($request->isMethod('post'))
        {
            $file =  $request->file('file');
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