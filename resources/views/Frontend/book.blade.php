@extends('FrontEnd.layouts.master')
@include('FrontEnd.layouts.nav')

@section('content')

<div class="container-fluid">
      <div class="card">
            <div class="card-title">
                  <h2>{{$book->title}}</h2>
            </div>
            <div class="care-body">
                  @if ($book->image)
                  <img src="{{url(asset('public/uploads/'.$book->image))}}" alt="" class="w-100">                      
                  @endif
                  <p>{{$book->content}}</p>
            </div>
      </div>
</div>
    
@include('FrontEnd.layouts.footer')
@endsection

