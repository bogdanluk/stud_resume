<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\VkAuthController;
use App\Http\Controllers\Auth\YandexAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ResumesController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\UsersController;

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

//Route::get('/clear', function() {
//    Artisan::call('cache:clear');
//    Artisan::call('config:cache');
//    Artisan::call('route:cache');
//    Artisan::call('view:cache');
//    //Artisan::call('storage:link'); #создание символьной ссылки на публичное хранилище
//    return "Кеш очишен";
//});

#главная страница
Route::get('/', function () {
    return view('welcome');
})->name('home');

#страница с налогами
Route::get('/nalog', function (){
   return view('nalog');
})->name('nalog');

#гостевые роуты
Route::middleware('guest')->group(function (){
    #страница входа
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    #обработка запроса со страницы входа
    Route::post('/login', [AuthController::class, 'login'])->name('send_login_form');
    #страница регистрации
    Route::get('/register', [AuthController::class, 'getRegisterPage'])->name('register');
    #обработка запроса со страницы регистрации
    Route::post('/register', [AuthController::class, 'register'])->name('send_register_form');

    #форма для запроса сброса пароля
    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('password.request');
    #оброботка запроса на сброс пароля и отправка письма со ссылкой для сброса пароля
    Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('password.email');
    #отображение формы для сброса пароля
    Route::get('/reset-password/{token}', function ($token, Request $request) {
        return view('auth.reset-password', ['token' => $token, 'email' => $request->query('email')]);
    })->name('password.reset');
    #обработка запроса с формы для сброса пароля
    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

});

#обработка запроса на выход из аккаунта
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

#авторизация через соцсети
Route::middleware('guest')->prefix('auth')->group(function (){
    #авторизация через google
    Route::get('/google', [GoogleAuthController::class, 'redirect'])->name('login.google-redirect');
    Route::get('/google/callback', [GoogleAuthController::class, 'authenticate'])->name('login.google-callback');
    #авторизация через вконтакте
    Route::get('/vk', [VkAuthController::class, 'redirect'])->name('login.vk-redirect');
    Route::get('/vk/callback', [VkAuthController::class, 'authenticate'])->name('login.vk-callback');
    #авторизация через яндекс
    Route::get('/yandex', [YandexAuthController::class, 'redirect'])->name('login.yandex-redirect');
    Route::get('/yandex/callback', [YandexAuthController::class, 'authenticate'])->name('login.yandex-callback');
});

#роуты для email
Route::middleware('auth')->prefix('email')->group(function (){
    #страница с уведомлением, что нужно подтвердить email
    Route::get('/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');
    #обработчик ссылки для подтверждения email
    Route::get('/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/cabinet');
    })->name('verification.verify');
    #обработчик повторной отправки письма для подтверждения email
    Route::post('/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', __('auth.verify_email_send'));
    })->middleware(['throttle:6,1'])->name('verification.send');

});

#страница со списком новостей
Route::get('/posts', [PostsController::class, 'index'])->name('news');
#страница с конкретной новостью
Route::get('/posts/{id}', [PostsController::class, 'open_post'])->name('news_post');

#страница со списком вакансий
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
#страница с конкретной вакансией
Route::get('/jobs/{id}', [JobsController::class, 'open_post'])->name('jobs_post');

#страница со списком резюме
Route::get('/resumes', [ResumesController::class, 'index'])->name('resumes');
#страница с конкретным резюме
Route::get('/resumes/{id}', [ResumesController::class, 'open_post'])->name('resumes_post');

#роуты личного кабинета
Route::middleware(['auth', 'verified'])->prefix('cabinet')->group(function (){
    #главная страница кабинета
    Route::get('/', [CabinetController::class, 'mainPage'])->name('cabinet.main');

    #группа роутов резюме
    Route::middleware('sure.user.student')->prefix('resume')->group(function (){
        #страница со списком резюме пользователя
        Route::get('/', [ResumesController::class, 'userResumeList'])->name('cabinet.resume-list');
        #форма добавления резюме
        Route::get('/create', [ResumesController::class, 'createResumeForm'])->name('cabinet.resume.add-form');
        #обработка запроса с формы добавления резюме
        Route::post('/create', [ResumesController::class, 'createResume'])->name('cabinet.resume.create');
        #проверка является ли пользователь создателем запрашиваемого резюме или админом
        Route::middleware('resume.check')->group(function (){
            #обработка запроса на удаление резюме
            Route::get('/delete/{id}', [ResumesController::class, 'deleteResume'])->name('cabinet.resume.delete');
            #форма изменения резюме
            Route::get('/update/{id}', [ResumesController::class, 'updateResumeForm'])->name('cabinet.resume.update-form');
            #обработка запроса с формы изменения резюме
            Route::post('/update/{id}', [ResumesController::class, 'updateResume'])->name('cabinet.resume.edit');
        });
    });

    #группа роутов вакансий
    Route::middleware('sure.user.employer')->prefix('job')->group(function (){
        #страница со списком вакансий пользователя
        Route::get('/', [JobsController::class, 'userJobList'])->name('cabinet.job-list');
        #форма добавления вакансии
        Route::get('/create', [JobsController::class, 'createJobForm'])->name('cabinet.job.add-form');
        #обработка запроса с формы добавления вакансии
        Route::post('/create', [JobsController::class, 'createJob'])->name('cabinet.job.create');
        #проверка является ли пользователь создателем запрашиваемого резюме или админом
        Route::middleware('job.check')->group(function (){
            #обработка запроса на удаление резюме
            Route::get('/delete/{id}', [JobsController::class, 'deleteJob'])->name('cabinet.job.delete');
            #форма изменения резюме
            Route::get('/update/{id}', [JobsController::class, 'updateJobForm'])->name('cabinet.job.update-form');
            #обработка запроса с формы изменения резюме
            Route::post('/update/{id}', [JobsController::class, 'updateJob'])->name('cabinet.job.edit');
        });
    });

    #обработка запроса на смену пароля
    Route::post('/change-pass', [UsersController::class, 'changePassword'])->name('cabinet.change-pass');
    #обработка запроса на смену аватарки
    Route::post('/change-avatar', [UsersController::class, 'changeAvatar'])->name('cabinet.change-avatar');
    #обработка запроса на смену роли
    Route::post('/change-role', [UsersController::class, 'changeRole'])->name('cabinet.change-role');

}); #конец роутов личного кабинета

#роуты панели администратора
Route::middleware(['auth', 'admin.check'])->prefix('administrator')->group(function (){
    #главная страница панели админа
    Route::get('/', function (){
       return view('administrator.admin-main');
    })->name('admin.main');

    #группа роутов новостей
    Route::prefix('news')->group(function (){
        #страница со списком новостей
        Route::get('/', [PostsController::class, 'adminNewsList'])->name('admin.news-list');
        #форма добавления новости
        Route::get('/create', function (){
           return view('administrator.add-news');
        })->name('admin.news.add-form');
        #обработка запроса с формы добавления новости
        Route::post('/create', [PostsController::class, 'createNews'])->name('admin.news.create');
        #обработка запроса удаления новости
        Route::get('/delete/{id}', [PostsController::class, 'deleteNews'])->name('admin.news.delete');
        #форма редактирования новости
        Route::get('/update/{id}', [PostsController::class, 'updateNewsForm'])->name('admin.news.edit-form');
        #обработка запроса с формы редактирования новости
        Route::post('/update/{id}', [PostsController::class, 'updateNews'])->name('admin.news.update');
    });

    #группа роутов вакансий
    Route::prefix('jobs')->group(function (){
        #страница со списком всех вакансий
        Route::get('/', [JobsController::class, 'adminJobList'])->name('admin.jobs-list');
    });

    #группа роутов резюме
    Route::prefix('resumes')->group(function (){
        #страница со списком всех резюме
        Route::get('/', [ResumesController::class, 'adminResumeList'])->name('admin.resumes-list');
    });

    #группа роутов команд артисана
    Route::prefix('command')->group(function (){
        #включение режима обслуживания сайта
        Route::get('/down', function (){
            $tokendata = env('MAINTENANCE_TOKEN');
            Artisan::call("down --secret='$tokendata'");
            return back()->with(['message'=>__('messages.maintenance_on')]);
        })->name('site-down');
        #выключение режима обслуживания сайта
        Route::get('/up', function (){
            Artisan::call("up");
            return back()->with(['message'=>__('messages.maintenance_off')]);
        })->name('site-up');
        #обновление кеша
        Route::get('/cache', function() {
            #очистка кеша
            Artisan::call('optimize:clear');
            #создание нового кеша
            Artisan::call('config:cache');
            Artisan::call('event:cache');
            Artisan::call('route:cache');
            Artisan::call('view:cache');
            return back()->with(['message'=>__('cache_renewed')]);
        })->name('cache-update');
        #создание символьной ссылки на публичное хранилище
        Route::get('/storage-link', function (){
            Artisan::call('storage:link');
            return back()->with(['message'=>__('storage_link_created')]);
        })->name('storage-link');

    }); #конец группы роутов команд артисана


}); #конец роутов панели администратора


#страничка 404
Route::view('/404', 'errors.404')->name('404');

#редирект всех запросов не попавших в роуты выше на страничку 404
Route::fallback(function () {
    return redirect()->route('404');
});
