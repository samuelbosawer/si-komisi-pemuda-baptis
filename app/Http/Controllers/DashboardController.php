<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Jurusan;


class DashboardController extends Controller
{
    public function index()
    {

        $jurusan = Jurusan::get()->count();
        $mahasiswa = Mahasiswa::get()->count();

        // gender
        $pria = Mahasiswa::where('jenis_kelamin','pria')->count();
        $wanita = Mahasiswa::where('jenis_kelamin','wanita')->count();

        // jurusan
        $jurusanMahasiswa = Jurusan::with('mahasiswas')->get();

        return view('admin.dashboard.index',compact('jurusan','mahasiswa','pria','wanita','jurusanMahasiswa'));
    }


}
