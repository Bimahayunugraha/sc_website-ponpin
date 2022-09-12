<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';

        if(request('candidate')) {
            $candidate = Candidate::firstWhere('name', request('candidate'));
            $title = ' by ' . $candidate->name;
        }

        return view('allvoting.index', [
            'title' => 'Voting' . $title,
            'active' => 'voting',
            'candidates' => Candidate::latest()->filter(request(['search', 'candidate']))->paginate(10)->withQueryString(),
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
    public function show(Voting $voting)
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
