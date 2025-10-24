<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelis = Pembeli::all();
        return view('pembeli.index', compact('pembelis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_pembeli' => 'required|string|min:3|max:255',
                'jenis_kelamin' => 'required',
                'telepon' => 'required|string||min:10|max:15',
            ],
            [
                'nama_pembeli.required' => 'Nama Pembeli tidak boleh kosong',
                'nama_pembeli.min' => 'Minimal 3 karakter',
                'nama_pembeli.max' => 'Maksimal 255 karakter',
                'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',                

                'telepon.min' => 'Minimal 10 karakter',
                'telepon.max' => 'Maximal 15 karakter',            
            ]
        );

        $pembelis = new Pembeli();
        $pembelis->nama_pembeli = $request->nama_pembeli;
        $pembelis->jenis_kelamin = $request->jenis_kelamin;
        $pembelis->telepon = $request->telepon;        
        $pembelis->save();

        session()->flash('success', 'Data berhasil ditambahkan.');
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembelis = Pembeli::findorFail($id);
        return view('pembeli.show', compact('pembelis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembelis = Pembeli::findorFail($id);
        return view('pembeli.edit', compact('pembelis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_pembeli' => 'required|string|min:3|max:255',
                'jenis_kelamin' => 'required',
                'telepon' => 'required||string|min:10|max:15',
            ],
            [
                'nama_pembeli.required' => 'Nama Pembeli tidak boleh kosong',
                'nama_pembeli.min' => 'Minimal 3 karakter',
                'nama_pembeli.max' => 'Maksimal 255 karakter',
                'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',                          
                'telepon.min' => 'Minimal 10 karakter',
                'telepon.max' => 'Maximal 15 karakter',            
            ]
        );   

        $pembelis = Pembeli::findorFail($id);
        $pembelis->nama_pembeli = $request->nama_pembeli;
        $pembelis->jenis_kelamin = $request->jenis_kelamin;
        $pembelis->telepon = $request->telepon;

        $pembelis->save();

        session()->flash('success', 'Data berhasil diupdate.');
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembelis = Pembeli::findorFail($id);
        $pembelis->delete();

        session()->flash('success', 'Data berhasil dihapus.');
        return redirect()->route('pembeli.index');
    }
}
