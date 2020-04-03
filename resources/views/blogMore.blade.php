@extends('layouts/app', ['title' => "batafsil"])

@section('content')

<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
    <div class="hero-wrapper">
      <div class="hero-left">
          <h1 class="hero-title">Yangiliklar!</h1>
          <p>
            From  set together our divided own saw divided the form god 
            <br class="d-none d-xl-block"> 
            seas moveth you will fifth under replenish end
          </p>
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


  <!--================Blog Area =================-->
  <section class="blog_area section-margin">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">                  
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="/storage/{{ $post->thumb}}" alt="">
                                <a href="#" class="blog_item_date">
                                <p>{{$post -> created_at -> format('H:i|d/m/y')}}</p>
                                </a>
                            </div> 
                            <div class="blog_details">
                                <h2>{{$post->content}}</h2>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="ti-eye"></i>{{$post->views}}</a></li>
                                    <li><a href="#"><i class="ti-comments"></i> commentariya</a></li>
                                </ul>
                            </div>
                        </article>
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



                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Recent Post</h3>
                          @foreach( $most_posts as $most)
                          <div class="media post_item">
                              <img width="80px" src="/storage/{{$most->thumb}}" alt="post">
                              <div class="media-body">
                                  <a href="{{ route('batafsil', $most->id)}}">
                                    <h3>{{$most->title}}</h3>
                                  </a>
                                  <p>
                                    <i class="ti-eye">{{$most->views}}</i>
                                    |
                                    <i class="ti-calendar">{{$most -> created_at -> format('H:i d/m/Y')}}</i>
                                  </p>
                              </div>
                          </div>                          
                          @endforeach
                      </aside>

                      <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email" required>
                          </div>
                          <button class="button rounded-0 primary-bg text-white w-100" type="submit">Subscribe</button>
                        </form>
                      </aside>

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->
@endsection