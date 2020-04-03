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