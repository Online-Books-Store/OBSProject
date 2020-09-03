@extends('FrontEnd.layouts.master')
@section('title','Register')
@section('content')
<div class="container">

    <div class="section-title mt-5">
      <h2>Register Form</h2>
    </div>

    <div class="row justify-content-center">

      <div class="card col-lg-5 col-md-12 p-3" data-aos-delay="300">
      <form action="{{url('register')}}" method="post">
        @csrf
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
            <div class="validate"></div>
          </div>
          <a class="btn btn-outline-secondary" href="{{url('/')}}">Back</a>
          <input type="submit" class="btn btn-info " value="Register">
          <p class="text-center mt-3">If You Have Account, Please <a href="{{url('userlogin')}}"> Login</a>.</p>
        </form>
      </div>

    </div>

  </div>
  @include('FrontEnd.layouts.js')
@endsection