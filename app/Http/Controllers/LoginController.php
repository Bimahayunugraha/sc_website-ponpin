<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;

class LoginController extends Controller
{
    // public function index() {
    //     return view('pages.admin.login.index', [
    //         'title' => 'Login',
    //         'active' => 'login'
    //     ]);
    // }

    public function getLogin() {
        return view('pages.admin.login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request) {
        // $credentials = $request->validate([
        //     'name' => 'required',
        //     'password' => 'required'
        // ]);

        // if(Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard/user');
        // }

        // return back()->with('loginError', 'Login Gagal!');

        if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
          return redirect()->intended('admin');
        } elseif (Auth::guard('warga')->attempt(['name' => $request->name, 'password' => $request->password])) {
          // if successful, then redirect to their intended location
        return redirect()->intended('warga');
        } else {
          return redirect('/login')->with('message','username atau password salah');
        }  
    }

    public function logoutAdmin(Request $request) {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        } 
    
        return redirect('/login');
    }

    public function logoutWarga(Request $request) {
        if (Auth::guard('warga')->check()) {
            Auth::guard('warga')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        } 

        return redirect('/login/warga');
    }
}
