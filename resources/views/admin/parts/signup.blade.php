@extends('admin.layouts.index')

@section('adminmain')
    <div class="signinspacewrap">
        <div class="login_header_space">
            <p class="login_header">新規登録</p>
        </div>
        <div class="signinspace">
            <div class="signinspaceinner">
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
    <table class="formtable">
        <form action="signup" method="post">
            @csrf
            <tr>
                <th>ユーザー名:</th>
                <td><input class="form-controll" type="text" name="name"></td>
            </tr>
            <tr>
                <th>メールアドレス:</th>
                <td><input class="form-controll" type="text" name="email"></td>
            </tr>
            <tr>
                <th>パスワード:</th>
                <td><input class="form-controll" type="password" name="password"></td>
            </tr>
            <tr>
                <th>再パスワード:</th>
                <td><input class="form-controll" type="password" name="password_confirmation"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="登録する" class="button"></td>
            </tr>
        </form>
    </table>
            </div>
        </div>
    </div>
@endsection