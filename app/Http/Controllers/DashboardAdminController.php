<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\Tanggapan;
use App\Models\User;
use App\Models\Evaluation;
use App\Models\Agenda;
use App\Models\Category;

class DashboardAdminController extends Controller
{
    public function index(){
        $user = User::find(1);
        return view ('pages.admin.dashboard.index', [
            'title' => 'Dashboard Admin',
            'active' => 'dashboardadmin',
            'user' => $user,
            'user' => User::where('roles','=', 'USER')->count(),
            'admin' => User::where('roles', '=', 'ADMIN')->count(),
            'evaluation' => Evaluation::all()->count(),
            'agenda' => Agenda::all()->count(),
            'category' => Category::all()->count(),
            'result1' => Evaluation::where('category_id', '1')->count(),
            'result2' => Evaluation::where('category_id', '2')->count(),
            'result3' => Evaluation::where('category_id', '3')->count(),
            'result4' => Evaluation::where('category_id', '4')->count(),
            'result5' => Evaluation::where('category_id', '5')->count(),
            'result6' => Evaluation::where('category_id', '6')->count(),
            'result7' => Evaluation::where('category_id', '7')->count(),
            'result8' => Evaluation::where('category_id', '8')->count(),
            'result11' => Evaluation::where('category_id', '1')->where('star_evaluation', '1')->count(),
            'result12' => Evaluation::where('category_id', '1')->where('star_evaluation', '2')->count(),
            'result13' => Evaluation::where('category_id', '1')->where('star_evaluation', '3')->count(),
            'result14' => Evaluation::where('category_id', '1')->where('star_evaluation', '4')->count(),
            'result15' => Evaluation::where('category_id', '1')->where('star_evaluation', '5')->count(),
            'result21' => Evaluation::where('category_id', '2')->where('star_evaluation', '1')->count(),
            'result22' => Evaluation::where('category_id', '2')->where('star_evaluation', '2')->count(),
            'result23' => Evaluation::where('category_id', '2')->where('star_evaluation', '3')->count(),
            'result24' => Evaluation::where('category_id', '2')->where('star_evaluation', '4')->count(),
            'result25' => Evaluation::where('category_id', '2')->where('star_evaluation', '5')->count(),
            'result31' => Evaluation::where('category_id', '3')->where('star_evaluation', '1')->count(),
            'result32' => Evaluation::where('category_id', '3')->where('star_evaluation', '2')->count(),
            'result33' => Evaluation::where('category_id', '3')->where('star_evaluation', '3')->count(),
            'result34' => Evaluation::where('category_id', '3')->where('star_evaluation', '4')->count(),
            'result35' => Evaluation::where('category_id', '3')->where('star_evaluation', '5')->count(),
            'result41' => Evaluation::where('category_id', '4')->where('star_evaluation', '1')->count(),
            'result42' => Evaluation::where('category_id', '4')->where('star_evaluation', '2')->count(),
            'result43' => Evaluation::where('category_id', '4')->where('star_evaluation', '3')->count(),
            'result44' => Evaluation::where('category_id', '4')->where('star_evaluation', '4')->count(),
            'result45' => Evaluation::where('category_id', '4')->where('star_evaluation', '5')->count(),
            'result51' => Evaluation::where('category_id', '5')->where('star_evaluation', '1')->count(),
            'result52' => Evaluation::where('category_id', '5')->where('star_evaluation', '2')->count(),
            'result53' => Evaluation::where('category_id', '5')->where('star_evaluation', '3')->count(),
            'result54' => Evaluation::where('category_id', '5')->where('star_evaluation', '4')->count(),
            'result55' => Evaluation::where('category_id', '5')->where('star_evaluation', '5')->count(),
            'result61' => Evaluation::where('category_id', '6')->where('star_evaluation', '1')->count(),
            'result62' => Evaluation::where('category_id', '6')->where('star_evaluation', '2')->count(),
            'result63' => Evaluation::where('category_id', '6')->where('star_evaluation', '3')->count(),
            'result64' => Evaluation::where('category_id', '6')->where('star_evaluation', '4')->count(),
            'result65' => Evaluation::where('category_id', '6')->where('star_evaluation', '5')->count(),
            'result71' => Evaluation::where('category_id', '7')->where('star_evaluation', '1')->count(),
            'result72' => Evaluation::where('category_id', '7')->where('star_evaluation', '2')->count(),
            'result73' => Evaluation::where('category_id', '7')->where('star_evaluation', '3')->count(),
            'result74' => Evaluation::where('category_id', '7')->where('star_evaluation', '4')->count(),
            'result75' => Evaluation::where('category_id', '7')->where('star_evaluation', '5')->count(),
            'result81' => Evaluation::where('category_id', '8')->where('star_evaluation', '1')->count(),
            'result82' => Evaluation::where('category_id', '8')->where('star_evaluation', '2')->count(),
            'result83' => Evaluation::where('category_id', '8')->where('star_evaluation', '3')->count(),
            'result84' => Evaluation::where('category_id', '8')->where('star_evaluation', '4')->count(),
            'result85' => Evaluation::where('category_id', '8')->where('star_evaluation', '5')->count(),
            // 'pending' => Keluhan::where('status', 'Belum di Proses')->count(),
            // 'process' => Keluhan::where('status', 'Sedang di Proses')->count(),
            // 'success' => Keluhan::where('status', 'Selesai')->count(),
        ]);
    }

}
