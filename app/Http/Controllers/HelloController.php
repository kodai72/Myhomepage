<?php

namespace App\Http\Controllers;

use App\User;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use App\HomeArticle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HelloController extends Controller
{

    public function store_link_item(){
        $link_data=[
            ['links'=>'link_1','link_name'=>'HOME'],
            ['links'=>'link_2','link_name'=>'茶研について'],
            ['links'=>'link_3','link_name'=>'活動内容'],
            ['links'=>'link_4','link_name'=>'年間行事'],
            ['links'=>'link_5','link_name'=>'メンバー募集！'],
            ['links'=>'link_6','link_name'=>'リンク']
        ];

        return $link_data;

    }


    public function intro(){

        $data=$this->store_link_item();

        return view('parts.intro',['data'=>$data]);
    }

    public function schedule(){
        $data=$this->store_link_item();
        return view('parts.schedule',['data'=>$data]);
    }

    public function content(){
        $data=$this->store_link_item();
        return view('parts.content',['data'=>$data]);
    }

    public function adindex(){
        return view('admin.layouts.index');
    }



    public function dashboard(){
        $items=DB::select('select * from member');

        return view('admin.parts.dashboard',['items'=>$items]);
    }

    public function postdashboard(Request $request){
       $items=DB::select('select * from member');
       return view('admin.parts.dashboard',['items'=>$items]);

    }

    public function kk(Request $request){
        $user=Auth::user();
        $sort=$request->sort;
      //  $items=Person::orderBy($sort,'asc')
       //     ->simplePaginate(5);
        $param=['sort'=>$sort,'user'=>$user];
        return view('parts.kk',$param);
    }

    public function getAuth(Request $request){
        $param=['message'=>'ログインしてください'];
        return view('auth',$param);
    }

    public function postAuth(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            $msg='ログインしました。('.Auth::user()->name.')';
        }else{
            $msg='ログインに失敗しました。';
        }

        return view('auth',['message'=>$msg]);
    }

    public function getSignup()
    {
        $param=['message'=>'登録してください'];
        return view('admin.parts.signup',$param);
    }

    public function postSignup(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:8'
        ]);

        if(User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ])){
           // $msg='新規登録しました。';
            return redirect('/admin/dashboard');
        }else{
            $msg='新規登録に失敗しました。';
        }
        return view('admin.parts.signup',['message'=>$msg]);
    }

    public function getUsers()
    {
        $users = User::all();

        return view('admin.parts.user_list',['users'=>$users]);
    }

    public function getProfile()
    {
       $auth_user=Auth::user();

        return view('admin.parts.profile',['auth_user'=>$auth_user]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/dashboard');
    }

    public function getSignin(Request $request){
        $param=['message'=>'ログインしてください'];
        return view('admin.parts.signin',$param);
    }

    public function postSignin(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            return redirect('/admin/dashboard');
        }else{
            $msg='ログインに失敗しました。';
        }

        return view('admin.parts.signin',['message'=>$msg]);
    }

}
