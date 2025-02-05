<header id="header">
    <h1><a href="#">Blog</a></h1>
    <nav class="main">
        <ul>
            @auth
            <li class="menu user">
                <a href="#menu"><img src="{{asset(auth()->user()->avatar)}}"></a>
            </li>
            @else
            <li class="menu">
                <a class="fa-user" href="#menu">Menu</a>
                @endauth
            </li>
        </ul>
    </nav>
</header>