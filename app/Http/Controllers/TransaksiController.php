<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();

        return view('transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs=Barang::all();
        $pembelis=Pembeli::all();
        return view('transaksi.create', compact('barangs', 'pembelis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'tanggal_transaksi' => 'required|date',
                'jumlah' => 'required',
                'total_harga' => 'required'
            ],
            [            
                'tanggal_transaksi.required' => 'Tanggal transaksinya kapan?',
                'jumlah.required' => 'Jumlah barangnya berapa?',
                'total_harga.required' => 'Total harganya berapa?'
            ]
            );

        $transaksis = new Transaksi();        
        $transaksis->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksis->jumlah = $request->jumlah;
        $transaksis->total_harga = $request->total_harga;
        $transaksis->id_barang = $request->id_barang;
        $transaksis->id_pembeli = $request->id_pembeli;
        
        $transaksis->save();

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksis = Transaksi::findorFail($id);
        $barangs = Barang::all();
        $pembelis = Pembeli::all();
        return view('transaksi.show', compact('transaksis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksis = Transaksi::findorFail($id);
        $barangs = Barang::all();
        $pembelis = Pembeli::all();
        return view('transaksi.edit', compact('transaksis', 'barangs', 'pembelis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'tanggal_transaksi' => 'required|date',
                'jumlah' => 'required',
                'total_harga' => 'required'
            ],
            [            
                'tanggal_transaksi.required' => 'Tanggal transaksinya kapan?',
                'jumlah.required' => 'Jumlah barangnya berapa?',
                'total_harga.required' => 'Total harganya berapa?'
            ]
            );


        $transaksis = Transaksi::findorFail($id);
        $transaksis->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksis->jumlah = $request->jumlah;
        $transaksis->total_harga = $request->total_harga;
        $transaksis->id_barang = $request->id_barang;
        $transaksis->id_pembeli = $request->id_pembeli;

        $transaksis->save();
        session()->flash('success', 'Data berhasil diupdate.');
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksis = Transaksi::findorFail($id);

        $transaksis->delete();
        return redirect()->route('transaksi.index')->with('success', 'Data berhasil dihapus.');
    }
}
