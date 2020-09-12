@extends('Frontend.layouts.master')

@section('content')
@include('Frontend.layouts.nav')
<div class="hr mt-3 pt-5"></div>
<div class="container mt-3">
      <div class="row pt-3 mb-3">            
            <div class="col-md-6 text-center">
                  <img src="{{url(asset('/uploads/'.$book->image))}}" alt="" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-6">
                  <h3>Book Detial</h3>
                  <div>
                        <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Book Name</th>
                                  <th scope="col">{{$book->title}}</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Author</th>
                                  <td>{{$book->author->name}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Category</th>
                                  <td>{{$book->category->category_name}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">Price</th>
                                  <td>5000</td>
                                </tr>
                              </tbody>
                            </table> 
                  </div>
            </div>
      </div>
      <div class="container p-3">
            <h3>Book Overview</h3>
            <div class="card">
                  <p class="m-3">{{$book->content}}</p>
            </div>
      </div>
      <div class="container m-3">
            @if (auth()->check())
            <form method="" action="{{url('/book/'. $book->id .'/comment')}}">
                  <div class="row">
                    <div class="col-9">
                      <input type="text" class="form-control" placeholder="Review..." name="comment">
                    </div>
                    <div class="col-2">
                      <input type="submit" class="form-control btn btn-info" value="Review">
                    </div>
                  </div>
            </form>
            @else
            <p>Do you Want to Review? Please <a href="{{url('userlogin')}}">Login</a> OR <a href="{{url('userregister')}}">Register</a></p>
            @endif


      </div>
      <div class="container">
            @foreach ($comments as $comment)
            <div class="card m-2">
                  <div class="card-title p-3 m-0">
                        <i>{{$comment->user->name}}</i>
                  </div>
                  <div class="card-body p-0 m-2">
                        <div class="alert alert-primary" role="alert">
                              {{$comment->comment}}
                        </div>
                  </div>
            </div>
            @endforeach

      </div>

</div>

@include('Frontend.layouts.footer')
@endsection

