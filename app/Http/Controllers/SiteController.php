<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function menu()
    {
        return view('menu');
    }
    public function chef()
    {
        return view('chef');
    }
    
    public function blog()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(2);

        $links = $posts->links();

        $most_viewed=Post::mostViews()->get();

        // return view('blog', compact('posts', 'links'));
        return view('blog',[
            
            'posts'=>$posts,
            'links'=>$links,
            'most_posts'=>$most_viewed

        ]);
    }

    public function newsMore($id)
    {   
        $post = Post::findOrFail($id);
        
        $post->increment('views');
        $most_viewed=Post::mostViews()->get();
        
        return view('blogMore',[
            
            'post'=>$post,
            'most_posts'=>$most_viewed

        ]);
    }
    
    public function contact()
    {
        return view('contact');
    }
}
