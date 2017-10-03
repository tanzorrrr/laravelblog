@extends('main')

@section('title','| Create New Post')

@section('stylesheets')
    {!! Html::style('css/parslay.css') !!}
    @endsection

    @section('content')
        <div class="container">
        <h1>Sign In!</h1>

        <div class="row">
            <div class="col-md-6">

                {!! Form::open(['route' => 'posts.store','data-parslay-validate'=>'']) !!}
                    {{Form::label('title','Title')}}
                    {{Form::text('title',null,array('class'=>'form-control','required'=>''))}}
                     {{Form::label('slug','Slug')}}
                     {{Form::text('slug',null,array('class'=>'form-control','required'=>'','minlength'=>'5',
                     'maxlength'=>'255'))}}
                    {{Form::label('body',"Post Body:")}}
                    {{Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}
                    {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
                {!! Form::close() !!}

            </div>
        </div>
        </div>
@stop

@section('scripts')
    {!! Html::script('js/parslay.min.js') !!}}
    @endsection