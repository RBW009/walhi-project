<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Lapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class WalhiController extends Controller
{
    // menampilkan halaman home
    public function Home()
    {
        return view('pages.home', [
            'title' => 'Home',
            'artikels' => Artikel::latest()->paginate(3)
        ]);
    }
    // menampilkan halaman PeduliLingkungan
    public function PLingkunganINA()
    {
        return view('pages.PLingkunganINA', [
            'title' => 'Pantau Lingkungan'
        ]);
    }
    public function PLingkunganEN()
    {
        return view('pages.PLingkunganEN', [
            'title' => 'Pantau Lingkungan'
        ]);
    }
    // menampilkan halaman dashboard
    public function Dashboard()
    {
        return view('pages.dashboard', [
            'title' => 'Dashboard'
        ]);
    }
    // menampilkan halaman artikel
    public function Artikel()
    {
        return view('pages.artikel', [
            'title' => 'Artikel',
            'artikels' => Artikel::latest()->paginate(6)
        ]);
    }
    public function DetailArtikel($id)
    {
        return view('pages.detailartikel', [
            'title' => 'Artikel',
            'artikel' => Artikel::find($id) 
        ]);
    }
    public function AllArtikel()
    {
        
        return view('pages.Allartikel', [
            'title' => 'Artikel',
            'artikels' => Artikel::all()
        ]);
    }
    // menampilkan halaman laporan
    public function Lapor()
    {
        return view('pages.lapor', [
            'title' => 'Lapor'
        ]);
    }
    public function store(Request $request){
        $validasi = $request->validate([
            'lokasi' => 'required',
            'peristiwa' => 'required',
            'organisasi' => 'required',
            'media' => 'required',
            'kontak' => 'required',
        ]);
        Lapor::create($validasi);
        return redirect('/lapor')->with('success', 'Laporan Telah Dikirim');
    }
    
    // menampilkan halaman faq
    public function Faq()
    {
        return view('pages.faq', [
            'title' => 'Faq'
        ]);
    }
}
