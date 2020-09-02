@extends('Backend/admin/layouts/master')
@section('title','Post')
@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{url("admin/dashboard/post/create")}}" class="btn btn-primary">Create</a>
    </div>
    @include('Backend/admin/messages/success')
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="card text-dark mb-3">
                <div class="card-header bg-primary text-center">{{$post->title}}</div>
                <div class="card-body">
                <img src="{{ isset($post->image) ? asset('uploads/'.$post->image) : 'https://via.placeholder.com/150' }}" class="img-thumbnail rounded mx-auto d-block" style="width:200px; height:250px;" alt="image">
                <br>
                <div class="well">
                    {{substr($post->content,0,100)}}
                </div>
                </div>
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