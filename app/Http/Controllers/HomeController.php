<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App;
use App\Course;
use Elasticsearch\ClientBuilder;


class HomeController extends Controller
{

    public function welcome(){
        return view('welcome');
    }

    /**
     * 文章列表
     */
    public function index(Request $request){
//        $banner = DB::table('jobs')->where('position_address','北京')->orderBy('id','asc')->limit(1)->first();
        $page = $request->input('page',1);
        $pagesize = $request->input('pagesize',80);
        $offset = ($page-1) * $pagesize;
        //$jobs_data = DB::table('jobs')->where('position_address','北京')->offset($offset)->limit($pagesize)->get()->toArray();
        $courses = DB::table('course')->paginate($pagesize);

        return view('home.home', compact('courses'));
    }

    public function search(Request $request){
        $client = ClientBuilder::create()->build();

        $courses =  DB::table('course')->get()->toArray();
        foreach ($courses as $cours) {
            $params = [
                'index' => 'course_index',
                'type' => 'course_type',
                'id' => 'course_'.$cours->id,
                'body' => ['title' => $cours->title,'desc'=>$cours->desc,'content'=>$cours->content]
            ];
            $response = $client->index($params);
            print_r($response);
        }
    }

    public function search_all(){
        $client = ClientBuilder::create()->build();
        $params = [
            'index' => 'course_index',
            'type' => 'course_type',
        ];

        $params['body']['query']['match']['title'] = '入门';
        $res = $client->search($params);
        print_r($res);
    }

    public function add(Request $request){
        // dd(base_path());
        // dd(app_path());
        // dd(public_path());

        // $environment = App::environment();

        // dd($environment);
//    phpinfo();
//         $value = config('app.timezone');
//         dd($value);

        if($request->isMethod('post')){
            //校验
            $this->validate($request, [
                'title' => 'required|min:2|max:20',
                'author' => 'required',
                'cid' => 'required|integer',
                'photo' => 'required',
                'desc' => 'required',
                'content' => 'required'
            ]);

            //保存
            $course = new Course();

            $course->title = $request->post('title');
            $course->author = $request->post('author');
            $course->cid = $request->post('cid');
            $course->photo = $request->post('photo');
            $course->url = $request->post('url');
            $course->passwd = $request->post('passwd');
            $course->desc = $request->post('desc');
            $course->content = $request->post('content');
            $course->created_at = time();
            $course->save();

            return redirect('/home/index');
        }

        return view('home.add');
    }

    public function upload(Request $request)
    {
        if($request->isMethod('post'))
        {
            $file =  $request->file('upload');
            if($file){
                $extension = $file -> guessExtension();
                $newName = str_random(18).".".$extension;
                // echo base_path().'/public/storage/uploads';
                $file -> move(base_path().'/public/storage/uploads',$newName);
                $idCardFrontImg = '/uploads/'.$newName;
                return json_encode($idCardFrontImg);
            }else{
                $idCardFrontImg = '';
                return json_encode($idCardFrontImg);
            }
        }
    }

}
