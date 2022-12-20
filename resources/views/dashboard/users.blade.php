@extends('layout.main')


@section('content')
    <section id="users" class="pt-20">
        @include('component.navbar')

        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            <a href="{{ route('edit', $user->id) }}"
                                class="bg-blue-600 text-white px-2 py-1 rounded-xl">Edit</a>
                            <form action="{{ route('delete', $user->id) }}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded-xl">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
