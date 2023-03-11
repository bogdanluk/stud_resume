<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ResumesController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\CitiesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

#вход в аккаунт
Route::middleware('guest')->prefix('auth')->group(function (){
    Route::post('/login', [AuthController::class, 'login']);
});

#выход из аккаунта
Route::middleware('auth:sanctum')->group(function (){
    Route::post('/logout', [AuthController::class, 'logout']);
});

#роуты для резюме
Route::prefix('resume')->group(function (){
    #получение списка всех резюме
    Route::get('/', [ResumesController::class, 'getAll']);
    #получение одного резюме по id
    Route::get('/{id}', [ResumesController::class, 'getById']);
    #проверка авторизации
    Route::middleware('auth:sanctum')->group(function (){
        #создание резюме
        Route::post('/', [ResumesController::class, 'createResume']);
        Route::middleware('api.resume.check')->group(function (){
            #обновление резюме по id
            Route::patch('/{id}', [ResumesController::class, 'updateResume']);
            #удаление резюме по id
            Route::delete('/{id}', [ResumesController::class, 'deleteResume']);
        });
    });
});

#группа роутов для категорий
Route::prefix('category')->group(function (){
    #получение всех категорий
    Route::get('/', [CategoriesController::class, 'getAll']);
});

#группа роутов для образования
Route::prefix('education')->group(function (){
    #получение всех видов образования
    Route::get('/', [EducationController::class, 'getAll']);
});

#группа роутов для городов
Route::prefix('city')->group(function (){
    #получение всех городов
    Route::get('/', [CitiesController::class, 'getAll']);
});

Route::fallback(function () {
    return response([
        "message" => __('messages.404')
    ], 404);
});
