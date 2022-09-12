<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use App\Models\TopicEvaluation;
use App\Models\Evaluation;
use App\Models\Category;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = TopicEvaluation::all();

        $eval = Evaluation::all();
        return view ('dashboard.index', [
            'title' => 'Home',
            'active' => 'home',
            'topics' => $topics,
            'category' => Category::all(),
            'eval' => $eval,
            'result1' => Evaluation::where('category_id','1')->count(),
            'result11' => Evaluation::where('category_id','=', '1')->avg('star_evaluation'),
            'result2' => Evaluation::where('category_id','=', '2')->count(),
            'result22' => Evaluation::where('category_id','2')->avg('star_evaluation'),
            'result3' => Evaluation::where('category_id','=', '3')->count(),
            'result33' => Evaluation::where('category_id','3')->avg('star_evaluation'),
            'result4' => Evaluation::where('category_id','=', '4')->count(),
            'result44' => Evaluation::where('category_id','4')->avg('star_evaluation'),
            'result5' => Evaluation::where('category_id','=', '5')->count(),
            'result55' => Evaluation::where('category_id','5')->avg('star_evaluation'),
            'result6' => Evaluation::where('category_id','=', '6')->count(),
            'result66' => Evaluation::where('category_id','6')->avg('star_evaluation'),
            'result7' => Evaluation::where('category_id','=', '7')->count(),
            'result77' => Evaluation::where('category_id','7')->avg('star_evaluation'),
            'result8' => Evaluation::where('category_id','=', '8')->count(),
            'result88' => Evaluation::where('category_id','8')->avg('star_evaluation'),
        ]);
    }

    public function profile() {
        return view ('usersettings.profile', [
            'title' => 'Profile',
            'active' => 'profile',
            'user' => Auth::user()
        ]);
    }

    public function settings() {
        return view ('usersettings.settings', [
            'title' => 'Settings',
            'active' => 'settings',
            'user' => Auth::user(),
        ]);
    }

    public function passwordedit() {
        return view ('usersettings.password.update', [
            'title' => 'Update Password',
            'active' => 'profile',
            'user' => Auth::user()
        ]);
    }

    public function passwordupdate(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/')->with('success', 'Password berhasil diupdate, silahkan login kembali');
            // return redirect('/user/profile')->with('success', 'Password berhasil diupdate');
        }
        throw ValidationException::withMessages([
            'current_password' => 'Password lama tidak sesuai',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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



