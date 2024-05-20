<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Halaman Register',
            'navtitle' => 'Register'
        ]);
    }

    public function store(Request $request) {
        //validasi
        $validatedData = $request->validate([
            'name' => 'required|max:255|',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // enkripsi
        $validatedData['password'] = bcrypt($validatedData['password']);

        // create/insert data
        User::create($validatedData);

        //redirect ke halaman login
        return redirect('/login')->with('success', 'Registrasi Berhasil Silahkan Login');
    }
}

