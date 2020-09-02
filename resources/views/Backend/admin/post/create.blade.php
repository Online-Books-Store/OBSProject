@extends('Backend/admin/layouts/master')
@section('title','Category')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('Backend/admin/messages/error')
            <div class="card card-body">
                <form action="" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="title">Book Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Book Content</label>
                        <textarea name="content" id="content" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Book Image</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                    <button class="btn btn-primary" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection