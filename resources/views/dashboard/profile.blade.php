@extends('layout.main')
@section('content')
    @include('component.navbar')
    <section id="profile" class=" min-h-screen flex items-center">
        <div class="container flex justify-center">
            <div class="profile-card  w-1/2 bg-gray-100 overflow-hidden  rounded-md shadow-md flex flex-col gap-6 ">
                <div class="profile-header relative pb-14 pt-8  justify-center bg-purple-400 gap-4">
                    <div class="img absolute left-8">
                        <img src="{{ asset('assets/images/' . $user->image) }}" style="width: 100px;"
                            class="rounded-full border-4" alt="">
                    </div>

                </div>
                <div class="profile-data px-8 pt-8">
                    <div class="profile-data-item">
                        <h1 class="text-md font-bold">Username&nbsp;</h1>
                        <p>: {{ $user->username }}</p>
                    </div>
                    <div class="profile-data-item">
                        <h1 class="text-md font-bold">Email </h1>
                        <p>: {{ $user->email }}</p>
                    </div>
                    <div class="profile-data-item">
                        <h1 class="text-md font-bold">Name </h1>
                        <p>: {{ $user->name }}</p>
                    </div>
                </div>
                <div class="profile-action px-8 pb-4">
                    <a href="/profile/edit/{{ $user->id }}" class="bg-blue-600 text-white px-2 py-1 rounded-xl">Edit
                        Profile</a>


                </div>
            </div>
        </div>
    </section>

    <style>
        .profile-data-item {
            display: grid;
            grid-template-columns: 2fr 3fr;
            align-items: end;
        }
    </style>
@endsection
