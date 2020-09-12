<section id="features" class="features">
  <div class="container-fluid ">
    <div class="row" data-aos="fade-up" data-aos-delay="300">
      @foreach ($categories as $category)
      <div class="col-md-3 p-2">
        <a href="{{url('/book/category/'.$category->id)}}">
        <div class="icon-box" style="display: block !important ;">
          {{-- <i class="ri-store-line" style="color: #ffbb2c;"></i> --}}
        <h3 style="text-align: center !important;">{{$category->category_name}}</h3>
        </div>
      </a>
      </div>
      @endforeach      
    </div>  
  </div>
</section><!-- End Features Section -->
 <!-- ======= Services Section ======= -->

    <div class="container" id="services" class="services">
      <div class="section-title" data-aos="fade-up">
        <h2>Books</h2>
      </div>
      <div class="row">
        @foreach ($books as $book)
        <div class="col-md-3 mb-3 text-center">
          <a href="{{url('book/'.$book->id.'/view')}}"><img src="{{asset('uploads/'.$book->image)}}" class="img-fluid img-thumbnail w-100"></a>

            <p> {{$book->title}} </p>
            <div class="read-more"><a href="{{url('book/'.$book->id.'/view')}}"><i class="icofont-arrow-right"></i> Read More</a></div>
        </div>
        @endforeach
      </div>

    </div>



  
