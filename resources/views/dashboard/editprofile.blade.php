@extends('layout.main')

@section('content')
    <section id="editprofile" class="min-h-screen flex items-center justify-center">
        @include('component.navbar')
        <form action="post" class="flex flex-col gap-5 bg-gray-100 shadow-md px-4 py-6 rounded-lg">
            @csrf
            @method('PUT')
            <div class="form-group flex flex-col">
                <label for="">Username</label>
                <input type="text">
            </div>
            <div class="form-group flex flex-col">
                <label for="">Name</label>
                <input type="text">
            </div>

            <div class="form-group flex flex-col">
                <label for="">Profile Image</label>
                <input type="file">
            </div>
            <div class="form-group flex justify-between">
                <button type="submit" class="bg-blue-500 px-3 text-white py-1 rounded-lg">Submit</button>
                <a href="/profile" class="bg-green-600 px-3 text-white py-1 rounded-lg">Back</a>
            </div>
        </form>
    </section>
@endsection
