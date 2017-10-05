<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel Blog</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="{{Request::is('/')?"active":""}}"><a href="/">Home</a></li>
            <li class="{{Request::is('blog')?"active":""}}"><a href="blog">Blog</a></li>
            <li class="{{Request::is('about')?"active":""}}"><a href="/about">About</a></li>
            <li class="{{Request::is('posts')?"active":""}}"><a href="/posts">Articles</a></li>
            <li class="{{Request::is('contact')?"active":""}}"><a href="/contact">Contact</a></li>
        </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>