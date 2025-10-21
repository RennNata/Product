<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $penggunas = Pengguna::all();

        return view('pengguna.index', compact('penggunas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'id_peng' => 'required|unique:penggunas,id',
                'nama' => 'required|string|min:3|max:255',                
            ],
            [
                'id_peng.required' => 'ID tidak boleh kosong',
                'id_peng.unique' => 'ID sudah ada',
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.min' => 'Minimal 3 karakter',
                'nama.max' => 'Maksimal 255 karakter',
            ]
            );

        $penggunas = new Pengguna();
        $penggunas->id_peng = $request->id_peng;
        $penggunas->nama = $request->nama;
        
        $penggunas->save();

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penggunas = Pengguna::findorFail($id);
        return view('pengguna.show', compact('penggunas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penggunas = Pengguna::findorFail($id);
        return view('pengguna.edit', compact('penggunas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penggunas = Pengguna::findorFail($id);
        $penggunas->id_peng = $request->id_peng;
        $penggunas->nama = $request->nama;

        $penggunas->save();
        session()->flash('success', 'Data berhasil diupdate.');
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penggunas = Pengguna::findorFail($id);

        $penggunas->delete();
        return redirect()->route('pengguna.index')->with('success', 'Data berhasil dihapus.');
    }
}
