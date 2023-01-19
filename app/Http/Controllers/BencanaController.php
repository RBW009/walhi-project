<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use Illuminate\Http\Request;

class BencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.datapeta.bencana.index',[
            'title' => 'Data Bencana',
            'bencana' => Bencana::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.datapeta.bencana.create',[
            'title' => 'Tambah Data Bencana',
            'bencana' => Bencana::all()
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
            'latitude' => ['required','max:255'],
            'longitude' => ['required', 'max:255'],
            'banjir' => ['required','max:255'],
            'gempa' => ['required', 'max:255'],
            'kebakaran' =>  ['required', 'max:255'],
            'puting_beliung' => ['required','max:255'],
            'longsor' => ['required','max:255']
        ]);

        Bencana::create($validatedData);
        return redirect('/admin/datapeta/bencana')->with('success', 'Tambah Data Bencana Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function show(Bencana $bencana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function edit(Bencana $bencana)
    {
        return view('admin.pages.datapeta.bencana.edit',[
            'title' => 'Edit Data Bencana',
            'bencana' => $bencana
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bencana $bencana)
    {
        $validatedData = $request->validate([
            'wilayah' => 'required|max:255',
            'bencana' => 'required|max:255',
        ]);

      

        Bencana::where('id', $bencana->id)->update($validatedData);
        return redirect('/admin/datapeta/bencana')->with('success', 'Edit Data Bencana Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bencana $bencana)
    {
        Bencana::destroy($bencana->id);
        return redirect('/admin/datapeta/bencana')->with('success', 'Hapus Data Bencana Berhasil');
    }
}
