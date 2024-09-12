<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::latest()->get();
        return view('pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.create', compact('pengumuman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_pengumuman'=> 'required',
            'deskripsi_pengumuman'=> 'required',
            'foto'=> 'required|max:2080|mimes:png,jpg',
        ]);

        $pengumuman = new Pengumuman();
        $pengumuman->judul_pengumuman = $request->judul_pengumuman;
        $pengumuman->deskripsi_pengumuman = $request->deskripsi_pengumuman;

        if($request->hasFile('foto')){
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/pengumuman/', $name);
            $pengumuman->foto = $name;
        }

        $pengumuman->save();
        return redirect()->route('pengumuman.index')
        ->with('success','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::FindOrFail($id);
        return view('pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_pengumuman'=> 'required',
            'deskripsi_pengumuman'=> 'required',
        ]);

        $pengumuman = Pengumuman::FindOrFail($id);
        $pengumuman->judul_pengumuman = $request->judul_pengumuman;
        $pengumuman->deskripsi_pengumuman = $request->deskripsi_pengumuman;

        if($request->hasFile('foto')){
            $produk->deleteImage();
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img ->move('images/pengumuman/', $name);
            $pengumuman->foto = $name;
        }

        $pengumuman->save();
        return redirect()->route('pengumuman.index')
        ->with('success','data berhasil ditedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::FindOrFail($id);
        $pengumuman->delete();
        // $produk->kategori()->detach();
        return redirect()->route('pengumuman.index')
            ->with('success', 'data berhasil dihapus');
    }
}
