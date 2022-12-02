@extends('layout.main')


@section('alert')
    @include('component.navbar')
    @if (session('authstat'))
        <div class="bg-green-200 absolute top-3 p-5 right-5 alert">
            {{ session('authstat') }}
        </div>
    @endif
    @if (session('addtodo'))
        <div class="bg-green-200 absolute top-3 p-5 right-5 alert">
            {{ session('addtodo') }}
        </div>
    @endif
@endsection
