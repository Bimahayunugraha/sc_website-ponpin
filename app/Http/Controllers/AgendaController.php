<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';

        return view('allagenda.index', [
            "title" => 'Semua Agenda'. $title,
            "active" => 'agenda',
            "agenda" => Agenda::latest()->filter(request(['search']))->paginate(6)->withQueryString(),
        ]);
    }

    public function admin() {
        return view ('pages.admin.dataagenda.index', [
            'title' => 'Data Agenda',
            'active' => 'dataagenda',
            'agendas' => Agenda::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
        ]);
    }

    public function seedetails($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('pages.admin.dataagenda.show', [
            'title' => 'Detail Data Agenda',
            'active' => 'dataagenda',
            'agenda' => $agenda,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.dataagenda.create', [
            'title' => 'Tambah Data Agenda',
            'active' => 'dataagenda',
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
            'slug' => 'required|unique:agenda',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 50);


        Agenda::create($validatedData);

        return redirect('dataagenda')->with('success-add', 'Agenda berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        return view('allagenda.show', [
            'title' => 'Detail Agenda',
            'active' => 'agenda',
            'agenda' => $agenda,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('pages.admin.dataagenda.edit ', [
            'title' => 'Edit Data Agenda',
            'active' => 'dataagenda',
            'agenda' => $agenda,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(),[
            'title' => 'required|max:255',
            'slug' => 'required|unique:agenda',
            'start_date' => 'required',
            'description' => 'required'
        ])->validate();

        $agenda = Agenda::findOrFail($id);
        $agenda->title = $request->get('title');
        $agenda->slug = $request->get('slug');
        $agenda->start_date = $request->get('start_date');
        $agenda->end_date = $request->get('end_date');
        $agenda->description = $request->get('description');
       
        $agenda['excerpt'] = Str::limit(strip_tags($request->description), 50);

        $agenda->save();

        return redirect('dataagenda')->with('success-update', 'Agenda berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        return redirect()->back()->with('success-delete', 'Agenda berhasil dihapus');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Agenda::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    // public function berakhir($id)
    // {
    //     DB::table('agenda')->where('id',$id)->update([
    //         'status'=>'berakhir'
    //     ]);
    //     return redirect()->back()->with('success-status','Agenda Berakhir');
    // }
}
