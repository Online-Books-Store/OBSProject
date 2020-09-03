@extends('FrontEnd.layouts.master')

@section('content')
@include('FrontEnd.layouts.nav')

@include('FrontEnd.layouts.hero')


<div class="container">
      <div class="card p-3 m-3">
            <div class="card-title">
                  <h2>{{$book->title}}</h2>
            </div>
            <div class="care-body">
                  @if ($book->image)
                  <img src="{{url(asset('/uploads/'.$book->image))}}" alt="" class="w-100"> 
                  @else
                  <img src="{{url(asset('assets/img/more-services-1.jpg'))}}" alt="" class="w-100">                   
                  @endif
                  <p class="m-3">{{$book->content}}</p>
            </div>
      </div>
      <div class="container">
            @if (auth()->check())
            <form >
                  <div class="row">
                    <div class="col-9">
                      <input type="text" class="form-control" placeholder="Review...">
                    </div>
                    <div class="col-2">
                      <input type="submit" class="form-control btn btn-info" value="Review">
                    </div>
                  </div>
            </form>
            @else
            <p>Do you Want to Review? Please <a href="{{route('login')}}">Login</a> OR <a href="{{route('register')}}">Register</a></p>
            @endif

            
      </div>
      <div class="container">
            @foreach ($comments as $comment)
            <div class="card mt-2">
                  <div class="card-title">
                        {{$comment->user->name}}
                  </div>
                  <div class="card-body">
                        {{$comment->comment}}
                  </div>
            </div>
            @endforeach
            
      </div>
      
</div>

@include('FrontEnd.layouts.footer')
@endsection

