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
        $category = Category::all();
        return view('jobpage', ["posts"=>$posts, "categorys"=>$category]);
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
    public function filter(Request $request)
    {
        $data = $request->validate([
            'filter_id' => 'exists:categories,id'
        ]);
        $posts = Job::where('category', '=', $data['filter_id'])->get();
        $category = Category::all();
        return view('jobpage', ["posts"=>$posts, "categorys"=>$category]);
    }
}
