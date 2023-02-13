<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Education;
use App\Models\Gender;
use App\Models\Resume;
use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function userResumeList(Request $request){
        #получение резюме авторизованного пользователя
        $query = Resume::query();
        $query->where('user_id', '=', $request->user()->id);
        $result = $query->orderBy('created_at', 'desc')->paginate(20);
        #возврат страницы со списком резюме пользователя
        return view('cabinet.cab-resume-list', ['resumes'=>$result]);
    }

    public function createResumeForm(){
        $genders = Gender::all();
        $educations = Education::all();
        $cities = City::all();
        $categories = Category::all();
        $timetables = Timetable::all();

        return view('cabinet.add-resume', [
            'genders' => $genders,
            'educations' => $educations,
            'cities' => $cities,
            'categories' => $categories,
            'timetables' => $timetables
        ]);
    }

    public function createResume(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'age' => 'required|numeric',
            'job' => 'required',
            'payment' => 'required|integer|min:0',
            'phone' => 'required|string|min:10',
            'email' => 'required|string|email',
            'gender_id' => 'required|numeric',
            'education_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'timetable_id' => 'required|numeric',
            'file_name' => 'required|file|max:5120|mimes:doc,docx',
            'avatar' => 'file|max:5120|mimes:jpg,jpeg,png'
        ]);

        #сохранение файлов в публичное хранилище
        $document = Storage::disk('public')->putFile('/resumes_doc', $data['file_name']);
        $avatar = null;
        if(isset($data['avatar'])){
            $avatar = Storage::disk('public')->putFile('/resumes_img', $data['avatar']);
        }

        #добавление резюме в базу
        Resume::create([
            'name' => $data['name'],
            'age' => $data['age'],
            'avatar' => $avatar,
            'gender_id' => $data['gender_id'],
            'education_id' => $data['education_id'],
            'city_id' => $data['city_id'],
            'job' => $data['job'],
            'payment' => $data['payment'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'category_id' => $data['category_id'],
            'timetable_id' => $data['timetable_id'],
            'file_name' => $document,
            'user_id' => $request->user()->id
        ]);

        return redirect()->route('cabinet.resume-list')->with(['message' => __('messages.resume_added')]);
    }

    public function updateResumeForm($id){
        $genders = Gender::all();
        $educations = Education::all();
        $cities = City::all();
        $categories = Category::all();
        $timetables = Timetable::all();
        $resume = Resume::find($id);

        return view('cabinet.edit-resume', [
            'resume' => $resume,
            'genders' => $genders,
            'educations' => $educations,
            'cities' => $cities,
            'categories' => $categories,
            'timetables' => $timetables
        ]);
    }

    public function updateResume(Request $request, $id){
        $data = $request->validate([
            'name' => 'string|min:3|max:255',
            'age' => 'numeric',
            'job' => 'string',
            'payment' => 'integer|min:0',
            'phone' => 'string|min:10',
            'email' => 'string|email',
            'gender_id' => 'numeric',
            'education_id' => 'numeric',
            'city_id' => 'numeric',
            'category_id' => 'numeric',
            'timetable_id' => 'numeric',
            'file_name' => 'file|max:5120|mimes:doc,docx',
            'avatar' => 'file|max:5120|mimes:jpg,jpeg,png'
        ]);


        if(isset($data['avatar'])){
            $data['avatar'] = Storage::disk('public')->putFile('/resumes_img', $data['avatar']);
        }
        if(isset($data['file_name'])){
            $data['file_name'] = Storage::disk('public')->putFile('/resumes_img', $data['file_name']);
        }
        $data['user_id'] = $request->user()->id;

        $resume = Resume::find($id);
        $resume->update($data);

        return redirect()->route('cabinet.resume-list')->with(['message' => __('messages.resume_updated')]);
    }

    public function deleteResume($id){
        $resume = Resume::find($id);
        #удаление файлов из хранилища
        Storage::disk('public')->delete($resume->avatar);
        Storage::disk('public')->delete($resume->file_name);
        $resume->delete();

        return back()->with(['message' => __('messages.resume_deleted')]);
    }

}
