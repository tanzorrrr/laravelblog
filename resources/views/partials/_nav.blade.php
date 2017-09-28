<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel Blog</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="{{Request::is('/')?"active":""}}"><a href="/">Home</a></li>

            <li class="{{Request::is('about')?"active":""}}"><a href="/about">About</a></li>
            <li class="{{Request::is('posts')?"active":""}}"><a href="/posts">Articles</a></li>
            <li class="{{Request::is('contact')?"active":""}}"><a href="/contact">Contact</a></li>
        </ul>
        </ul>
    </div>
</nav>