@extends('main')
@section('title','|homepage')
@section('content')
    @section('styleshet')
        <link rel="stylesheet" href="styles.css">
    @endsection
    @foreach($posts as $post)
    <div class="post">
        <h3>{{$post->title}}</h3>
        <p>{{substr($post->body,0,300)}}</p>
        <a href="{{url('blog/'.$post->slug)}}">read more</a>
     </div>
    @endforeach
</div>
    @section('scripts')
        <script url="js/scripts.js"></script>
        @endsection
    @endsection

