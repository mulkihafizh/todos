@extends('layout.main')
@section('content')
    <section id="login" class="min-h-screen flex items-center">
        @if (session('authstat'))
            <div class="info fixed bg-white py-2 px-3 border rounded-lg shadow-md mb-4 sm:mb-1">
                {{ session('authstat') }}
            </div>
        @endif
        @if (session('error'))
            Apa yang anda lakukan?
        @endif
        <div class="container grid grid-cols-2 sm:grid-cols-1">
            <div class="left">
                <div class="image flex justify-center">
                    <img src="{{ asset('assets/images/login.webp') }}" class="w-full sm:w-3/4" alt="">
                </div>
            </div>
            <div class="right flex flex-col justify-center mx-8 sm:mx-0">
                {{-- @if (session('authstat')) --}}
                {{-- <div class="info bg-white py-2 px-3 border rounded-lg shadow-md mb-4 sm:mb-1"> --}}
                {{-- {{ session('authstat') }} --}}
                {{-- Login ke Akun anda untuk Akses halaman todo --}}
                {{-- </div> --}}
                {{-- @endif --}}


                @if ($errors->any())
                    <div class="info bg-white py-2 px-3 border rounded-lg shadow-md mb-4 sm:mb-1">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif

                <div class="py-14 sm:py-4 px-4 sm:bg-white  sm:rounded-2xl sm:shadow-2xl sm:border">
                    <h1 class="text-3xl text-center mb-5">Login</h1>
                    <form action="{{ route('auth') }}" method="POST" class="flex flex-col gap-5" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <div class="input-group flex items-center  bg-gray-100 rounded-2xl">
                                <h1 class="font-extrabold px-4" style="font-family: 'Solway', serif;">@
                                </h1>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    class="block focus:outline-none w-full px-4 py-3 rounded-2xl bg-gray-100 border-transparent  ">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group flex items-center bg-gray-100 rounded-2xl">
                                <i class="fa-solid fa-lock px-4  "></i>
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="block focus:outline-none w-full px-4 py-3 rounded-2xl bg-gray-100 border-transparent ">
                            </div>
                        </div>

                        <div class="form-group my-5 flex  justify-between items-center">
                            <a href="{{ route('register') }}"
                                class="block text-sm text-center text-blue-500 hover:text-blue-600 focus:text-blue-600 focus:border-gray-500 focus:bg-white focus:ring-0">Belum
                                punya akun?</a>
                            </a>
                            <button type="submit"
                                class="px-12 py-3 text-white bg-blue-500 rounded-full focus:bg-blue-600 focus:outline-none">Login</button>
                        </div>
                        <div class="form-group">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <style>
        #login {
            background-image: url("{{ asset('assets/images/shapes.png') }}"), url("{{ asset('assets/images/triangle.svg') }}");
            background-repeat: no-repeat;
            background-size: 300px, cover;

            background-position: bottom left, top;
        }



        .form {
            box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
