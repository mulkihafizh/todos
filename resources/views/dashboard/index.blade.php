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
    @if (Auth::user()->role == 'user')
        <div class="container pt-20 ">
            @include('component.todonav')


        </div>
        <div class="todos pb-20
        ">
            @yield('todos')
        </div>
    @elseif(Auth::user()->role == 'admin')
        <div class="container pt-20 grid grid-cols-2 gap-5 ">
            <div class="left">
                <div class="card m-20 py-12  bg-gray-100  shadow-lg border rounded-lg gap-5 flex flex-col items-center">
                    <div class="card-header">
                        <i class="fa-solid fa-clipboard-list text-6xl"></i>
                    </div>
                    <div class="card-body flex items-center flex-col justify-center ">
                        <h1 class="text-2xl ">Total Todos</h1>
                        <p class="text-4xl ">{{ $todos->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="card m-20 py-12 bg-gray-100  shadow-lg border rounded-lg gap-5 flex flex-col items-center">
                    <div class="card-header">
                        <a href="/todo/users">
                            <i class="fa-solid fa-user text-6xl"></i>
                        </a>
                    </div>
                    <div class="card-body flex items-center flex-col justify-center ">
                        <h1 class="text-2xl ">Total User</h1>
                        <p class="text-4xl ">{{ $users->count() }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
