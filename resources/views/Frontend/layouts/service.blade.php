    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Books</h2>
            {{-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p> --}}
          </div>
  
          
  
        </div>
      </section><!-- End Services Section -->
  
      <!-- ======= More Services Section ======= -->
      {{-- <section id="more-services" class="more-services"> --}}
        <div class="container">
  
          <div class="row">
            @foreach ($books as $book)
            <div class="col-md-3 d-flex align-items-stretch mb-3">
              <div class="card" style="background-image: url({{asset($book->image)}}" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                <h5 class="card-title"><a href="">{{$book->title}}</a></h5>
                  <p class="card-text">{{$book->content}}</p>
                  <div class="read-more"><a href="{{url('book/'.$book->id.'/view')}}"><i class="icofont-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
  
        </div>
      </section><!-- End More Services Section -->
  
      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Category</h2>
            {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p> --}}
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="300">
            @foreach ($categories as $category)
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">{{$category->category_name}}</a></h3>
              </div>
            </div>
            @endforeach
            
          </div>  
        </div>
      </section><!-- End Features Section -->
  
