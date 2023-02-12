<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Education;
use App\Models\Resume;
use App\Models\Timetable;
use Illuminate\Http\Request;

class ResumesController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $cities = City::all();
        $timetables = Timetable::all();
        $educations = Education::all();
        $query = Resume::query();
        // if($request->filled('name')){
        //     $query->where('name', 'like', "%{$request->query('name')}%");
        // }
        if($request->filled('category_id')){
            $query->where('category_id', '=', $request->query('category_id'));
        }
        if($request->filled('city_id')){
            $query->where('city_id', '=', $request->query('city_id'));
        }
        if($request->filled('education_id')){
            $query->where('education_id', '=', $request->query('education_id'));
        }
        if($request->filled('timetable_id')){
            $query->where('timetable_id', '=', $request->query('timetable_id'));
        }
        $query->orderBy('created_at', 'desc');
        $result = $query->with(['city','category'])->paginate(10);
        return view('resumespage', ["resumes"=>$result, "categories"=>$categories, "cities"=>$cities, "timetables"=>$timetables, "educations"=>$educations]);
    }

    public function open_post($id)
    {
        $resume = Resume::with(['category', 'city', 'gender', 'education', 'timetable'])->find($id);
        if($resume)
        {
            return view('resume', ["resume"=>$resume]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
}
