<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if($company)
        {
            return view('company', ["company"=>$company]);
        }
        else
        {
            return redirect()->route('404');
        }
    }

    public function userCompanyList(Request $request){
        $query = Company::query();
        $query->where('user_id', '=', $request->user()->id);
        $result = $query->orderBy('created_at', 'desc')->paginate(20);

        return view('cabinet.company-list', ['companies'=>$result]);
    }

    public function createCompany(Request $request){
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'activity' => 'required|string|min:3|max:255',
            'image' => 'required|file|max:5120|mimes:jpg,jpeg,png',
            'email' => 'required|string|email',
            'phone' => 'required|string|min:10',
            'link' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:255'
        ]);

        #сохранение файлов в публичное хранилище
        $data['image'] = Storage::disk('public')->putFile('/companies_img', $data['image']);
        $data['user_id'] = $request->user()->id;
        Company::create($data);

        return redirect()->route('cabinet.company-list')->with(['message' => __('messages.company_added')]);
    }

    public function updateCompanyForm($id){
        $company = Company::find($id);
        return view('cabinet.edit-company', ['company'=>$company]);
    }

    public function updateCompany(Request $request, $id){
        $data = $request->validate([
            'name' => 'string|min:3|max:255',
            'activity' => 'string|min:3|max:255',
            'image' => 'file|max:5120|mimes:jpg,jpeg,png',
            'email' => 'string|email',
            'phone' => 'string|min:10',
            'link' => 'string|min:3|max:255',
            'description' => 'string|min:3|max:255'
        ]);

        $data['user_id'] = $request->user()->id;
        $company = Company::find($id);
        $company->update($data);

        return redirect()->route('cabinet.company-list')->with(['message' => __('messages.company_updated')]);
    }

    public function deleteCompany($id){
        $company = Company::find($id);
        #удаление файлов из хранилища
        Storage::disk('public')->delete($company->image);
        $company->delete();

        return back()->with(['message' => __('messages.company_deleted')]);
    }
}
