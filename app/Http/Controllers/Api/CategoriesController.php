<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getAll(){
        $data = Category::all();

        return response([
            'message' => __('messages.200'),
            'data' => ['category' => $data]
        ], 200);
    }



}
