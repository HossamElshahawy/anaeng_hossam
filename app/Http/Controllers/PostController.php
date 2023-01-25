<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;


class PostController extends Controller
{

    public function index()
    {
        $profile= Profile::all();
        return view ('Front.Socialmedia.addPost');
    }

    public function allposts()
    {
        $posts = Post::all();
        return view ('Front.Socialmedia.allPosts', compact('posts'));
    }


    public function CreatePost(Request $request )
    {


        $request->validate([
            'body'=>'required|string',
            'photo'=>'nullable|image|mimes:jpg,jpeg,png',
            'user_id'=> 'nullable',
       ]);
        $user_id = Auth::id();
        $post = new Post;
        $post->user_id = $user_id;
        $post->body = $request->body;
        $photo = $request->file('photo');
        $path = $photo->store('public/storage/post_photo');
        $post->photo = $path;
        $post->save();

        return redirect(route('allposts'));

    }

    public function likePost($id)
    {
        $post = Post::findOrFail($id);
        $post->like(Auth::id());
        $post->save();

        return redirect()->route('allposts');
    }

    public function unlikePost($id)
    {
        $post = Post::findOrFail($id);
        $post->unlike(Auth::id());
        $post->save();

        return redirect()->route('allposts');
    }

    public function comment(Request $request)

    {
        $request->validate([
            'body'=>'required',
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        return back();

    }





}
