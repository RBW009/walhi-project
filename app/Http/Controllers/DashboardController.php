<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Lapor;
use App\Models\Bencana;
use App\Models\Psn;
use App\Models\Wuip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $bencana = Bencana::all()->count();
        $psn = Psn::all()->count();
        $wuip = Wuip::all()->count();
        $datapeta = $bencana + $psn + $wuip;
        $artikel = Artikel::all()->count();
        $Lapor = Lapor::all()->count();
        return view('admin.pages.dashboard.dashboard_admin', [
            'title' => 'Dashboard',
            'datapeta' => $datapeta,
            'artikel' => $artikel,
            'lapor' => $Lapor,
        ]);
    }
}
