@section('title','|dashboard')
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Catgoryes 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Matyrials 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Users 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Users to day 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create category</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">First categoy</h4>
                    <p class="list-group-item-text">Count matrials</p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create matirial</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">First matiryal</h4>
                    <p class="list-group-item-text">Count cat</p>
                </a>
            </div>
        </div>
    </div>
@endsection