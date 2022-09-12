<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Keluhan;
use App\Http\Model\Category;
use App\Http\Model\User;
use Illuminate\Support\Facades\Auth;

class KeluhanController extends Controller
{
    public function index() {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->title;
        }

        if(request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }
        return view('keluhans', [
            "title" => 'Semua Keluhan'. $title,
            "active" => 'keluhans',
            "keluhans" => Keluhan::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Keluhan $keluhan) {
        return view('keluhan', [
            "title" => 'single post',
            "active" => 'keluhans',
            "keluhan" => $keluhan
        ]);
    }
}
