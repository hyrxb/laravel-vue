<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Common;


class MpController extends Controller{

    /**
     * 仪表盘显示微信公众号指标
     */
    public function dashboard(){
        return view("mp.dashboard");
    }

    /**
     * 微信公众号列表
     */
    public function index(){
        return view("mp.index");
    }

    /**
     * 添加微信公众号
     */
    public function add(){
        return view("mp.add");
    }

    /**
     * 设置微信菜单
     */
    public function menu(){
        $data['list'] = array();
        return view("mp.menu",$data);
    }

    /**
     * 上传图片逻辑
     * @param Request $request
     * @return string
     */
    public function upload(Request $request)
    {
        if($request->isMethod('post'))
        {
            $img = Common::upload("qrcode");
            if($img){
                return json_encode(['code'=>200,'msg'=>'ok','img'=>$img]);
            }else{
                return json_encode(['code'=>0,'msg'=>'fail','img'=>'']);
            }
        }
    }

    /**
     * 上传logo
     * @param Request $request
     * @return string
     */
    public function logo(Request $request){
        if($request->isMethod('post'))
        {
            $img = Common::upload("logo");
            if($img){
                return json_encode(['code'=>200,'msg'=>'ok','img'=>$img]);
            }else{
                return json_encode(['code'=>0,'msg'=>'fail','img'=>'']);
            }
        }
    }
}