<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Tanggapan;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminKeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.datakeluhan.index', [
            'title' => 'Data Keluhan',
            'active' => 'datakeluhan',
            'keluhan' => Keluhan::all(),
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
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhan $keluhan)
    {
        return view('pages.admin.datakeluhan.show', [
            'title' => 'Data Keluhan',
            'active' => 'datakeluhan',
            'keluhan' => Keluhan::all(),
            'tanggapan' => Category::all()
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
        //
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
        // $status->update($data);

        // return redirect('/admin/datakeluhan/tanggapan')->with('success', 'Status berhasil diupdate');
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
        return redirect('/admin/keluhan')->with('success', 'Keluhan berhasil di hapus');
    }

    public function proses($id)
    {
        DB::table('keluhan')->where('id',$id)->update([
            'status'=>'proses'
        ]);
        return redirect()->back()->with('success','Data sedang diproses');
    }

    public function selesai($id)
    {
        DB::table('keluhan')->where('id',$id)->update([
            'status'=>'selesai'
        ]);
        return redirect()->back()->with('success','Data pengaduan diselesaikan');
    }

    public function tanggapan($id)
    {
        $data = DB::table('keluhan')->where('id',$id)->first();
        return view('pages.admin.datakeluhan.tanggapan',[
            'title' => 'Tanggapan',
            'active' => 'datakeluhan',
            'data' => $data
        ]);
    }

}
