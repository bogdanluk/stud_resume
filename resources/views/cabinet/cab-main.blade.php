@extends('layouts.head')

@section('title')
    Личный кабинет
@endsection

@section('content')
    @include('cabinet.cab-navbar')

    <main class="flex flex-col items-center w-full px-5 min-h-screen">
        <h1 class="border-2 border-violet-400 rounded-lg font-medium text-xl my-10 p-5">Личные данные</h1>
        <div class="flex flex-col items-center flex-wrap mx-10 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
            <div class="flex flex-row justify-center flex-wrap mx-10">
                <div class="flex flex-col items-center text-center my-5 mx-5">
                    <div class="avatar">
                        <div class="w-44 rounded-xl">
                            <img class="object-left-top" src="/storage/{{ auth()->user()['avatar'] }}" alt="user avatar"/>
                        </div>
                    </div>
                    <p class="mt-3 w-3/4">{{ auth()->user()['name'] }}</p>
                </div>
                <div class="flex flex-row flex-wrap justify-center items-center text-center my-5">
                    <div class="flex flex-col mx-5">
                        <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Email</span>
                        <a class="mt-2 mb-5">{{ auth()->user()['email'] }}</a>
                    </div>
                    <div class="flex flex-col mx-5">
                        <span class="bg-yellow-400 text-black rounded-full font-medium py-1 px-5">Роль</span>
                        <p class="mt-2 mb-5">{{ auth()->user()['role']->name }}</p>
                    </div>
                </div>
            </div>
        </div>
        @if(session('message'))
            <div class="flex w-full mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 rounded-md dark:bg-slate-700">
                <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
            </div>
        @endif
        @if($errors->any())
            <div class="block w-full mt-3 mb-3 p-2 text-red-800 border-t-4 border-red-400 bg-red-50 dark:bg-slate-700 rounded-md">
                <span class="font-medium">Ошибка:</span>
                <ul class="mt-1.5 ml-1 list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li class="ml-3 text-sm font-medium">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex w-full flex-col mx-10 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
            <form action="{{ route('cabinet.change-pass') }}" method="post" class="p-5">
                @csrf
                <h1 class="text-2xl font-semibold text-center">Смена пароля</h1>
                <label class="block font-semibold" for="input1">Новый пароль</label>
                <input type="password" id="input1" name="password" placeholder="Новый пароль"
                       class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
                <label class="block font-semibold" for="input2">Повторите пароль</label>
                <input type="password" id="input2" name="password_confirmation" placeholder="Повторите пароль"
                       class="w-full h-5 px-3 py-5 border-2 dark:border-slate-400 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:focus:border-violet-400">
                <button type="submit"
                        class="btn btn-primary mt-4 border-0">Отправить</button>
            </form>
        </div>
        <div class="flex w-full flex-col mx-10 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
            <form action="{{ route('cabinet.change-avatar') }}" method="post" enctype="multipart/form-data" class="p-5">
                @csrf
                <h1 class="text-2xl font-semibold text-center">Смена аватарки</h1>
                <label class="block font-semibold mt-2" for="input3">Загрузите фото</label>
                <input type="file" id="input3" name="avatar"
                       class="mt-2 file-input file-input-bordered file-input-primary focus:outline-violet-400 w-full">
                <button type="submit"
                        class="btn btn-primary mt-4 border-0">Отправить</button>
            </form>
        </div>
        <div class="flex w-full flex-col mx-10 bg-base-200 border-t-8 border-t-violet-400 rounded-lg shadow-lg mb-10 dark:bg-slate-700">
            <form action="{{ route('cabinet.change-role') }}" method="post" class="p-5">
                @csrf
                <h1 class="text-2xl font-semibold text-center">Смена роли</h1>
                <label class="block mt-3 font-semibold" for="input4">Выберите роль</label>
                <select name="role_id" id="input4"
                        class="select w-full text-slate-400 w-full border-2 border-base-300 mt-2 outline-none focus:border-violet-400 rounded-md dark:bg-slate-800 dark:border-slate-400 dark:focus:border-violet-400">
                    <option disabled selected>Ваша роль</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <button type="submit"
                        class="btn btn-primary mt-4 border-0">Отправить</button>
            </form>
        </div>

    </main>

@endsection
