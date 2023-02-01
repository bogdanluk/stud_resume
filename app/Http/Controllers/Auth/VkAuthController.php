<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class VkAuthController extends Controller
{
    public function redirect(Request $request)
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function authenticate(Request $request)
    {
        $user = Socialite::driver('vkontakte')->stateless()->user();
        $finduser = User::where('email', $user->email)->first();
        if ($finduser) {
            Auth::login($finduser);
            return redirect()->route('cabinet');
        } else {
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'role' => 2,
            ]);
            #отправка письма с ссылкой для подтверждения email
            event(new Registered($newUser));
            Auth::login($newUser);
            return redirect()->route('cabinet')->with(['message' => __('auth.social_auth_success')]);
        }
    }
}