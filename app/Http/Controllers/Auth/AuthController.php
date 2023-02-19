<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserRoles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Models\User;

class AuthController extends Controller
{
    public function getRegisterPage(){
        $query = UserRoles::query();
        $roles = $query->where('id', '>', 0)->get();
        return view('auth.register', ['roles' => $roles]);
    }

    public function login(Request $request){
        $credentials = $request->validate([
           'email' => 'required|string|email',
           'password' => 'required|string|min:8',
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('cabinet.main');
        }
        return back()->withErrors([
            'email' => __('auth.failed')
        ]);
    }

    public function register(Request $request){
        $credentials = $request->validate([
            'email' => 'required|string|email|unique:users,email',
            'name' => 'required|string|min:3',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required'
        ]);

        #создание юзера в базе данных
        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'role_id' => $credentials['role'],
            'avatar' => 'avatars/default-avatar.png'
        ]);
        #отправка письма с ссылкой для подтверждения email
        event(new Registered($user));
        #авторизация юзера
        Auth::login($user);
        return redirect()->route('cabinet.main');
    }

    public function logout(Request $request){
        Auth::logout();
        #аннулирование сессии пользователя
        $request->session()->invalidate();
        #перегенерация csrf токена
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
