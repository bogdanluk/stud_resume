<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $posts = Job::all();
        return view('jobpage', ["posts"=>$posts]);
    }
    public function open_post($id)
    {
        $post = Job::find($id);
        $category = Category::find($post->category);
        if($post)
        {
            return view('job', ["post"=>$post], ["category"=>$category]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
}
