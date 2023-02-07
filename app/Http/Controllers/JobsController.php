<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
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
        $company = Company::find($post->company);
        // dd($company);
        if($post)
        {
            return view('job', ["post"=>$post, "company"=>$company, "category"=>$category]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
}
