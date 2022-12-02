@extends('layout.main')
<div class="container flex justify-center items-center h-screen">
    <div class="input-form w-1/2 border rounded-2xl">
        <form action="{{ route('addtodo') }}" method="post" class="m-20">
            @csrf
            <div class="form-group flex-col flex ">
                <label for="">Title</label>
                <input type="text" name="title" class="border">
            </div>
            <div class="form-group flex-col flex ">
                <label for="">Date</label>
                <input type="date" name="date" class="border">
            </div>
            <div class="form-group flex-col flex ">
                <label for="">Description</label>
                <textarea name="description" id="" class="border"></textarea>
            </div>

            <button type="submit" class="bg-green-600 text-white px-3 py-2 rounded-xl mt-2">Submit</button>

        </form>
    </div>
</div>
