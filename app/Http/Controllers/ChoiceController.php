<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Voting;
use Illuminate\Support\Facades\Auth;

class ChoiceController extends Controller
{
    public function index()
    {
        $candidate = Candidate::all();
        return view('allvoting.show', [
            'title' => 'Voting',
            'active' => 'voting',
            'candidates' => $candidate,
        ]);
    }

    public function choice(Request $request, $id)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
       
        $user->candidate_id = $request->get('candidate_id');
        $user->status = "SUDAH";
        $user->save();
        return redirect('voting')->with('success', 'You Have Been Choiched');
    }
}
