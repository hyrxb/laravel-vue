<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function getApp()
    {
        return view('app',['title'=>'An even cooler way to do the title']);
    }

    public function getPage(){
        return view('page',[
            'title'=>'Page2 -A little about Author',
                'author'=>json_encode([
                    'name'=>'Firsayo Afolayan',
                    'role'=>'Software Enginner',
                    'Code'=>"Always keeping it clean"
                ])

            ]
        );
    }
}