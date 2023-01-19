<?php

namespace App\Http\Controllers;

use App\Models\Psn;
use Illuminate\Http\Request;

class PsnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.datapeta.psn.index',[
            'title' => 'Data Proyek Strategis Nasional',
            'psn' => Psn::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.datapeta.psn.create',[
            'title' => 'Tambah Data Psn',
            'bencana' => Psn::all()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Psn  $psn
     * @return \Illuminate\Http\Response
     */
    public function show(Psn $psn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Psn  $psn
     * @return \Illuminate\Http\Response
     */
    public function edit(Psn $psn)
    {
        return view('admin.pages.datapeta.psn.edit',[
            'title' => 'Edit Data Psn',
            'psn' => $$psn
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Psn  $psn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psn $psn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Psn  $psn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psn $psn)
    {
        //
    }
}
