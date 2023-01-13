<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.home.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alumni()
    {
        $alumnis = Alumni::latest()->paginate(10);
        return view('dashboard.alumni.index', compact('alumnis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.alumni.create');
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
            'nama' => 'required|max:128',
            'nik' => 'required|max:16',
            'jenis_kelamin' => 'required|max:64',
            'alamat' => 'required|max:256',
            'jurusan' => 'required|max:64',
            'tahun_lulus' => 'required|max:4',
            'no_telp' => 'required|max:32',
            'sosmed' => 'required|max:64',
            'status' => 'required|max:64',
            'nama_industri' => 'required|max:256',
            'foto' => 'required|file|max:4096',
            'rating' => 'required|max:64',
            'saran' => 'required|max:512'
        ]);

        if($request->file('upload_foto')) {
            $validatedData['upload_foto'] = $request->file('upload_foto')->store('public/storage');
        }

        Alumni::create($validatedData);

        return redirect('/dashboard/alumni');
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
    public function edit(Alumni $alumni)
    {
        return view('dashboard.alumni.edit', [
            'alumni' => $alumni
        ]);
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
        $validatedData = $request->validate([
            'nama' => 'required|max:128',
            'nik' => 'required|max:16',
            'jenis_kelamin' => 'required|max:64',
            'alamat' => 'required|max:256',
            'jurusan' => 'required|max:64',
            'tahun_lulus' => 'required|max:4',
            'no_telp' => 'required|max:32',
            'sosmed' => 'required|max:64',
            'status' => 'required|max:64',
            'nama_industri' => 'required|max:256',
            'foto' => 'required|file|max:4096',
            'rating' => 'required|max:64',
            'saran' => 'required|max:512'
        ]);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
