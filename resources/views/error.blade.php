@extends('layout.main')

@section('content')
    <section id="error" class="flex flex-col min-h-screen justify-center items-center bg-gray-100">
        <div class="error-code flex flex-col items-center justify-center gap-5 py-20">
            <i class="fa-solid fa-triangle-exclamation text-red-600 text-6xl"></i>
            <h1 class="text-red-600 text-4xl">405 Not Allowed</h1>
            <h2 class="text-2xl">Kamu Tidak Diperbolehkan Mengakses Halaman Ini!</h2>
            <a href="/" class="bg-blue-200 rounded-lg py-2 px-3">Kembali Ke Dashboard</a>
        </div>
    </section>
@endsection
