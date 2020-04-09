<!--ヘッダー部分実装部分-->
<header class="header">

    <img class="header-img" src="{{asset($header_img)}}">

   < <nav class="global-nav">
        <h1 class="logo">
            <a href="{{url('/home')}}">{{$logo}}</a>
        </h1>
        <ul>
            <li class="nav-item active"><a href="{{url('/mainhome')}}">{{$link_1}}</a></li>
            <li class="nav-item"><a href="{{url('/intro')}}">{{$link_2}}</a></li>
            <li class="nav-item"><a href="{{url('/content')}}">{{$link_3}}</a></li>
            <li class="nav-item"><a href="{{url('/schedule')}}">{{$link_4}}</a></li>
            <li class="nav-item"><a href="#">{{$link_5}}</a></li>
            <li class="nav-item"><a href="#">{{$link_6}}</a></li>
        </ul>
    </nav>
</header>
