@extends('layouts/app', ['title' => "blog"])

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
                      @foreach($posts as $post)                    
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
                          <form method="GET" action="{{route('search')}}">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                
                                <input type="text" name="key" class="form-control" placeholder="Qidirish">
                                
                                <div class="input-group-append">
                                  <button class="btn" type="button"><i class="ti-search"></i></button>
                                </div>

                              </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100" type="submit">Qidirish</button>
                          </form>
                      </aside>

                      <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
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
                      <aside class="single_sidebar_widget tag_cloud_widget">
                          <h4 class="widget_title">Tag Clouds</h4>
                          <ul class="list">
                              <li>
                                  <a href="#">project</a>
                              </li>
                              <li>
                                  <a href="#">love</a>
                              </li>
                              <li>
                                  <a href="#">technology</a>
                              </li>
                              <li>
                                  <a href="#">travel</a>
                              </li>
                              <li>
                                  <a href="#">restaurant</a>
                              </li>
                              <li>
                                  <a href="#">life style</a>
                              </li>
                              <li>
                                  <a href="#">design</a>
                              </li>
                              <li>
                                  <a href="#">illustration</a>
                              </li>
                          </ul>
                      </aside>


                      <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i1.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i4.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i6.png" alt="">
                                </a>
                            </li>
                        </ul>
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