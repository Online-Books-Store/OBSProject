@extends('Backend/admin/layouts/master')
@section('title','Post')
@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{url("admin/dashboard/post/create")}}" class="btn btn-primary">Create</a>
    </div>
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{$post->title}}</div>
                <div class="card-body">{{$post->content}}</div>
                <div class="card-footer">
                    <div class="float-right">
                        <a href="{{url("admin/dashboard/post/$post->id")}}" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    </div>
</div>
@endsection