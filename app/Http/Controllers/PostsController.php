<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
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
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|min:8|max:255',
                'content' => 'required|string|min:8|max:255',
                'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Title tidak boleh kosong',
                'title.min' => 'Minimal 8 karakter',
                'title.max' => 'Maksimal 255 karakter',
                'content.required' => 'Content tidak boleh kosong',
                'content.min' => 'Minimal 8 karakter',
                'content.max' => 'Maksimal 255 karakter',
                'cover.required' => 'Cover tidak boleh kosong',
                'cover.image' => 'File harus berupa gambar',
                'cover.mimes' => 'Format gambar harus jpeg, png, jpg, gif, svg',
                'cover.max' => 'Ukuran gambar maksimal 2MB',
            ]
            );

        $posts = new Post();
        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->cover = $request->cover;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $posts->cover = $name;
        }

        $posts->save();

        session()->flash('success', 'Data berhasil ditambahkan.');

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::findorFail($id);
        return view('post.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findorFail($id);
        return view('post.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posts = Post::findorFail($id);
        $posts->title = $request->title;
        $posts->content = $request->content;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/post', $name);
            $posts->cover = $name;
        }

        $posts->save();
        session()->flash('success', 'Data berhasil diupdate.');
        return redirect()->route('post.index');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts = Post::findorFail($id);

        // Hapus file gambar jika ada
        if ($posts->cover) {
            $filePath = public_path('images/post/' . $posts->cover);
            if (File_exists($filePath)) {
                File::delete($filePath);
            } 
        }
        $posts->delete();
        return redirect()->route('post.index')->with('success', 'Data berhasil dihapus.');
    }
}
