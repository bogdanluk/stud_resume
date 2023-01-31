@extends('layouts.head')

@section('title')Личный кабинет@endsection

@section('content')
    <h1>Личный кабинет</h1>
    <a href="{{ route('logout') }}">Выйти</a>
@endsection
