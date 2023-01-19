<?php

namespace App\Http\Controllers;

use App\Models\Wuip;
use Illuminate\Http\Request;

class WuipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.datapeta.wuip.index',[
            'title' => 'Data Wilayah Izin Usaha Pertambangan',
            'wuip' => Wuip::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.datapeta.wuip.create',[
            'title' => 'Tambah Data Wuip',
            'bencana' => Wuip::all()
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
            'nama_perusahaan' => 'required|max:255',
            'luas_sk' => 'required|max:255',
            'komoditas' => 'required|max:255'
        ]);

        Wuip::create($validatedData);
        return redirect('/admin/datapeta/wuip')->with('success', 'Tambah Data Wuip Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wuip  $wuip
     * @return \Illuminate\Http\Response
     */
    public function show(Wuip $wuip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wuip  $wuip
     * @return \Illuminate\Http\Response
     */
    public function edit(Wuip $wuip)
    {
        return view('admin.pages.datapeta.wuip.edit',[
            'title' => 'Edit Data Wuip',
            'wuip' => $wuip
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wuip  $wuip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wuip $wuip)
    {
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required|max:255',
            'luas_sk' => 'required|max:255',
            'komoditas' => 'required|max:255'
        ]);

      

        Wuip::where('id', $wuip->id)->update($validatedData);
        return redirect('/admin/datapeta/wuip')->with('success', 'Edit Data Wuip Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wuip  $wuip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wuip $wuip)
    {
        Wuip::destroy($wuip->id);
        return redirect('/admin/datapeta/wuip')->with('success', 'Hapus Data Wuip Berhasil');
    }
}
