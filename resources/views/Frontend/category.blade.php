@extends('Frontend.layouts.master')

@section('content')
@include('Frontend.layouts.nav')

{{-- @include('Frontend.layouts.hero') --}}

<section class="mt-5">
      <div class="container">
      <h2 class="m-3 text-info font-weight-bold">{{strtoupper($category->category_name)}}</h2>
      <hr>
            <div class="row">
                  @foreach ($posts as $book)
                        <div class="col-md-2">
                              @if ($book->image)
                              <a href="{{url('book/'.$book->id.'/view')}}"><img src="{{url(asset('/uploads/'.$book->image))}}" alt="" class="w-100 img-thumbnail"></a>
                              @else
                              <a href="{{url('book/'.$book->id.'/view')}}"><img src="{{url(asset('assets/img/more-services-1.jpg'))}}" alt="" class="w-100 img-thumbnail"></a>
                              @endif

                              <h5 class="text-center mt-2">{{$book->title}}</h5>
                        </div>
                  @endforeach
            </div>
      </div>
</section>
@include('Frontend.layouts.footer')
@endsection

