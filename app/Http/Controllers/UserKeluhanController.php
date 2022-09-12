<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Category;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.warga.keluhan.index', [
            'title' => 'Keluhan',
            'active' => 'keluhan',
            'keluhan' => Keluhan::where('user_id', Auth::user()->id)->get(),
            'category' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.warga.keluhan.create', [
            'title' => 'Pengajuan Keluhan',
            'active' => 'pengajuankeluhan',
            'category' => Category::all()
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
            'slug' => 'required|unique:keluhan',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('keluhan-images');
       }

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 50);

        Keluhan::create($validatedData);

        return redirect('/user/keluhan')->with('success', 'Keluhan Ands berhasil diajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhan $keluhan)
    {
        $tanggapan = Tanggapan::where('keluhan_id')->first();

        return view('pages.warga.keluhan.show', [
            'title' => 'Detail Keluhan',
            'active' => 'keluhan',
            'keluhan' => $keluhan,
            'tanggapan' => $tanggapan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluhan $keluhan)
    {
        return view('pages.warga.keluhan.edit ', [
            'title' => 'Edit Keluhan',
            'active' => 'keluhan',
            'keluhan' => $keluhan,
            'category' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keluhan $keluhan)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ];

        if($request->slug != $keluhan->slug) {
            $rules['slug'] = 'required|unique:keluhan';
        }


        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('keluhan-images');
       }
       
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 50);

        Keluhan::where('id', $keluhan->id)
                ->update($validatedData);

        // $status->update($data);

        return redirect('/admin/datakeluhan')->with('success', 'Status berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluhan $keluhan)
    {
        if($keluhan->image) {
            Storage::delete($keluhan->image);
        }
        Keluhan::destroy($keluhan->id);
        return redirect('/admin/keluhan')->with('success', 'Keluhan Anda berhasil di hapus');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Keluhan::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
