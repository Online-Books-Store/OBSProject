@extends('Backend/admin/layouts/master')
@section('title','Create User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('Backend/admin/messages/error')
            <div class="card card-body">
                <form action="" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Please Add User Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Please Add email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" value="{{old('password')}}" name="password" class="form-control" placeholder="Please Add password">
                    </div>
                    <div class="form-group">
                        <label for="status">User Role</label>
                        <select name="status" id="status" class="form-control">
                            <option>Select Role</option>
                            <option>admin</option>
                            <option>user</option>
                        </select>
                    </div>

                    <div class="float-left">
                        <a href="{{url("admin/dashboard/user")}}" class="btn btn-outline-secondary">Back</a>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection