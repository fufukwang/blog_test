<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('blog.posts_per_page'));

        return view('blog.index', compact('posts'));
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail(); //slug 是一個欄位 where 是查詢方法

        return view('blog.post')->withPost($post);
    }

    public function editPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        return View('blog.edit')
            ->with('title', '編輯文章')
            ->with('post', $post);
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();

        $post = Post::find($id);
        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->save();
        return redirect('/');
    }

    public function addPost()
    {
        return View('blog.create')
            ->with('title', '新增文章');
    }

    public function store(Request $request){
        $input = $request->all();

        $post = new Post;
        $post->title = $input['title'];
        $post->slug = $input['slug'];
        $post->content = $input['content'];
        $post->save();

        return redirect('/');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/');
    }
}