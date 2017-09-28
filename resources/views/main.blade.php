@include('partials._head')
<body>
@include('partials._nav')
    @include('partials._message')
    <div class="container">
    @yield('content')
    </div>
        @yield('scripts')
@include('partials._footer')
</body>
</html>
