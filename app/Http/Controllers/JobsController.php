<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $cities = City::all();
        $query = Job::query();
        if($request->filled('name')){
            $query->where('name', 'like', "%{$request->query('name')}%");
        }
        if($request->filled('category_id')){
            $query->where('category_id', '=', $request->query('category_id'));
        }
        if($request->filled('city_id')){
            $query->where('city_id', '=', $request->query('city_id'));
        }
        $query->orderBy('created_at', 'desc');
        $result = $query->with(['city'])->paginate(10);
        return view('jobspage', ["jobs"=>$result, "categories"=>$categories, "cities"=>$cities]);
    }

    public function open_post($id)
    {
        $job = Job::with(['category', 'company', 'city'])->find($id);
        if($job)
        {
            return view('job', ["job"=>$job]);
        }
        else
        {
            return redirect()->route('404');
        }
    }

}
