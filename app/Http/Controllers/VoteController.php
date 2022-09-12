<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Voting;
use Illuminate\Support\Facades\DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votings = Voting::all();
        return view ('pages.admin.datavoting.index', ['title' => 'Data Voting', 'active' => 'datavoting', 'votings' => $votings,  'candidates' => Candidate::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.admin.datavoting.create', ['title' => 'Buat Voting', 'active' => 'datavoting', 'candidates' => Candidate::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:keluhan',
            'candidate_id' => 'required',
            'start_date' => 'required',
            'description' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('sistem-aplikasi-warga-images');
       }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 50);

        Voting::create($validatedData);

        return redirect('datavoting')->with('success', 'Voting berhasil dibuat');
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

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Voting::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function tutup($id)
    {
        DB::table('candidates')->where('id',$id)->update([
            'status'=>'Vote ditutup'
        ]);
        return redirect()->back()->with('success','Voting ditutup');
    }
}
