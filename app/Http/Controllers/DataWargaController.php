<?php

namespace App\Http\Controllers;

use App\Models\TopicEvaluation;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;

class DataWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pages.admin.datawarga.index', [
            'title' => 'Data Warga',
            'active' => 'datawarga',
            'users' => User::where('roles', 'user')->filter(request(['search']))->paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.admin.datawarga.create', [
            'title' => 'Tambah Data Warga',
            'active' => 'datawarga',
            'user' => User::all(),
            'roles' => ['user', 'admin'],
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:13', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:8'],
            'roles' => ['required'],
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
        ]);
        return redirect('datawarga')->with('success-add', 'Data warga berhasil dibuat');
        throw ValidationException::withMessages([
            'name.required' => 'Nama harus diisi',
            'username.required' => 'Username harus diisi',
            'username.min' => 'Username minimal 3 karakter',
            'phone.required' => 'Nomor telepon harus diisi',
            'phone.max' => 'Nomor telepon maksimal 13 karakter',
            'address.required' => 'Alamat harus diisi',
            'password.required' => 'Password harus diisi',
            'password.max' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password tidak sama',
        ]);

        // $request['password'] = Hash::make($request['password']);
        // User::create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view ('pages.admin.datawarga.show', [
            'title' => 'Data Warga',
            'active' => 'datawarga',
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view ('pages.admin.datawarga.edit', [
            'title' => 'Edit Data Warga',
            'active' => 'datawarga',
            'user' => $user,
            'candidate' => Candidate::all(),
            'topic' => TopicEvaluation::all(),
            'roles' => ['user', 'admin'],
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(),[
            'phone' => ['required', 'string', 'max:13'],
            'address' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string',],
            'candidate_id' => ['integer'],
            'password' => ['min:8'],
            'roles' => ['required'],
        ])->validate();

        $user = User::findOrFail($id);
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->status = $request->get('status');
        $user->candidate_id = $request->get('candidate_id');
        $user->password = Hash::make($request->get('password'));
        $user->roles = $request->get('roles');

        $user->save();

        return redirect('datawarga')->with('success-update', 'Data warga berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success-delete', 'Data penilaian berhasil dihapus');
    }
}
