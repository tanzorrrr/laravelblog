@extends('main')

@section('title','blog')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Blog</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($posts as $post)
            <h2>{{$post->title}}</h2>
                <h5>Publishrd{{date('M j,Y',strtotime($post->created_at))}}</h5>
                <p>{{substr($post->body,0, 250)}}{{strlen($post->body)>250? '...':""}}</p>
                <a href="{{route('blog.single',$post->id)}}"class="btn btn-primery">Read more</a>
                <hr>
                @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {!! $posts->links() !!}}
        </div>
    </div>
    @endsection

