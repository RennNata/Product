<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Kelas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $murids = Murid::all();

        return view('murid.index', compact('murids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas=Kelas::all();
        
        return view('murid.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|in:Laki-laki, Perempuan|max:10',
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'alamat' => 'required|string|max:500',
                'email' => 'required|string|email|max:255',            
            ],
            [
                'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
                'nama_lengkap.max' => 'Maksimal 255 karakter',
                'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
                'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
                'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
                'tempat_lahir.max' => 'Maksimal 255 karakter',
                'alamat.required' => 'Alamat tidak boleh kosong',
                'alamat.max' => 'Maksimal 500 karakter',
                
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Format email tidak valid',
                'email.max' => 'Maksimal 255 karakter',
            ]
            );

        $murids = new Murid();        
        $murids->nama_lengkap = $request->nama_lengkap;
        $murids->jenis_kelamin = $request->jenis_kelamin;
        $murids->tanggal_lahir = $request->tanggal_lahir;
        $murids->tempat_lahir = $request->tempat_lahir;
        $murids->agama = $request->agama;
        $murids->alamat = $request->alamat;
        $murids->email = $request->email;
        $murids->id_kelas = $request->id_kelas;
        
        $murids->save();

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $murids = Murid::findorFail($id);
        return view('murid.show', compact('murids'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $murids = Murid::findorFail($id);
        $kelas = Kelas::all();
        return view('murid.edit', compact('murids', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|in:Laki-laki, Perempuan|max:10',
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|in:Islam, Kristen, Katolik, Hindu, Budha, Konghucu|max:50',
                'alamat' => 'required|string|max:500',
                'email' => 'required|string|email|max:255',            
            ],
            [
                'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
                'nama_lengkap.max' => 'Maksimal 255 karakter',
                'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
                'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
                'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
                'tempat_lahir.max' => 'Maksimal 255 karakter',
                'agama.required' => 'Agama tidak boleh kosong',
                'alamat.required' => 'Alamat tidak boleh kosong',
                'alamat.max' => 'Maksimal 500 karakter',
                
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Format email tidak valid',
                'email.max' => 'Maksimal 255 karakter',
            ]
            );

        $murids = Murid::findorFail($id);        
        $murids->nama_lengkap = $request->nama_lengkap;
        $murids->jenis_kelamin = $request->jenis_kelamin;
        $murids->tanggal_lahir = $request->tanggal_lahir;
        $murids->tempat_lahir = $request->tempat_lahir;
        $murids->agama = $request->agama;
        $murids->alamat = $request->alamat;
        $murids->email = $request->email;
        $murids->id_kelas = $request->id_kelas;
        
        $murids->save();

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id  )
    {
        $murids = Murid::findorFail($id);

        $murids->delete();
        return redirect()->route('murid.index')->with('success', 'Data berhasil dihapus.');
    }
}
