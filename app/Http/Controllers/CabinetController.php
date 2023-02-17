<?php

namespace App\Http\Controllers;

use App\Models\UserRoles;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function mainPage(){
        $roles = UserRoles::where('id', '>', 1)->get();
        return view('cabinet.cab-main', ['roles' => $roles]);
    }

}
