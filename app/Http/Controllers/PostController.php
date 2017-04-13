<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function getPost()
    {
        $post = Post::all();

        return view('welcome',['post' => $post]);
   }

    public function getUser($username)
    {
        $user = User::where('username',$username)->firstOrFail();
        return view('profile',['user' => $user]);
   }
}
