
<!DOCUTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <title>laravel</title>
    <link rel="stylesheet" href="{{asset('/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">


</head>
<body>
<!--ヘッダー部分ここから-->
@component('components.header')
    @slot('logo')
        法政大学茶道研究会
    @endslot
    @slot('header_img')
        /assets/img/test.png
    @endslot
    @each('components.nav_item',$data,'item')
@endcomponent
<!--ここまで-->
<div class="wrapper clearfix">
    <!--メイン部分ここから-->
    <main class="main">
        @yield('main')
    </main>
    <!--ここまで-->
    <!--サイドメニュー部分ここから-->
    @component('components.sidemenu')
       @each('components.nav_item',$data,'item')
    @endcomponent
    <!--ここまで-->
</div>
<!--フッター部分ここから-->
    @component('components.footer')
        @each('components.nav_item',$data,'item')
        @slot('copyright_name')
            Copyright © 2020 法政大学茶道研究会
        @endslot
    @endcomponent
<!--ここまで-->
</body>
</html>
