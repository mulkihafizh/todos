@extends('layout.main')
@section('content')
    @include('component.navbar')
    <section id="home" class="min-h-screen flex items-center">
        <div class="container">
            <div class="home-content grid grid-cols-2">
                <div class="home-left ">
                    <h1 class="text-4xl font-bold">Welcome to <span class="text-blue-600">Todo App</span></h1>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                    <div class="home mt-4">
                        <a href="/dashboard" class="py-2 px-3 bg-blue-200 rounded-lg ">Dashboard</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
