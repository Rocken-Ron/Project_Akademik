<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all(); // Mengambil semua data mahasiswa
        return view('mahasiswa.index', compact('mahasiswa')); // Mengirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create'); // Menampilkan form untuk menambahkan mahasiswa baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required|size:8|unique:mahasiswa,nim',
            'nama' => 'required|max:50',
            'kota' => 'required|max:25',
        ]);

        // Menyimpan data mahasiswa baru
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kota' => $request->kota,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa')); // Menampilkan detail mahasiswa
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa')); // Menampilkan form untuk mengedit mahasiswa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|max:50',
            'kota' => 'required|max:25',
        ]);

        // Update data mahasiswa
        $mahasiswa->update([
            'nama' => $request->nama,
            'kota' => $request->kota,
        ]);

        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete(); // Menghapus data mahasiswa
        return redirect()->route('mahasiswa.index');
    }

}
