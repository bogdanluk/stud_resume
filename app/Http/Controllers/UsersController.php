<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function changePassword(Request $request){
        $data = $request->validate([
            'password' => 'required|string|min:8|confirmed'
        ]);

        $newpass = Hash::make($data['password']);
        $request->user()->update([
           'password' => $newpass
        ]);
        return back()->with(['message'=>__('passwords.change_success')]);
    }

    public function changeAvatar(Request $request){
        $data = $request->validate([
            'avatar' => 'required|file|max:5120',
        ]);
        if($request->user()->avatar != "resumes_img/default-avatar.png") {
            Storage::disk('public')->delete($request->user()->avatar);
        }
        $avatar = Storage::disk('public')->putFile('/avatars', $data['avatar']);
        $request->user()->update([
            'avatar' => $avatar
        ]);
        return back()->with(['message'=>__('messages.avatar_changed')]);
    }

    public function changeRole(Request $request){
        $data = $request->validate([
            'role_id' => 'required|numeric'
        ]);
        $request->user()->update($data);
        return back()->with(['message'=>__('messages.role_changed')]);
    }
}
