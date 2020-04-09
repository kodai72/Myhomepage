@extends('layouts.helloapp')

@section('main')
    <div class="top">
        <h1 class="top_coment">
            {{$content}}
        </h1>
    </div>
    <form action='changeaboutdone' method='POST' class=''>

        {{ csrf_field() }}
        <input type="hidden" name="article" value={{$content}}>
        <button type="submit" name="ok">
            送信
        </button>
    </form>
    <div class="works-wrapper">
        <div class="work-box">
            <img class="work-image" src="{{asset('/assets/img/iJd_TpcDOBwKe901567930191_1567930245.jpg')}}">
        </div>
        <div class="work-box">
            <img class="work-image_next" src="{{asset('/assets/img/iJd_TpcDOBwKe901567930191_1567930245.jpg')}}">
        </div>
    </div>
    <div class="works-wrapper">
        <div class="work-box">
            <img class="work-image_next" src="{{asset('/assets/img/Tao9zY6D7uk1Suw1567930676_1567930847.jpg')}}">
        </div>
        <div class="work-box">
            <img class="work-image" src="{{asset('/assets/img/Tao9zY6D7uk1Suw1567930676_1567930847.jpg')}}">
        </div>
    </div>
    <div class="works-wrapper">
        <div class="work-box">
            <img class="work-image" src="{{asset('/assets/img/SwbUZFUUS42tB7W1567931051_1567931130.jpg')}}">
        </div>
        <div class="work-box">
            <img class="work-image_next" src="{{asset('/assets/img/SwbUZFUUS42tB7W1567931051_1567931130.jpg')}}">
        </div>
    </div>
    <div class="works-wrapper">
        <div class="work-box">
            <img class="work-image_next" src="{{asset('/assets/img/jJrSv8USbwsfDVZ1567931159_1567931213.jpg')}}">
        </div>
        <div class="work-box">
            <img class="work-image" src="{{asset('/assets/img/jJrSv8USbwsfDVZ1567931159_1567931213.jpg')}}">
        </div>
    </div>
    <div class="works-wrapper">
        <div class="work-box">
            <img class="work-image" src="{{asset('/assets/img/G9zuyW2Z8NacziA1567930894_1567931004.jpg')}}">
        </div>
        <div class="work-box">
            <img class="work-image_next" src="{{asset('/assets/img/G9zuyW2Z8NacziA1567930894_1567931004.jpg')}}">
        </div>
    </div>




@endsection
