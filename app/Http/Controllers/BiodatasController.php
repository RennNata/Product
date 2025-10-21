<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Facades\File;

class BiodatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $biodatas = Biodata::all();

        return view('biodata.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
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
                'agama' => 'required|string|in:Islam, Kristen, Katolik, Hindu, Budha, Konghucu|max:50',
                'alamat' => 'required|string|max:500',
                'telepon' => 'required|numeric|digits_between:8,15',
                'email' => 'required|string|email|max:255',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
                'telepon.required' => 'Telepon tidak boleh kosong',
                'telepon.numeric' => 'Telepon harus berupa angka',
                'telepon.digits_between' => 'Telepon harus antara 8 sampai 15 digit',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Format email tidak valid',
                'email.max' => 'Maksimal 255 karakter',
                'foto.image' => 'File harus berupa gambar',
                'foto.mimes' => 'Format gambar harus jpeg, png, jpg, gif, svg',
                'foto.max' => 'Ukuran gambar maksimal 2MB',
            ]
            );

        $biodata = new Biodata();
        $biodata->nama_lengkap = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->agama = $request->agama;
        $biodata->alamat = $request->alamat;
        $biodata->telepon = $request->telepon;
        $biodata->email = $request->email;
        $biodata->foto = $request->foto;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/bio', $name);
            $biodata->foto = $name;
        }

        $biodata->save();

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodata = Biodata::findorFail($id);
        return view('biodata.show', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodata = Biodata::findorFail($id);
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $biodata = Biodata::findorFail($id);

        $request->validate(
            [
                'nama_lengkap' => 'required|string|max:255',
                'jenis_kelamin' => 'required|string|in:Laki-laki, Perempuan|max:10',
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|in:Islam, Kristen, Katolik, Hindu, Budha, Konghucu|max:50',
                'alamat' => 'required|string|max:500',
                'telepon' => 'required|numeric|digits_between:8,15',
                'email' => 'required|string|email|max:255',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
                'telepon.required' => 'Telepon tidak boleh kosong',
                'telepon.numeric' => 'Telepon harus berupa angka',
                'telepon.digits_between' => 'Telepon harus antara 8 sampai 15 digit',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Format email tidak valid',
                'email.max' => 'Maksimal 255 karakter',
                'foto.image' => 'File harus berupa gambar',
                'foto.mimes' => 'Format gambar harus jpeg, png, jpg, gif, svg',
                'foto.max' => 'Ukuran gambar maksimal 2MB',
            ]
            );

        $biodata->nama_lengkap = $request->nama_lengkap;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->tempat_lahir = $request->tempat_lahir;
        $biodata->agama = $request->agama;
        $biodata->alamat = $request->alamat;
        $biodata->telepon = $request->telepon;
        $biodata->email = $request->email;

        if ($request->hasFile('foto')) {
            if (File_exists($filePath)) {
                File::delete($filePath);
            }
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/bio', $name);
            $biodata->foto = $name;
        }

        $biodata->save();

        session()->flash('success', 'Data berhasil diupdate.');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata = Biodata::findorFail($id);

        if ($biodata->foto) {
            $filePath = public_path('images/bio/' . $biodata->foto);
            if (File_exists($filePath)) {
                File::delete($filePath);
            } 
        }

        $biodata->delete();
        return redirect()->route('biodata.index')->with('success', 'Data berhasil dihapus.');
    }
}
