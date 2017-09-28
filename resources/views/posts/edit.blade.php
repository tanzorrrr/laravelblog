@extends('main')
@section('title','|View Post')

@section('content')
    <div class="row">
        {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT']) !!}
        <div class="col-md-8">
            {{Form::label('title','Title')}}
            {{ Form::text('title',null,["class"=>'form-control']) }}
            {{Form::label('body',"Body:", "form-spacing-top")}}
            {{Form::textarea('body',null,['class'=>'form-control'])}}
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{date('M j,Y H:i',strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>last update:</dt>
                    <dd>{{date('M j,Y H:i',strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}

                    </div>
                    <div class="col-sm-6">
                        {{Form::submit('Save Canges',['class'=>'btn btn-success btn-block'])}}


                    </div>
                </div>
            </div>
        </div>
          {!! Form::close() !!}}
    </div><!-end form-->



@endsection

