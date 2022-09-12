<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'phone' => 'required|string|max:13',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:8|max:255',
        ],
        [
            'name.required' => 'Nama harus diisi',
            'username.required' => 'Username harus diisi',
            'username.min' => 'Username minimal 3 karakter',
            'phone.required' => 'Nomor telepon harus diisi',
            'phone.max' => 'Nomor telepon maksimal 13 karakter',
            'address.required' => 'Alamat harus diisi',
            'password.required' => 'Password harus diisi',
            'password.max' => 'Password minimal 8 karakter',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        Warga::create($validatedData);

        return redirect('/login/warga')->with('success', 'Registrasi Berhasil, Silahkan Login');
    }
}
