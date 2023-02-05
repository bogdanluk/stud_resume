<?php

namespace App\Http\Controllers;

use App\Models\NewsPosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function index()
    {
        $post = NewsPosts::all();
        // dd($post);
        return view('newspage', ["posts"=>$post]);
    }

    public function open_post($post)
    {
        $post_data = NewsPosts::find($post);
        return view('post', ["posts_data"=>$post_data]);
    }
}
