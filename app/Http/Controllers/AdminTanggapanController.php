<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\Keluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminTanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('pages.admin.tanggapan.index', [
            'title' => 'Data Tanggapan',
            'active' => 'datatanggapan',
            'tanggapan' => Tanggapan::all(),
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
        $tanggal = date('Y-m-d');
        DB::table('tanggapan')->insert([
            'keluhan_id'=>$request->id,
            'created_at'=>$tanggal,
            'tanggapan'=>$request->tanggapan,
        ]);

        return redirect('tanggapan')->with('success', 'Tanggapan berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function show(Tanggapan $tanggapan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('tanggapan')->where('id',$id)->first();
        return view('admin/tanggapan/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tanggapan')->where('id',$id)->update([
            'tanggapan'=>$request->tanggapan
        ]);
        return redirect('admin/tanggapan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tanggapan')->where('id',$id)->delete();
        return redirect()->back()->with('success','data berhasil dihapus');
    }
}
