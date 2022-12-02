@extends('layout.main')
@section('content')
    @include('component.navbar')

    @if (session('authstat'))
        <div
            class="bg-zinc-100 border rounded-md p-20 fixed top-1/2 left-1/2 flex flex-col justify-center items-center -translate-y-1/2 -translate-x-1/2  alert">
            <i class="fa-solid fa-circle-xmark fa-5x bg-white rounded-full  text-red-600"></i>
            {{ session('authstat') }}

        </div>
    @endif
    @if (session('updated'))
        <div
            class="bg-zinc-100 border animate-wiggle rounded-md p-4 fixed  flex right-3 gap-4 top-3 justify-center items-center  alert">
            <i class="fa-solid fa-check  bg-green-600 rounded-full p-2 text-white"></i>
            {{ session('updated') }}
        </div>
    @endif
    @if (session('addtodo'))
        <div
            class="bg-zinc-100 animate-wiggle border rounded-md p-4 fixed  flex right-3 gap-4 top-3 justify-center items-center  alert">
            <i class="fa-solid fa-check bg-green-600 rounded-full p-2 text-white"></i>
            {{ session('addtodo') }}
        </div>
    @endif
    @if (session('loginsuccess'))
        <div
            class="bg-zinc-100 animate-wiggle border rounded-md p-4 fixed  flex right-3 gap-4 top-3 justify-center items-center  alert">
            <i class="fa-solid fa-check bg-green-600 rounded-full p-2 text-white"></i>
            {{ session('loginsuccess') }}
        </div>
    @endif
    @if (session('deleted'))
        <div
            class="bg-zinc-100 animate-wiggle border rounded-md p-4 fixed  flex right-3 gap-4 top-3 justify-center items-center  alert">
            <i class="fa-solid  fa-check bg-green-600 rounded-full p-2 text-white"></i>
            {{ session('deleted') }}

        </div>
    @endif
    <div class="container pt-20 ">
        @include('component.todonav')


    </div>
    <div class="todos pb-20
        ">
        @yield('todos')
    </div>
@endsection
