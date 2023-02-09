<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        // $posts = Job::all();
        $category = Category::all();
        $city = City::all();
        $posts = City::join('jobs', 'cities.id_city', '=', 'jobs.city')->get();
        // dd($cities);
        return view('jobpage', ["posts"=>$posts, "categorys"=>$category, "cities"=>$city]);
    }
    public function open_post($id_jobs)
    {
        $post = Job::find($id_jobs);
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
            'filter_category' => 'exists:categories,id_category',
            'filter_city' => 'exists:cities,id_city'
        ]);
        $posts = Job::where('category', '=', $data['filter_category'])->get();
        $category = Category::all();
        $city = City::all();
        return view('jobpage', ["posts"=>$posts, "categorys"=>$category, "cities"=>$city]);
    }
}
