<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class UserDiskusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pages.warga.diskusi.index', [
            'title' => 'Diskusi',
            'active' => 'diskusi',
            'diskusi' => Forum::where('user_id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.warga.diskusi.create', [
            'title' => 'Diskusi',
            'active' => 'diskusi',
        ]);
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
            'slug' => 'required|unique:diskusi',
            'description' => 'required'
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags
        ($request->description), 100);

        Forum::create($validatedData);

        return redirect('/user/diskusi')->with('success', 'Diskusi berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        return view ('pages.warga.diskusi.show', ['forum' => $forum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }

    public function checkSlugDiskusi(Request $request) {
        $slug = SlugService::createSlug(Forum::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
