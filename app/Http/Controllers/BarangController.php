<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_barang' => 'required|string|min:3|max:255',
                'merk' => 'required|string|min:3|max:255',
                'harga' => 'required|string',
                'stok' => 'required|integer',
            ],
            [
                'nama_barang.required' => 'Nama Barang tidak boleh kosong',
                'nama_barang.min' => 'Minimal 3 karakter',
                'nama_barang.max' => 'Maksimal 255 karakter',
                'merk.required' => 'Merk tidak boleh kosong',
                'merk.min' => 'Minimal 3 karakter',
                'merk.max' => 'Maksimal 255 karakter',
                'harga.required' => 'Harga tidak boleh kosong',
                'stok.required' => 'Stok tidak boleh kosong',
                'stok.integer' => 'Stok harus berupa angka',
            ]
        );

        $barangs = new Barang();
        $barangs->nama_barang = $request->nama_barang;
        $barangs->merk = $request->merk;
        $barangs->harga = $request->harga;
        $barangs->stok = $request->stok;
        $barangs->save();

        session()->flash('success', 'Data berhasil ditambahkan.');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangs = Barang::findorFail($id);
        return view('barang.show', compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barangs = Barang::findorFail($id);
        return view('barang.edit', compact('barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barangs = Barang::findorFail($id);
        $barangs->nama_barang = $request->nama_barang;
        $barangs->merk = $request->merk;
        $barangs->harga = $request->harga;
        $barangs->stok = $request->stok;

        $barangs->save();

        session()->flash('success', 'Data berhasil diupdate.');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangs = Barang::findorFail($id);
        $barangs->delete();

        session()->flash('success', 'Data berhasil dihapus.');
        return redirect()->route('barang.index');
    }
}
