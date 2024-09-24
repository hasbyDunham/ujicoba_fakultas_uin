<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BeritaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('https://uinsgd.ac.id/wp-json/wp/v2/posts');
        $berita = $response->json(); // Mengambil data sebagai array
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $berita = Berita::all();
        return view('berita.create', compact('berita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_berita'=> 'required',
            'deskripsi'=> 'required',
            'foto'=> 'required|max:2080|mimes:png,jpg',
        ]);

        $berita = new Berita();
        $berita->judul_berita = $request->judul_berita;
        $berita->deskripsi = $request->deskripsi;

        if($request->hasFile('foto')){
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/berita/', $name);
            $berita->foto = $name;
        }

        $berita->save();
        return redirect()->route('berita.index')
        ->with('success','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::FindOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_berita'=> 'required',
            'deskripsi'=> 'required',
        ]);

        $berita = Berita::FindOrFail($id);
        $berita->judul_berita = $request->judul_berita;
        $berita->deskripsi = $request->deskripsi;

        if($request->hasFile('foto')){
            $berita->deleteImage();
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/berita/', $name);
            $berita->foto = $name;
        }

        $berita->save();
        return redirect()->route('berita.index')
        ->with('success','data berhasil ditedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::FindOrFail($id);
        $berita->delete();
        // $produk->kategori()->detach();
        return redirect()->route('berita.index')
            ->with('success', 'data berhasil dihapus');

    }
}
