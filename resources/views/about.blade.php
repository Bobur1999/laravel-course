@extends('layouts/app', ['title' => "About us"])

@section('content')

    <!--================Hero Banner Section start =================-->
  <section class="hero-banner hero-banner-sm">
    <div class="hero-wrapper">
      <div class="hero-left">
        <h1 class="hero-title">About Us</h1>
        <p>From  set together our divided own saw divided the form god <br class="d-none d-xl-block"> seas moveth you will fifth under replenish end</p>
      </div>
      <div class="hero-right">
        <div class="owl-carousel owl-theme w-100 hero-carousel">
          <div class="hero-carousel-item">
            <img class="img-fluid" src="" alt="">
          </div>
        </div>
      </div>
      @include('parts._social-icons')
    </div>
  </section>
  <!--================Hero Banner Section end =================-->

  <!--================About Section start =================-->
  <section class="about section-margin pb-xl-70">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-6 mb-5 mb-md-0 pb-5 pb-md-0">
          <div class="img-styleBox">
            <div class="styleBox-border">
              <img class="styleBox-img1 img-fluid" src="img/home/about-img1.png" alt="">
            </div>
            <img class="styleBox-img2 img-fluid" src="img/home/about-img2.png" alt="">
          </div>
        </div>
        <div class="col-md-6 pl-md-5 pl-xl-0 offset-xl-1 col-xl-5">
          <div class="section-intro mb-lg-4">
            <h4 class="intro-title">About Us</h4>
            <h2>We speak the good food language</h2>
          </div>
          <p>Living first us creepeth she'd earth second be sixth hath likeness greater image said sixth was without male place fowl evening an grass form living fish and rule lesser for blessed can't saw third one signs moving stars light divided was two you him appear midst cattle for they are gathering.</p>
          <a class="button button-shadow mt-2 mt-lg-4" href="#">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Section End =================-->


  <!--================Featured Section Start =================-->
  <section class="section-margin mb-lg-100">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Featured Food</h4>
        <h2>Fresh taste and great price</h2>
      </div>


      <div class="owl-carousel owl-theme featured-carousel">
        <div class="featured-item">
          <img class="card-img rounded-0" src="img/home/featured1.png" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Mountain Mike Pizza</h3>
            </a>
            <p>Whales and darkness moving</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">$35</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="img/home/featured2.png" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Patatas Bravas</h3>
            </a>
            <p>Whales and darkness moving</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">$30</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="img/home/featured3.png" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Pulled Sandwich</h3>
            </a>
            <p>Whales and darkness moving</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">$20</h3>
            </div>
          </div>
        </div>
        <div class="featured-item">
          <img class="card-img rounded-0" src="img/home/featured1.png" alt="">
          <div class="item-body">
            <a href="#">
              <h3>Mountain Mike Pizza</h3>
            </a>
            <p>Whales and darkness moving</p>
            <div class="d-flex justify-content-between">
              <ul class="rating-star">
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
                <li><i class="ti-star"></i></li>
              </ul>
              <h3 class="price-tag">$35</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Featured Section End =================-->


  <!--================CTA section start =================-->  
  <section class="cta-area text-center">
    <div class="container">
      <p>Some Trendy And Popular Courses Offerd</p>
      <h2>Under replenish give saying thing</h2>
      <a class="button" href="#">Reservation</a>
    </div>
  </section>
  <!--================CTA section end =================-->  

@endsection