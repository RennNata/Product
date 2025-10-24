<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Hobi;
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

    public function manyToMany()
    {
        $mahasiswas = Mahasiswa::with('hobis')->get();
        return view('relasi.many_to_many', compact('mahasiswas'));
    }

    public function eloquent()
    {
        // Ambil semua data mahasiswa lengkap dengan relasinya
        $mahasiswa = Mahasiswa::with('wali', 'dosen', 'hobis')->get();

        // Kirim data ke view
        return view('relasi.eloquent', compact('mahasiswa'));
    }
}