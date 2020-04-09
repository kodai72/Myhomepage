@extends('admin.layouts.index')
@section('adminmain')
    <p>あなたは{{$auth_user->name}}です。</p>
@endsection