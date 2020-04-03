@extends('layouts/app', ['title' => 'Qidiruv'])

@section('content')

<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
    <div class="hero-wrapper">
      <div class="hero-left">
          <h1 class="hero-title">Qidiruv</h1>
          <p>
            From  set together our divided own saw divided the form god 
            <br class="d-none d-xl-block"> 
            seas moveth you will fifth under replenish end
          </p>
      </div>
      
      <div class="hero-right">
        <div class="owl-carousel owl-theme w-100 hero-carousel">
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/hero-banner-sm.png" alt="">
          </div>
        </div>
      </div>
     
      <ul class="social-icons d-none d-lg-block">
        <li><a href="#"><i class="ti-facebook"></i></a></li>
        <li><a href="#"><i class="ti-twitter"></i></a></li>
        <li><a href="#"><i class="ti-instagram"></i></a></li>
      </ul>
    
    </div>
  </section>
  <!--================Hero Banner Section end =================-->


  <!--================Blog Area =================-->
  <section class="blog_area section-margin">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
                      @foreach($results as $post)                    
                      <article class="blog_item">
                        <div class="blog_item_img">
                          <img class="card-img rounded-0" src="/storage/{{ $post->thumb}}" alt="">
                          <a href="#" class="blog_item_date">
                            <p>{{$post -> created_at -> format('H:i|d/m/y')}}</p>
                          </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="{{ route('batafsil',$post -> id) }}">
                                <h2>{{$post->title}}</h2>
                            </a>
                            <p>{{$post->short}}</p>
                            <ul class="blog-info-link">
                              <li><a href="#"><i class="ti-eye"></i>{{$post->views}}</a></li>
                              <li><a href="#"><i class="ti-comments"></i> commentariya</a></li>
                            </ul>
                        </div>
                      </article>
                      @endforeach
                      <nav class="blog-pagination justify-content-center d-flex">  
                            {{$links}}
                      </nav>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <form action="#">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                                <div class="input-group-append">
                                  <button class="btn" type="button"><i class="ti-search"></i></button>
                                </div>
                              </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100" type="submit">Search</button>
                          </form>
                      </aside>

                      
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->

@endsection