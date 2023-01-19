<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.artikel.index',[
            'title' => 'Artikel',
            'artikels' => Artikel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.artikel.create',[
            'title' => 'Tambah Data Artikel',
            'artikels' => Artikel::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'deskripsi' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('artikel_images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);
        Artikel::create($validatedData);
        return redirect('/admin/artikel')->with('success', 'Tambah Data Artikel Berhasil');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.pages.artikel.edit',[
            'title' => 'Edit Data Artikel',
            'artikel' => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'deskripsi' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if($request->file('image')){
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
            $validatedData['image'] = $request->file('image')->store('artikel_images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);
        Artikel::where('id', $artikel->id)->update($validatedData);
        return redirect('/admin/artikel')->with('success', 'Edit Data Artikel Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        if($artikel->image){
            Storage::delete($artikel->image);
        }
        Artikel::destroy($artikel->id);
        return redirect('/admin/artikel')->with('success', 'Hapus Artikel Berhasil');
    }
}
