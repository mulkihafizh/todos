<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'user')->get();
        $todos = Todo::where('user_id', Auth::user()->id)->where('status', 0)->get();
        return view('dashboard.todos', compact('todos', 'users'), [
            'active' => 'home'
        ]);
    }
    public function done()
    {
        $todos = Todo::where('user_id', Auth::user()->id)->where('status', 1)->get();
        return view('dashboard.done', compact('todos'), [
            'active' => 'done'
        ]);
    }
    public function login()
    {
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'date'
        ]);
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->date = $request->date;
        $todo->user_id = Auth::user()->id;
        $todo->save();
        return redirect()->route('dashboard')->with('addtodo', 'Todo created successfully');
    }

    public function home()
    {
        return view('dashboard.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
    }

    public function add()
    {
        return view('dashboard.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('dashboard.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'date|required'
        ]);


        $todo = Todo::where('id', $id)->update(
            [
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date
            ]

        );


        return redirect()->route('dashboard')->with('addtodo', 'Todo updated successfully');
    }

    public function update_done($id)
    {
        $todo = Todo::where('id', $id)->update(
            [
                'status' => 1,
                'done_time' => now()
            ]

        );
        if ($todo) {
            return redirect()->route('dashboard')->with('updated', 'Status berhasil diubah!');
        } else {
            return redirect()->route('dashboard')->with('error', 'Todo updated failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todo::find($id)->delete();
        return redirect()->route('dashboard')->with('deleted', 'Todo berhasil dihapus!');
    }

    public function done_destroy($id)
    {
        Todo::find($id)->delete();
        return redirect()->route('done')->with('deleted', 'Todo berhasil dihapus');
    }

    public function undo($id)
    {
        $todo = Todo::where('id', $id)->update(
            [
                'status' => 0,
                'done_time' => null
            ]

        );
        if ($todo) {
            return redirect()->route('done')->with('updated', 'Status berhasil diubah!');
        } else {
            return redirect()->route('done')->with('error', 'Todo updated failed');
        }
    }
}