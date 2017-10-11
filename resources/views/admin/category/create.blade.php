@section('title','|dashboard')
@extends('layouts.app')
@section('content')
    <div class="container">
        <form  class="form-horizontal"action="{{route('admin.category.store')}}" method="post">
            {{csrf_field()}}
            {{-- Form include--}}
            @include('partials.form')
        </form>
      
    </div>
@endsection