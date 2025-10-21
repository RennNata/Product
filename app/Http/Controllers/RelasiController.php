<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class RelasiController extends Controller
{
    public function oneToOne()
    {
        $mhs = Mahasiswa::with('wali')->get();
        return view('relasi.one_to_one', compact('mhs'));
    }

    public function oneToMany()
    {
        $dosens = Dosen::with('mahasiswas')->get();
        return view('relasi.one_to_many', compact('dosens'));
    }
}
