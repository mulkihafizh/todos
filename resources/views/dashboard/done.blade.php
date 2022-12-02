@extends('dashboard.index')
@section('todos')
    <div class="iniudah mt-3 container">
        @if ($todos->count() == 0)
            <div class="zero flex flex-col items-center">
                <img class="w-2/5" src="{{ asset('assets/images/listt.webp') }}" alt="">
                <h1 class="text-center text-3xl ">Todo Masih Kosong, Klik Tambahkan Todo di kanan atas!</h1>
            </div>
        @else
            <div class="todos mt-2  grid grid-cols-2 sm:grid-cols-1 gap-4">
                @foreach ($todos as $todo)
                    <div class="todo shadow-md bg-gray-100 flex rounded-md py-3 flex-col px-4">
                        <div class="title text-2xl font-mono"> {{ $loop->iteration }}. {{ $todo->title }}</div>
                        <div class="time">Target Selesai: <span> {!! date('j F Y', strtotime($todo->date)) !!} | Status:
                                <span class="text-green-600">
                                    {{ $todo->status == 1 ? 'Complete' : 'Proses' }}</span>
                        </div>
                        <div class="done-time">Tanggal Selesai: {!! date('j F Y', strtotime($todo->done_time)) !!}</div>
                        <div class="title">Deskripsi: <br> {{ $todo->description }}</div>
                        <div class="action font-mono flex sm:grid grid-cols-3 gap-3 mt-2">
                            <form action="{{ route('delete', $todo->id) }}"
                                class="bg-red-600 px-2 text-center rounded-md text-white" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('yakin?')">Delete</button>
                            </form>
                            <a href="{{ route('updatetodo', $todo->id) }}"
                                class="bg-green-600 px-2 rounded-md text-white text-center">Done</a>
                            <a href="{{ route('edit', $todo->id) }}"
                                class="bg-blue-600 text-center px-2 rounded-md text-white">Edit</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="footer border shadow bg-gray-100 fixed bottom-0 w-full py-3 container ">
            <h1 class="float-right">Jumlah Todo: {{ $todos->count() }}</h1>

        </div>
    @endsection
