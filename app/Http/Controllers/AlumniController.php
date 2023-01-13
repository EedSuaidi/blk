<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::latest()->paginate(10);
        return view('alumni.index', compact('alumnis'));
    }

    public function create()
    {
        return view('alumni.create');
    }

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

        return redirect('/alumni');
    }
}
