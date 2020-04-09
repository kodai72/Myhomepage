<!DOCUTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>laravel</title>
    <link rel="stylesheet" href="{{asset('/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/admin_style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplemde@latest/dist/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/npm/simplemde@latest/dist/simplemde.min.js"></script>


</head>
<body>

    <div class="adbar clearfix">
        <ul class="ad-top-menu">
            <li class="ad-bar-item"><i class="fa fa-home fa-lg"></i><a href="{{url('mainhome')}}">サイトへ</a></li>
        </ul>
        <ul class="ad-top-menu-secondary">
            @if(Auth::check())
                <li class="ad-bar-item"><a href="logout">ログアウト</a></li>
                <li class="ad-bar-item"><a>こんにちは、{{Auth::user()->name}}さん</a></li>
            @else
                <li class="ad-bar-item"><a href="/laravelapp/public/admin/signin">ログイン</a></li>
                <li class="ad-bar-item"><p>こんにちはゲストさん</p></li>
            @endif

        </ul>
    </div>
    <div class="adwrapper">
        <div class="adsidebar">
            <ul class="side-nav">
                <li class="side-nav-item"><i class="fas fa-tachometer-alt fa-lg"></i><a href="{{url('/admin/dashboard')}}">ダッシュボード</a></li>
                <li class="side-nav-item"><i class="fas fa-thumbtack fa-lg"></i><a>投稿</a></li>
                <li class="sub-nav-item"><a href="{{url('/admin/changehome')}}">HOME編集</a></li>
                <li class="sub-nav-item" ><a href="{{url('/admin/changeabout')}}">「茶件について」編集</a></li>
                <li class="sub-nav-item"><a >ブログ新規追加</a></li>
                <li class="sub-nav-item"><a>ブログ投稿一覧</a></li>
                <li class="side-nav-item"><i class="fas fa-user fa-lg"></i><a>ユーザ</a></li>
                <li class="sub-nav-item"><a href="{{url('/admin/userlist')}}">ユーザ一覧</a></li>
                <li class="sub-nav-item"><a href="{{url('/admin/signup')}}">新規追加</a></li>
                <li class="sub-nav-item"><a href="{{url('/admin/profile')}}">あなたのプロフィール</a></li>
            </ul>
        </div>
        <div class="admainmain">
            @yield('adminmain')
        </div>
    </div>

</body>
</html>