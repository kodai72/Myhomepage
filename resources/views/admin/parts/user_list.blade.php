@extends('admin.layouts.index')
@section('adminmain')
    <div class="userinspacewrap">
        <div class="login_header_space">
            <p class="userlist_header">ユーザー</p>
        </div>
        <div class="userlistspace">
            <div class="userlistspaceinner">
                <table class="userlisttable">
                    <tr>
                        <td class="kk">ユーザー名</td>
                        <td class="kk">メールアドレス</td>
                        <td class="kkk">投稿</td>
                    </tr>
@foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>---------------</td>>
    </tr>
@endforeach
    </table>
            </div>
        </div>
    </div>
@endsection