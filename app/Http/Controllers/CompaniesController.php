<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companys = Company::all();
        return view('company', ["companys"=>$companys]);
    }

    public function open_post($id)
    {
        $company = Company::find($id);
        // dd($company);
        if($company)
        {
            return view('company', ["company"=>$company]);
        }
        else
        {
            return redirect()->route('404');
        }
    }
}
