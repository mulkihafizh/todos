@extends('layout.main')
@section('content')
    <section id="register" class="min-h-screen flex items-center">
        <div class="container grid grid-cols-2 sm:grid-cols-1">
            <div class="left">
                <div class="py-14 sm:py-4 px-4 sm:bg-white  sm:rounded-2xl sm:shadow-2xl sm:border">
                    <h1 class="text-3xl text-center mb-5">Register</h1>
                    <form action="{{ route('store') }}" method="POST" class="flex flex-col gap-5" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <div class="input-group border flex items-center bg-gray-100 rounded-2xl">
                                <h1 class="font-extrabold pl-4 pr-3" style="font-family: 'Solway', serif;">@
                                </h1>
                                <input type="text" name="name" id="name" placeholder="Nama Lengkap"
                                    class="block focus:outline-none w-full px-4 py-3 rounded-2xl bg-gray-100 border-transparent  ">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group border flex items-center bg-gray-100 rounded-2xl">
                                <i class="fa-solid fa-user px-4"></i>
                                <input type="username" name="username" id="username" placeholder="Username"
                                    class="block focus:outline-none w-full px-4 py-3 rounded-2xl bg-gray-100 border-transparent  ">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group border flex items-center bg-gray-100 rounded-2xl">
                                <h1 class="font-extrabold px-4" style="font-family: 'Solway', serif;">@
                                </h1>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    class="block focus:outline-none w-full px-4 py-3 rounded-2xl bg-gray-100 border-transparent  ">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group border flex items-center bg-gray-100 rounded-2xl">
                                <i class="fa-solid fa-lock px-4  "></i>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="block w-full px-4 py-3 rounded-2xl bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                            </div>
                        </div>

                        <div class="form-group my-5 flex  justify-between items-center">
                            <a href="{{ route('login') }}"
                                class="block text-sm text-center text-blue-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none focus:underline">Punya
                                Akun?</a>
                            <button type="submit"
                                class="px-12 py-3 text-white bg-blue-500 rounded-full focus:bg-blue-600 focus:outline-none">Login</button>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </section>
    <style>
        #register {
            background-image: url("{{ asset('assets/images/shapes2.png') }}"), url("{{ asset('assets/images/triangles2.svg') }}");
            background-repeat: no-repeat;
            background-size: 300px, cover;
            background-position: bottom right, top;
        }

        .form {
            box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
