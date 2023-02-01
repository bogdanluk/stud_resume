<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\VkAuthController;
use App\Http\Controllers\Auth\YandexAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#главная страница
Route::get('/', function () {
    return view('welcome');
})->name('home');

#страница входа
Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

#обработка запроса со страницы входа
Route::post('/login', [AuthController::class, 'login'])->middleware('guest')->name('send_login_form');

#страница регистрации
Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest')->name('register');

#обработка запроса со страницы регистрации
Route::post('/register', [AuthController::class, 'register'])->middleware('guest')->name('send_register_form');

#обработка запроса на выход из аккаунта
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');



//роуты для email
Route::prefix('email')->group(function (){
    //страница с уведомлением что нужно подтвердить email
    Route::get('/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    //обработчик ссылки для подтверждения email
    Route::get('/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/cabinet');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    //обработчик повторной отправки письма для подтверждения email
    Route::post('/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', __('auth.verify_email_send'));
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

});

//форма для запроса сброса пароля
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

//оброботка запроса на сброс пароля и отправка письма со ссылкой для сброса паролья
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->middleware('guest')->name('password.email');

//отображение формы для сброса пароля
Route::get('/reset-password/{token}', function ($token, Request $request) {
    return view('auth.reset-password', ['token' => $token, 'email' => $request->query('email')]);
})->middleware('guest')->name('password.reset');

//обработка запроса с формы для сброса пароля
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->middleware('guest')->name('password.update');

#личный кабинет
Route::get('/cabinet', function (Request $request){
   return view('cabinet.cabinet');
})->middleware(['auth', 'verified'])->name('cabinet');

#авторизация через соцсети
Route::prefix('auth')->group(function (){
    #авторизация через google
    Route::get('/google', [GoogleAuthController::class, 'redirect'])->name('login.google-redirect');
    Route::get('/google/callback', [GoogleAuthController::class, 'authenticate'])->name('login.google-callback');
    #авторизация через вконтакте
    Route::get('/vk', [VkAuthController::class, 'redirect'])->name('login.vk-redirect');
    Route::get('/vk/callback', [VkAuthController::class, 'authenticate'])->name('login.vk-callback');
    #авторизация через яндекс
    Route::get('/yandex', [YandexAuthController::class, 'redirect'])->name('login.yandex-redirect');
    Route::get('/yandex/callback', [YandexAuthController::class, 'authenticate'])->name('login.yandex-callback');
})->middleware('guest');
