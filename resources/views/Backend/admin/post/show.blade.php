@extends('Backend/admin/layouts/master')
@section('title','Post Show')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{$post->title}}</div>
                <div class="card-body">{{$post->content}}</div>
                <div class="card-footer">
                    <div class="float-left">
                        <a href="{{url("admin/dashboard/post")}}" class="btn btn-info">Back</a>
                    </div>
                    <div class="float-right">
                        <a href="{{url("admin/dashboard/post/$post->id/edit")}}" class="btn btn-primary">Edit</a>
                        <a href="{{url("admin/dashboard/post/$post->id/delete")}}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection