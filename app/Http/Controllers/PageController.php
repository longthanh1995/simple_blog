<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Tag;
use App\Model\Post;
use DB;
use Session;
use Auth;
class PageController extends Controller
{
    public function __construct()
    {
        //call getForum function or we can check middleware in directly route
        // $this->middleware('auth')->only('getForum');
    }
    public function getIndex()
    {
        $categories = Category::all();
        $posts_per_page = Post::paginate(3);
        $latest_posts = Post::latest()->take(3)->get();
        $posts = Post::all();
        return view('pages.home', compact('categories', 'posts_per_page', 'posts', 'latest_posts'));
    }
    public function getTags()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();
        return view('tags.index', compact('categories', 'tags', 'posts'));
    }
    public function getCategories()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('categories.index', compact('categories', 'posts'));
    }
    public function getContact()
    {
    	return view('pages.contact');
    }
    public function getSingleCat($slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->first();
        if (!$categories) {
            return redirect()->route('home');
        }
        $posts = Post::all();
        return view('categories.single', compact('categories', 'category','posts'));
    }

    public function getSingleTag($slug)
    {
        $categories = Category::all();
        $posts = Post::all();
        $tag = Tag::where('slug', $slug)->first();
        if (!$tag) {
            return redirect()->route('home');
        }
        $related_posts = Tag::find($tag->id)->posts()->orderBy('created_at', 'desc')->get();
        return view('tags.single', compact('categories', 'posts', 'tag', 'posts_for_tag', 'related_posts'));
    }

    public function getSinglePost($slug)
    {
        $categories = Category::all(); 
        $post = Post::where('slug', $slug)->first(); 
        if (!$post) {   
            return redirect()->route('home');
        }
        $related_posts = Post::where('category_id', $post->category_id)
        ->where('slug', '<>', $post->slug)
        ->get();

        $posts = Post::all(); 
        return view('posts.single', compact('categories', 'post', 'related_posts', 'posts'));
    }
    public function getErrorPage()
    {
        return view('errors.404');
    }

    public function getForum()
    {
        if(!Auth::check()) {
            return redirect()->route('home')->with(['flash_level' => 'warning', 'message' => 'You have to login to enter the forum']);
        }
        return view('pages.forum');
    }
    
}
