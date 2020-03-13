@extends('layouts/app', ['title' => "batafsil"])

@section('content')
<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="img/blog/main-blog/m-blog-1.jpg" alt="">
        <a href="#" class="blog_item_date">
        <p>{{$post -> created_at -> format('d/m/y')}}</p>
        </a>
    </div> 
    <div class="blog_details">
        <h2>{{$post->content}}</h2>
        <ul class="blog-info-link">
            <li><a href="#"><i class="ti-user"></i>aaa</a></li>
            <li><a href="#"><i class="ti-comments"></i> bbb</a></li>
        </ul>
    </div>
</article>
@endsection