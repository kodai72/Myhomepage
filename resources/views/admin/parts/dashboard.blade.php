@extends('admin.layouts.index')
@section('adminmain')
    @foreach($items as $item)
{{$item->name}}
    @endforeach
@endsection