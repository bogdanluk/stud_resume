<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumesController extends Controller
{
    public function getAll(){
        $data = Resume::all();

        return response([
            'message' => __('messages.200'),
            'data' => ['resume' => $data]
        ], 200);
    }

    public function getById(Request $request, $id){
        $resume = Resume::find($id);
        if($resume){
            return response([
                'message' => __("messages.200"),
                'data' => ['resume' => $resume]
            ], 200);
        }

        return response([
            'message' => __("messages.404"),
        ], 404);
    }

    public function createResume(Request $request)
    {
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
        $resume = Resume::create($data);

        return response([
            'message' => __('messages.resume_added'),
            'data' => ['resume' => $resume]
        ], 201);
    }

    public function updateResume(Request $request, $id)
    {
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
        if (isset($data['avatar'])) {
            Storage::disk('public')->delete($resume->avatar);
            $data['avatar'] = Storage::disk('public')->putFile('/resumes_img', $data['avatar']);
        }

        $data['user_id'] = $request->user()->id;
        $resume->update($data);

        return response([
            'message' => __('messages.resume_updated'),
            'data' => ['resume' => $resume]
        ], 201);
    }

    public function deleteResume($id)
    {
        $resume = Resume::find($id);
        Storage::disk('public')->delete($resume->avatar);
        $resume->delete();

        return response([
            'message' => __('messages.resume_deleted'),
        ], 200);
    }

}
