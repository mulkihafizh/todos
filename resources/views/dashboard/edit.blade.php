@extends('layout.main')
<div class="container flex justify-center items-center h-screen">
    <div class="input-form w-1/2 border rounded-2xl">
        <form action="{{ route('update', $todo->id) }}" method="post" class="m-20">
            @csrf
            @method('PUT')
            <div class="form-group flex-col flex ">
                <label for="">Title</label>
                <input type="text" name="title" class="border" value="{{ $todo->title }}">
            </div>
            <div class="form-group flex-col flex ">
                <label for="">Date</label>
                <input type="date" name="date" class="border" value="{{ $todo->date }}">
            </div>
            <div class="form-group flex-col flex ">
                <label for="">Description</label>
                <textarea name="description" id="" class="border">{{ $todo->description }}</textarea>
            </div>

            <button type="submit" class="bg-green-600 text-white px-3 py-2 rounded-xl mt-2">Update</button>
            <a href="{{ route('dashboard') }}">Batal</a>

        </form>
    </div>
</div>
