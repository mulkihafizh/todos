<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('dashboard.profile', compact('user'));
    }


    public function users()
    {
        $users = User::where('role', 'user')->get();
        return view('dashboard.users', compact('users'));
    }

    public function auth(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ], [
            'email.exists' => 'Email not found',
            'password.required' => 'Password is required',
            'email.required' => 'Harus mengisi Email'
        ]);

        if (Auth::attempt($login)) {
            return redirect()->route('dashboard')->with('loginsuccess', 'Login Berhasil!');
        }
        return back()->with('error', 'as');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }

    public function register()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                "username" => 'required|unique:users,username|max:50',
                'email' => 'required|unique:users,email|email:dns',
                'password' => 'required|min:8|max:16',
            ],
            [
                'username.max' => 'Max 50 Character',
                'username.unique' => 'Username already exists',
                'email.unique' => 'Email already exists',
                'password.min' => 'Password min 8 character',
                'password.max' => 'Password max 16 character'
            ]
        );

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect()->route('login')->with('success', 'Registrasi Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.editprofile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}