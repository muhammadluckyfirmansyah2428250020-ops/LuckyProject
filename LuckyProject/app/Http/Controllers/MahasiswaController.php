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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input
        $input = $request->validate([
            'npm' => 'required|unique:mahasiswa,npm', // npm harus unik di tabel mahasiswa
            'nama' => 'required',
            'prodi' => 'required|exists:prodi,id', // prodi_id harus ada di tabel prodis
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]):
        // upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto'); // ambil file foto
            $nama_foto = time() . '_' . $foto->getClient_interfaces
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
