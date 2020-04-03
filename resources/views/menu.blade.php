@extends('layouts/app', ['title' => "Food menu"])

@section('content')

<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
    <div class="hero-wrapper">
      <div class="hero-left">
        <h1 class="hero-title">Food Menu</h1>
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


  <!--================Food menu section start =================-->  
  <section class="section-margin">
    <div class="container">
      <div class="section-intro mb-75px">
        <h4 class="intro-title">Food Menu</h4>
        <h2>Delicious food</h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Roasted Marrow</h4>
                <h3 class="price-tag">$32</h3>
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Roasted Marrow</h4>
                <h3 class="price-tag">$32</h3>
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Roasted Marrow</h4>
                <h3 class="price-tag">$32</h3>
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Roasted Marrow</h4>
                <h3 class="price-tag">$32</h3>
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Roasted Marrow</h4>
                <h3 class="price-tag">$32</h3>
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Roasted Marrow</h4>
                <h3 class="price-tag">$32</h3>
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Roasted Marrow</h4>
                <h3 class="price-tag">$32</h3>
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="media align-items-center food-card">
            <img class="mr-3 mr-sm-4" src="img/home/food1.png" alt="">
            <div class="media-body">
              <div class="d-flex justify-content-between food-card-title">
                <h4>Roasted Marrow</h4>
                <h3 class="price-tag">$32</h3>
              </div>
              <p>Whales and darkness moving form cattle</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Food menu section end =================-->  



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