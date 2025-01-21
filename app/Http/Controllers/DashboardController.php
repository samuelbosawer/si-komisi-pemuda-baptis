<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemuda;
use App\Models\Wilayah;
use App\Models\Gereja;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {


        // pemuda

        $pria = Pemuda::where('jenis_kelamin','Laki-Laki')->count();
        $wanita = Pemuda::where('jenis_kelamin','Wanita')->count();
        $pemuda = Pemuda::count();


        $wilayah = Wilayah::count();
        $wilayahs = Wilayah::get();
        $gereja = Gereja::count();
        $gerejas = Gereja::get();

        if(Auth::user()->hasRole('gereja'))
        {
            $pria = Pemuda::where('gereja_id', Auth::user()->gereja_id)->where('jenis_kelamin','Laki-Laki')->count();
            $wanita = Pemuda::where('gereja_id', Auth::user()->gereja_id)->where('jenis_kelamin','Wanita')->count();
            $pemuda = Pemuda::where('gereja_id', Auth::user()->gereja_id)->count();
        }

        if(Auth::user()->hasRole('wilayah'))
        {
            $gereja = Wilayah::Where('id',Auth::user()->wilayah_id)->first();
            $gerejas = Wilayah::with('gereja')->where('id',Auth::user()->wilayah_id)->get();
            $pemuda = Pemuda::whereHas('gereja', function($query) {
                $query->whereHas('wilayah', function($subQuery) {
                    $subQuery->where('id', Auth::user()->wilayah_id);
                });
            })->count();

            $pria = Pemuda::whereHas('gereja', function($query) {
                $query->whereHas('wilayah', function($subQuery) {
                    $subQuery->where('id', Auth::user()->wilayah_id);
                });
            })->where('jenis_kelamin','Laki-Laki')->count();
            $wanita = Pemuda::whereHas('gereja', function($query) {
                $query->whereHas('wilayah', function($subQuery) {
                    $subQuery->where('id', Auth::user()->wilayah_id);
                });
            })->where('jenis_kelamin','Wanita')->count();

        }


        return view('admin.dashboard.index',compact('pemuda','pria','wanita','wilayah','gereja','wilayahs','gerejas'));
    }


}
