<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function add()
    {
        return view('addpost');
    }

    public function addpost(AddPostRequest $request)
    {
        $postphoto = "public/postphotos/" . Storage::disk('postphotos')->put('/', $request->file('postphoto'));

        $post = Post::create([
            'user_id' => $request->user_id,
            'header' => $request->header,
            'subheader' => $request->subheader,
            'anons' => $request->anons,
            'post' => $request->post,
            'photo' => $postphoto,
        ]);

        return redirect()->route('single', ['post' => $post->id]);
    }

    public function single($postId)
    {
        $post = Post::with('user')->find($postId);
        return view('single', ['post' => $post, 'user' => $post->user]);
    }

    public function user_post()
    {
        return view('userpost');
    }

    public function blocked()
    {
        return view('blocked');
    }

    public function deletepost(Request $request, Post $post)
    {
        $post->delete();
        return ["Пост удалён"];
    }

    public function edit(Post $post)
    {
        if (Auth::user()->id != $post->user_id) {
            return redirect()->route('index')->withErrors(['error' => 'Пост не Ваш']);
        }
        return view('editpost', ['post' => $post]);
    }

    public function editpost(UpdatePostRequest $request, Post $post)
    {
        if (!$post) {
            return ["error" => "Пост не существует"];
        }
        $postphoto = "public/postphotos/" . Storage::disk('postphotos')->put('/', $request->file('postphoto'));

        $post->header = $request->header;
        $post->subheader = $request->subheader;
        $post->anons = $request->anons;
        $post->post = $request->post;
        $post->photo = $postphoto;

        $post->save();

        return redirect()->route('single', ['post' => $post->id]);
    }
}
