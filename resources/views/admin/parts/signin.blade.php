@extends('admin.layouts.index')
@section('adminmain')
    <div class="signinspacewrap">
        <div class="login_header_space">
            <p class="login_header">Login</p>
        </div>
        <div class="signinspace">
            <div class="signinspaceinner">
    <table class="formtable">
        <form action="signin" method="post">
            @csrf
            <tr>
                <th>メールアドレス:</th>
                <td><input class="form-controll" type="text" name="email"></td>
            </tr>
            <tr>
                <th>パスワード:</th>
                <td><input class="form-controll" type="password" name="password"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Login" class="button"></td>
            </tr>
        </form>
    </table>
            </div>
        </div>
    </div>
@endsection