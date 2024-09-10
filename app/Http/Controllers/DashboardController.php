<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemuda;
use App\Models\Wilayah;
use App\Models\Gereja;

class DashboardController extends Controller
{
    public function index()
    {


        // pemuda
        $pria = Pemuda::where('jenis_kelamin','Laki-Laki')->count();
        $wanita = Pemuda::where('jenis_kelamin','Wanita')->count();
        $pemuda = Pemuda::count();


        $wilayah = Wilayah::count();
        $gereja = Gereja::count();


        return view('admin.dashboard.index',compact('pemuda','pria','wanita','wilayah','gereja'));
    }


}
