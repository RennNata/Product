<?php

namespace App\Http\Controllers;

use App\Models\Telepon;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $telepons = Telepon::all();

        return view('telepon.index', compact('telepons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penggunas=Pengguna::all();
        return view('telepon.create', compact('penggunas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nomor_telepon' => 'required|unique:telepons,id',
                
            ],
            [            
                'nomor_telepon.required' => 'Nomor Telepon tidak boleh kosong',
                'nomor_telepon.unique' => 'Nomor Telepon sudah ada',
                
            ]
            );

        $telepons = new Telepon();        
        $telepons->nomor_telepon = $request->nomor_telepon;
        $telepons->id_pengguna = $request->id_pengguna;
        
        $telepons->save();

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('telepon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telepons = Telepon::findorFail($id);
        return view('telepon.show', compact('telepons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $telepons = Telepon::findorFail($id);
        $penggunas = Pengguna::all();
        return view('telepon.edit', compact('telepons', 'penggunas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nomor_telepon' => 'required|string|max:15',
                
            ],
            [            
                'nomor_telepon.required' => 'Nomor Telepon tidak boleh kosong',
                
            ]
            );

        $telepons = Telepon::findorFail($id);
        $telepons->nomor_telepon = $request->nomor_telepon;
        $telepons->id_pengguna = $request->id_pengguna;
        

        $telepons->save();
        session()->flash('success', 'Data berhasil diupdate.');
        return redirect()->route('telepon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telepons = Telepon::findorFail($id);

        $telepons->delete();
        return redirect()->route('telepon.index')->with('success', 'Data berhasil dihapus.');
    }
}
