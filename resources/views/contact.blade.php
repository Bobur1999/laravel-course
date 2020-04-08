@extends('layouts/app', ['title' => "contact"])

@section('content')

  <!--================Hero Banner Section start =================-->
  <section class="hero-banner hero-banner-sm">
    <div class="hero-wrapper">
      <div class="hero-left">
        <h1 class="hero-title">Contact Us</h1>
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


  <!-- ================ contact section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        
        <div class="col-lg-8">
          @if(session()->has('success'))
              <div class="alert alert-success">
                  {{session()->get('success')}}
              </div>
          @endif
          @if($errors->any())
              <div class="alert alert-danger">
                  <ul>    
                      @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form class="form-contact contact_form" action="{{route('contact.store')}}" method="post" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea  class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message">{{ old('message') }}</textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input value="{{ old('name') }}" class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input value="{{ old('email') }}" class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input value="{{ old('subject') }}" class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

@endsection