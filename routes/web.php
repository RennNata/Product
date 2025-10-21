<?php

use App\Models\Post;
use App\Models\Siswa;
use App\Models\Books;
use App\Models\Biodata;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TugasIndustriController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelasiController;
use App\Models\Mahasiswa;
use App\Models\Wali;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'selamat datang di halaman About';
});

Route::get('/profile', function () {
    return 'selamat datang di halaman Profile';
});

Route::get('/biodata', function () {
    return '<h1>BIODATA</h1>'.
    'Nama Lengkap : M Jauf<br>'.
    'Tempat, Tanggal Lahir : Bandung, 24 November 2008<br>'.
    'Alamat : TCI<br>'.
    'Jenis Kelamin : Laki-laki<br>'.
    'Agama : Islam<br>'.
    'Telepon : 0895372871234<br>';
});    

Route::get('hitung/{bilangan1}/{bilangan2}', function ($bilangan1, $bilangan2) {
    $hasil = $bilangan1 + $bilangan2;
    return "Bilangan 1 : $bilangan1 <br>".
           "Bilangan 2 : $bilangan2 <br>".
           "Hasil Penjumlahan : $hasil";
});

// bangun datar

Route::get('persegi/{sisi}', function ($sisi) {
    $luas = $sisi * $sisi;
    return "Rumus luas Persegi: sisi x sisi<br>".
           "Sisi : $sisi <br>".
           "Luas Persegi : $luas";
});

Route::get('persegi_panjang/{panjang}/{lebar}', function ($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return "Rumus luas Persegi panjang: panjang x lebar<br>".
           "Panjang : $panjang <br>".
           "Lebar : $lebar <br>".
           "Luas Persegi Panjang : $luas";
});

Route::get('segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return "Rumus luas Segitiga: 0.5 x alas x tinggi<br>".
           "Alas : $alas <br>".
           "Tinggi : $tinggi <br>".
           "Luas Segitiga : $luas";
});

Route::get('lingkaran/{jari}', function ($jari) {
    $luas = 3.14 * $jari * $jari;
    return "Rumus luas Lingkaran: 3.14 x jari x jari<br>".
           "Jari-jari : $jari <br>".
           "Luas Lingkaran : $luas";
});



Route::get('assalaamcoffee/{nama}/{notelp}/{tglBeli}/{jenis}/{menu}/{jumlah}', function ($nama, $notelp, $tglBeli, $jenis, $menu, $jumlah) {

if ($jenis == "Makanan") {
    if ($menu == "Batagor") {
        $harga = 20000;
    } elseif ($menu == "Pentol") {
        $harga = 15000;
    } elseif ($menu == "Seblak") {
        $harga = 10000;
    } else {
        return "Menu tidak ada";
    }
} elseif ($jenis == "Minuman") {
    if ($menu == "Thai Tea") {
        $harga = 15000;
    } elseif ($menu == "Jus") {
        $harga = 10000;
    } elseif ($menu == "Kopi") {
        $harga = 5000;
    } else {
        return "Menu tidak ada";
    }
} else {
    return "Jenis tidak ada";
}

$total = $harga * $jumlah;

if ($total >= 50000) {
    $diskon = 0.1 * $total;
} else {
    $diskon = 0;
}

$bayar = $total - $diskon;
    return "<h1>--Assalaam Coffee--</h1>".
           "Nama Pembeli : $nama <br>".
           "No. Telepon : $notelp <br>".
           "Tanggal Beli : $tglBeli <br>".
           "Jenis Barang : $jenis <br>".
           "Menu : $menu <br>".
           "Harga : Rp $harga <br>".
           "Jumlah : $jumlah <br>".
           "Total Harga : Rp $total <br>".
           "Diskon (10%) : Rp $diskon <br>".
           "Total Bayar : Rp $bayar <br>";
});

// route view
Route::get('halaman1', function () {

    $siswa = ['jaup', 'fadil', 'guna'];
    $hobi = ['Nyanyi', 'Musik', 'Muncak'];

    return view('tampil1', ['siswa1' => $siswa[0]], ['hobi1' => $hobi[0]]);
});

Route::get('halaman2', function () {

    $siswa = ['jaup', 'fadil', 'guna'];
    $hobi = ['Nyanyi', 'Musik', 'Muncak'];

    $makanan = ['Cimol', 'Gehu', 'Kroket', 'Basmut', 'Sosis', 'Otak-otak', 'Permen', 'Martabak', 'Piscok', 'Batagor'];

    
    return view('tampil2', array_merge([
    'siswa2' => $siswa[1],
    'hobi2' => $hobi[1]
    ], compact('makanan')));

});

Route::get('halaman3', function () {

    $siswa = ['jaup', 'fadil', 'guna'];
    $hobi = ['Nyanyi', 'Musik', 'Muncak'];

    $minuman = ['Power F', 'Ale-ale', 'Phanter', 'Le Vontea', 'Montea', 'Pop Ice', 'Teh Sisri', 'Nutrisari', 'Le Minerale', 'Adem Sari'];

    
    return view('tampil2', array_merge([
    'siswa2' => $siswa[1],
    'hobi2' => $hobi[1]
    ], compact('minuman')));
});

Route::get('halaman4', function () {

    $siswa = ['jaup', 'fadil', 'guna'];
    $hobi = ['Nyanyi', 'Musik', 'Muncak'];

    return view('tampil4', compact('siswa'));
});

// Route::get('post', function () {
    
//     $post = Post::all();

    // MENAMPILKAN SEMUA DATA + MENGGUNAKAN VIEW
    // $post = Post::all();
    // return $post;
    // VIEW
    // return view('halaman_post', compact('post'));

    // MENAMPILKAN DATA TERTENTU
    // $post = Post::all();
    // return $post = Post::where('title', 'like', '%Tips cepat pintar%')->get();

    // MERUBAH DATA
    // $post = Post::find(1);
    // $post->title = "Tips cepat kaya";
    // $post->save();
    // return $post

    // MENGHAPUS DATA
    // $post = Post::find(1);
    // $post->delete();
    // return $post;

    // MENAMBAH DATA
    // $post = new Post;
    // $post->id = 3;
    // $post->title = "Jalan hidup sehat";
    // $post->content = "Lorem ipsum";
    // $post->save();
    // return $post;

    

// });

Route::get('siswa', function () {
    
    $siswa = Siswa::all();

    return view('halaman_siswa', compact('siswa'));

});

Route::get('books', function () {
    
    $books = \App\Models\Books::all();

    return view('halaman_books', compact('books'));

});

// Route::get('biodata', function () {    

//     // MENAMPILKAN SEMUA DATA + MENGGUNAKAN VIEW
//     $biodata = Biodata::all();
//     return view('halaman_biodata', compact('biodata'));
// });

// Route::get('biodata', [BiodatasController::class, 'tampil']);

// Route::get('post', [PostsController::class, 'tampil']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('tugas_industri', [App\Http\Controllers\TugasIndustriController::class, 'index'])->name('tugas_industri.index');

Route::get('/industri', [App\Http\Controllers\TugasIndustriController::class, 'index']);
Route::get('/industri/store', [App\Http\Controllers\TugasIndustriController::class, 'store']);
Route::get('/industri/update', [App\Http\Controllers\TugasIndustriController::class, 'update']);
Route::get('/industri/delete', [App\Http\Controllers\TugasIndustriController::class, 'destroy']);

Route::resource('post', PostsController::class);
Route::resource('biodata', BiodatasController::class);

Route::resource('pengguna', PenggunaController::class);

Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);

Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});

Route::get('one-to-many', [RelasiController::class, 'oneToMany']);
// Route::get('/mahasiswa-ke-dosen', function () {
//     $mahasiswa = Mahasiswa::with('dosen')->first();
//     return "{$mahasiswa->nama} memiliki dosen pembimbing bernama {$mahasiswa->dosen->nama}";
// // });

Route::get('/mahasiswa-ke-dosen', function () {
    $mhs = Mahasiswa::where('nim', 'M002')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});