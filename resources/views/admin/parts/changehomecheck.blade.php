@extends('layouts.helloapp')

@section('main')
    <div class="top">
        <h1 class="top_coment">
            {!!nl2br($content)!!}
        </h1>
    </div>
    <form action='changehomedone' method='POST' class=''>

        {{ csrf_field() }}
        <input type="hidden" name="article" value="{{nl2br($content)}}">
        <button type="submit" name="ok">
            送信
        </button>
    </form>
    <img class="main-img" src="{{asset('/assets/img/ダウンロード (2).jpeg')}}">
@endsection