@section('title','|dashboard')
@extends('layouts.app')
@section('content')
    <div class="container">

        <hr>
        <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square"></i> Create ctegory
        </a>
        <table class="table table-striped">
            <thead>
            <th>Name</th>
            <th>Published</th>
            <th>Action</th>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{$category->title}}</td>
                        <td>{{$category->published}}</td>
                        <td><a href="{{route('admin.category.edit',['id'=>$category->id])}}"><i class="fa fa-edit"></i></a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Data is epsent</td>
                    </tr>
                    @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$categories->links()}}
                    </ul>

                </td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection