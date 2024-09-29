<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\AgendaKegiatan as Agenda;
use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $pengumuman = Pengumuman::orderBy('mulai', 'desc')->paginate(5);
        $agenda = Agenda::where('status','Aktif')->orderBy('tanggal_kegiatan', 'desc')->paginate(5);
        $galeri = Galeri::orderBy('id', 'desc')->paginate(5);
        return view('home.index',compact('pengumuman','agenda','galeri'));
    }
}
