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
            'nama_alumni' => 'required|max:50',
            'nik' => 'required|integer|max:16',
            'jenis_kelamin' => 'required|max:20',
            'alamat' => 'required|max:128',
            'jusuran' => 'required|max:50',
            'tahun_lulus' => 'required|integer|max:4',
            'no_telp' => 'required|max:20',
            'sosmed' => 'required|max:50',
            'keg_set_lulus' => 'required|max:50',
            'nama_industry' => 'required|max:256',
            'upload_foto' => 'required|'
        ]);
    }
}
