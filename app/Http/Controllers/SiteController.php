<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Feedback;

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

    // Teskari Aloqa
    public function feedbackStore(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:100',
            'email'=>'required|email',
            'subject'=>'required|min:10|max:128',
            'message'=>'required|max:2048'
        ]);

        Feedback::create([
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'subject'=>$request->post('subject'),
            'message'=>$request->post('message')
        ]);

        return redirect()
                ->route('contact')
                ->with('success', 'Xabar uchun rahmat! Tez orada sizga javob qaytaramiz.');
    }

    public function search(Request $request)
    {
        //SQL
        //SELECT * FROM `posts`
        //WHERE `title` LIKE '%sar%' OR `short` LIKE '%sar%' OR `content` LIKE '%sar%'

        $key = $request->get('key');

        $key = '%'.trim($key).'%';

        $results = Post::where('title', 'LIKE', $key)
                       ->orWhere('short', 'LIKE', $key)
                       ->orWhere('content', 'LIKE', $key)
                       ->paginate(10);
        // dd($results->toSql()); pagenationnan aldin berilishi kerak
        $links = $results->links();

        return view('search', compact('results', 'links'));
    }
}
