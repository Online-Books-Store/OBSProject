@extends('Backend/admin/layouts/master')
@section('title','Post')
@section('content')
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="{{ isset($profile->image) ? asset("uploads/$profile->image") : 'http://lorempixel.com/200/200/people/9/' }}" class="avatar img-circle img-thumbnail" alt="avatar">
      </div>
    </div>



    
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
    @include('Backend/admin/messages/passerror')
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" class="form-control col-lg-8" value="{{$profile->name}}">
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{$profile->email}}" name="email" type="email">
          </div>
        </div>



        <div class="form-group">
          <label class="col-md-3 control-label">Current Password:</label>
          <div class="col-md-8">
            <input class="form-control" type="password" name="current">
          </div>
        </div>



        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" type="password" name="newpassword">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" type="password" name="confirmpassword">
          </div>
        </div>
        <div class="form-group col-lg-8">
        <h6>Upload a different photo...</h6>
        <input type="file" name="image">
        </div>


        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <button class="btn btn-primary" type="submit">Save Changes</button>
            <span></span>
            <a href="{{url("admin/dashboard")}}" class="btn btn-default">Cancel</a>
          </div>
        </div>


      </form>
    </div>
  </div>
</div>

@endsection