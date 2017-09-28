@section('title','|about')
@extends('main')
@section('content')
    <div class="content">
        <div class="title m-b-md">
           About  {{$data['fullname']}}
        </div>
        <p>My email {{$data['email']}}</p>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
    @endsection
