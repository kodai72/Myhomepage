<?php

namespace App\Http\Controllers;

use App\HomeArticle;
use Illuminate\Http\Request;

class HomeArticleController extends Controller
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



    public function changehome(Request $request){

        return view('admin.parts.changehome');
    }

    public function changeabout(){
        return view('admin.parts.changeabout');
    }
    //----------------------------------------------------------------------------

    public function index(Request $request)
    {

        $items=HomeArticle::find(1);

        $data=$this->store_link_item();

        return view('parts.home',['data'=>$data,'items'=>$items]);
    }
    public function intro(Request $request)
    {

        $items=HomeArticle::find(2);

        $data=$this->store_link_item();

        return view('parts.intro',['data'=>$data,'items'=>$items]);
    }

    //----------------------------------------------------------------------------

    public function changehomecheck(Request $request)
    {


        $content=$request->markdown;

        $data=$this->store_link_item();

        return view('admin.parts.changehomecheck',['data'=>$data,'content'=>$content]);
    }

    public function changeaboutcheck(Request $request)
    {
        $content=$request->markdown;

        $data=$this->store_link_item();

        return view('admin.parts.changeaboutcheck',['data'=>$data,'content'=>$content]);
    }

    //----------------------------------------------------------------------------

    public function update(Request $request){
        $home_article=HomeArticle::find(1);
        $home_article->content=$request->markdown;
        $home_article->save();
        return redirect('/home');
    }

    public function update2(Request $request){
        $home_article=HomeArticle::find(2);
        $home_article->content=$request->markdown;
        $home_article->save();
        return redirect('/about');
    }

    //----------------------------------------------------------------------------

    public function done(Request $request){

        $home_article=HomeArticle::find(1);
        $home_article->content=$request->article;
        $home_article->save();

        return view('admin.parts.changehomedone');
    }

    public function done2(Request $request){

        $home_article=HomeArticle::find(2);
        $home_article->content=$request->article;
        $home_article->save();

        return view('admin.parts.changeaboutdone');
    }
    //----------------------------------------------------------------------------
}
