<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function getAll(){
        $data = Education::all();

        return response([
            'message' => __('messages.200'),
            'data' => ['education' => $data]
        ], 200);
    }



}
