<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Education;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumesController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $cities = City::all();
        $educations = Education::all();
        $query = Resume::query();
        if($request->filled('name')){
            $query->where('name', 'like', "%{$request->query('name')}%");
        }
        if($request->filled('category_id')){
            $query->where('category_id', '=', $request->query('category_id'));
        }
        if($request->filled('city_id')){
            $query->where('city_id', '=', $request->query('city_id'));
        }
        if($request->filled('education_id')){
            $query->where('education_id', '=', $request->query('education_id'));
        }
        $query->orderBy('created_at', 'desc');
        $result = $query->with(['city','category'])->paginate(10);
        return view('resumespage', ["resumes"=>$result, "categories"=>$categories, "cities"=>$cities, "educations"=>$educations, "request"=>$request]);
    }

    public function open_post($id)
    {
        $resume = Resume::with(['category', 'city', 'education'])->find($id);
        if($resume)
        {
            return view('resume', ["resume"=>$resume]);
        }
        else
        {
            return redirect()->route('404');
        }
    }

    public function adminResumeList()
    {
        $resumes = Resume::query();
        $result = $resumes->orderBy('created_at', 'desc')->paginate(20);
        #возврат страницы со списком всех резюме для админа
        return view('administrator.resumes-list', ['resumes'=>$result]);
    }

    public function userResumeList(Request $request){
        #получение резюме авторизованного пользователя
        $query = Resume::query();
        $query->where('user_id', '=', $request->user()->id);
        $result = $query->orderBy('created_at', 'desc')->paginate(20);
        #возврат страницы со списком резюме пользователя
        return view('cabinet.cab-resume-list', ['resumes'=>$result]);
    }

    public function createResumeForm(){
        $educations = Education::all();
        $cities = City::all();
        $categories = Category::all();

        return view('cabinet.add-resume', [
            'educations' => $educations,
            'cities' => $cities,
            'categories' => $categories,
        ]);
    }

    public function createResume(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'age' => 'required|numeric',
            'education_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'about' => 'required|min:3',
            'experience' => 'required|min:3',
            'category_id' => 'required|numeric',
            'avatar' => 'required|file|max:5120'
        ]);

        $data['avatar'] = Storage::disk('public')->putFile('/resumes_img', $data['avatar']);
        $data['user_id'] = $request->user()->id;

        #добавление резюме в базу
        Resume::create($data);

        return redirect()->route('cabinet.resume-list')->with(['message' => __('messages.resume_added')]);
    }

    public function updateResumeForm($id){
        $educations = Education::all();
        $cities = City::all();
        $categories = Category::all();
        $resume = Resume::find($id);

        return view('cabinet.edit-resume', [
            'resume' => $resume,
            'educations' => $educations,
            'cities' => $cities,
            'categories' => $categories,
        ]);
    }

    public function updateResume(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'age' => 'required|numeric',
            'education_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'about' => 'required|min:3',
            'experience' => 'required|min:3',
            'category_id' => 'required|numeric',
            'avatar' => 'file|max:5120'
        ]);

        $resume = Resume::find($id);
        if(isset($data['avatar'])){
            Storage::disk('public')->delete($resume->avatar);
            $data['avatar'] = Storage::disk('public')->putFile('/resumes_img', $data['avatar']);
        }

        $data['user_id'] = $request->user()->id;
        $resume->update($data);

        return redirect()->route('cabinet.resume-list')->with(['message' => __('messages.resume_updated')]);
    }

    public function deleteResume($id){
        $resume = Resume::find($id);
        Storage::disk('public')->delete($resume->avatar);
        $resume->delete();

        return back()->with(['message' => __('messages.resume_deleted')]);
    }

}
