<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Model\User;
class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Method to get All Post
     */
    public function getPost()
    {
        $post = Post::all();

        return view('welcome',['post' => $post]);
   }

    /**
     * @param $username
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *  Method for get user profile by they name
     */
    public function getUser($username)
    {
        $user = User::where('username',$username)->firstOrFail();
        return view('profile',['user' => $user]);
   }
}
