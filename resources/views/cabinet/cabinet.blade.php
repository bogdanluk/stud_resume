@extends('layouts.head')

@section('title')Личный кабинет @endsection

@section('content')
    <h1>Личный кабинет</h1>
    @if(session('message'))
        <div class="flex mt-3 p-4 mb-4 text-green-800 border-t-4 border-green-400 bg-green-50 rounded-md">
            <p class="ml-1 text-sm font-medium">{{ session('message') }}</p>
        </div>
    @endif
    <a href="{{ route('logout') }}">Выйти</a>
@endsection
