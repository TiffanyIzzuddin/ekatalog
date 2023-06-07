<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;


class RegisterController extends Controller



{
    public function index()
    {
        return view('register.index', [
            'title' => 'register',
            $role = Role::all(),
            'role' => $role,
        ]);
    }

    public function index1()
    {
        return view('register.index1', [
            'title' => 'register',
            $role = Role::all(),
            'role' => $role,
        ]);
    }

    public function store(request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'role_id' => 'required',
            'password' => 'required|min:5|max:255',
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil, Silahkan Login');

        return redirect('/register');
    }

    public function store1(request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'role_id' => 'required',
            'password' => 'required|min:5|max:255',
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil, Silahkan Login');

        return redirect('/login');
    }



}
