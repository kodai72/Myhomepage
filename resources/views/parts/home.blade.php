@extends('layouts.helloapp')

@section('main')
<div class="top">
    <h1 class="top_coment">
        {!!$items->content!!}
    </h1>
</div>
<img class="main-img" src="{{asset('/assets/img/ダウンロード (2).jpeg')}}">
@endsection
