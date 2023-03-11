<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function getAll(){
        $data = City::all();

        return response([
            'message' => __('messages.200'),
            'data' => ['city' => $data]
        ], 200);
    }



}
