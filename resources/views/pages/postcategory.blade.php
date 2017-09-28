@extends('main')
@section('content')



   <div class="row">
    <div class="col-md-8">
    <h2>Media Object</h2>
    <p>The media object can also be top, middle or bottom-aligned with the "media-top", "media-middle" or "media-bottom" class:</p><br>
    <div class="media">
        <div class="media-left media-top">
            <img src="img_avatar1.png" class="media-object" style="width:80px">
        </div>
        <div class="media-body">
            <h4 class="media-heading">Media Top</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <hr>
    <div class="media">
        <div class="media-left media-middle">
            <img src="img_avatar1.png" class="media-object" style="width:80px">
        </div>
        <div class="media-body">
            <h4 class="media-heading">Media Middle</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <hr>
    <div class="media">
        <div class="media-left media-bottom">
            <img src="img_avatar1.png" class="media-object" style="width:80px">
        </div>
        <div class="media-body">
            <h4 class="media-heading">Media Bottom</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
     </div>
     </div>
    </div>
    <div class="col-md-4">Sidebar</div>


@endsection
