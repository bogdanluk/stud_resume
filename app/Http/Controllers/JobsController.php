<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Job;
use App\Models\JobType;
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
        if($request->filled('pay_id'))
        {
            if($request->pay_id==1)
            {
                $query->orderBy('salary', 'asc');
            }
            else
            {
                $query->orderBy('salary', 'desc');
            }
        }
        $query->orderBy('created_at', 'desc');
        $result = $query->with(['city','category'])->paginate(10);
        return view('jobspage', ["jobs"=>$result, "categories"=>$categories, "cities"=>$cities, "request"=>$request]);
    }

    public function open_post($id)
    {
        $job = Job::with(['category', 'city', 'jobType'])->find($id);
        if($job)
        {
            return view('job', ["job"=>$job]);
        }
        else
        {
            return redirect()->route('404');
        }
    }

    public function adminJobList()
    {
        $jobs = Job::query();
        $result = $jobs->orderBy('created_at', 'desc')->paginate(20);
        #возврат страницы со списком всех вакансий для админа
        return view('administrator.jobs-list', ['jobs'=>$result]);
    }

    public function userJobList(Request $request){
        #получение резюме авторизованного пользователя
        $query = Job::query();
        $query->where('user_id', '=', $request->user()->id);
        $result = $query->orderBy('created_at', 'desc')->paginate(20);
        #возврат страницы со списком резюме пользователя
        return view('cabinet.cab-job-list', ['jobs'=>$result]);
    }

    public function createJobForm(){
        $cities = City::all();
        $categories = Category::all();
        $jobTypes = JobType::all();

        return view('cabinet.add-job', [
            'jobTypes' => $jobTypes,
            'cities' => $cities,
            'categories' => $categories,
        ]);
    }

    public function createJob(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'description' => 'required|min:3',
            'requirements' => 'required|min:3',
            'responsibilities' => 'required|min:3',
            'salary' => 'required|numeric',
            'contacts' => 'required|min:3',
            'company_name' => 'required|min:3',
            'work_conditions' => 'required|min:3',
            'city_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'job_type_id' => 'required|numeric',
        ]);

        $data['user_id'] = $request->user()->id;
        #добавление резюме в базу
        Job::create($data);

        return redirect()->route('cabinet.job-list')->with(['message' => __('messages.job_added')]);
    }


    public function updateJobForm($id){
        $cities = City::all();
        $categories = Category::all();
        $jobTypes = JobType::all();
        $job = Job::find($id);

        return view('cabinet.edit-job', [
            'job' => $job,
            'jobTypes' => $jobTypes,
            'cities' => $cities,
            'categories' => $categories,
        ]);
    }

    public function updateJob(Request $request, $id){
        $data = $request->validate([
            'name' => 'string|min:3|max:255',
            'description' => 'min:3',
            'requirements' => 'min:3',
            'responsibilities' => 'min:3',
            'salary' => 'numeric',
            'contacts' => 'min:3',
            'company_name' => 'min:3',
            'work_conditions' => 'min:3',
            'city_id' => 'numeric',
            'category_id' => 'numeric',
            'job_type_id' => 'numeric',
        ]);

        $data['user_id'] = $request->user()->id;
        $job = Job::find($id);
        $job->update($data);

        return redirect()->route('cabinet.job-list')->with(['message' => __('messages.job_updated')]);
    }

    public function deleteJob($id){
        $job = Job::find($id);
        $job->delete();

        return back()->with(['message' => __('messages.job_deleted')]);
    }
}
