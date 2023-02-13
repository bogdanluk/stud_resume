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

        $avatar = Storage::disk('public')->putFile('/avatars', $data['avatar']);
        $request->user()->update([
            'avatar' => $avatar
        ]);
        return back()->with(['message'=>__('messages.avatar_changed')]);
    }
}
