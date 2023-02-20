<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function authenticate(Request $request)
    {
        $user = Socialite::driver('google')->stateless()->user();
        $finduser = User::where('email', $user->email)->first();
        if ($finduser) {
            Auth::login($finduser);
            return redirect()->route('cabinet.main');
        } else {
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'role_id' => 2,
                'avatar' => 'avatars/default-avatar.png'
            ]);
            #отправка письма с ссылкой для подтверждения email
            event(new Registered($newUser));
            Auth::login($newUser);
            return redirect()->route('cabinet.main')->with(['message' => __('auth.social_auth_success')]);
        }
    }
}
