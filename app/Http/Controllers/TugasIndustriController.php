<?php

namespace App\Http\Controllers;

use App\Models\TugasIndustri;
use Illuminate\Http\Request;

class TugasIndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tugasIndustri = TugasIndustri::all();
        // return $tugasIndustri;
        return view('halaman_tugasindustri', compact('tugasIndustri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tugasIndustri = new TugasIndustri;
        $tugasIndustri->nama_lengkap = "Wiliam";
        $tugasIndustri->jenis_kelamin = "Laki-laki";
        $tugasIndustri->tanggal_lahir = "2001-07-15";
        $tugasIndustri->tempat_lahir = "Bandung";
        $tugasIndustri->agama = "Krislam";
        $tugasIndustri->alamat = "Jl. Buah Batu No. 24, Bandung";
        $tugasIndustri->save();

        return $tugasIndustri;
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasIndustri $tugasIndustri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TugasIndustri $tugasIndustri)
    {
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TugasIndustri $tugasIndustri)
    {
        $tugasIndustri= TugasIndustri::find(11);
        $tugasIndustri->id = 11;
        $tugasIndustri->nama_lengkap = "Wiliam";
        $tugasIndustri->jenis_kelamin = "Laki-laki";
        $tugasIndustri->tanggal_lahir = "2008-11-24";
        $tugasIndustri->agama = "Islam";
        $tugasIndustri->tempat_lahir = "Bandung";
        $tugasIndustri->alamat = "Jl. Sukajadi No. 32, Bandung";
        $tugasIndustri->save();
        return $tugasIndustri;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TugasIndustri $tugasIndustri)
    {
        $tugasIndustri = TugasIndustri::find(11);
        $tugasIndustri->delete();
        return $tugasIndustri;
    }
}
