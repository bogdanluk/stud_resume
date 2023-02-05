<?php

namespace App\Http\Controllers;

use App\Models\NewsPosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function index()
    {
        $posts = NewsPosts::all();
        // dd($post);
        return view('newspage', ["posts"=>$posts]);
    }

    public function open_post($id)
    {
        $post = NewsPosts::find($id);
        if($post) {
            return view('post', ["post" => $post]);
        } else {
            return redirect()->route('404');
        }
    }
}
