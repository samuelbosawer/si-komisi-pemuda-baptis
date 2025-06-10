<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\AgendaKegiatan as Agenda;
use App\Models\Galeri;
use App\Models\Gereja;
use App\Models\JadwalIbadah;
use App\Models\Pemuda;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $pengumuman = Pengumuman::orderBy('mulai', 'desc')->paginate(5);
        $agenda = Agenda::where('status','Aktif')->orderBy('tanggal_kegiatan', 'desc')->paginate(5);
        $galeri = Galeri::orderBy('id', 'desc')->paginate(5);


        $wilayah = Wilayah::get()->count();
        $gereja = Gereja::get()->count();
        $pemuda = Pemuda::get()->count();

        return view('home.pages.index',compact('pengumuman','agenda','galeri','wilayah','gereja','pemuda'));
    }

    public function tentang()
    {
        $wilayah = Wilayah::get()->count();
        $gereja = Gereja::get()->count();
        $pemuda = Pemuda::get()->count();
       return view('home.pages.tentang',compact('wilayah','gereja','pemuda'));
    }

    public function pengumuman()
    {

        $pengumuman = Pengumuman::orderBy('mulai', 'desc')->get();
       return view('home.pages.pengumuman',compact('pengumuman'));
    }

    public function agenda()
    {
        $agenda = Agenda::where('status','Aktif')->orderBy('tanggal_kegiatan', 'desc')->paginate(5);
        return view('home.pages.agenda', compact('agenda'));
    }

    public function galeri()
    {

        $galeri = Galeri::orderBy('id', 'desc')->paginate(5);
        return view('home.pages.galeri',compact('galeri'));
    }

    public function jadwal(Request $request)
    {
        $query = JadwalIbadah::with('gereja')->where([
            ['tempat_ibadah', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('tempat_ibadah', 'LIKE', '%' . $s . '%')
                        ->orWhere('pelayan_firman', 'LIKE', '%' . $s . '%')
                        ->orWhere('doa_syafaat', 'LIKE', '%' . $s . '%')
                        ->orWhere('doa_syukur', 'LIKE', '%' . $s . '%')
                        ->orWhere('status', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        ->orWhere('tanggal', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ]);

        $datas = $query->orderBy('id', 'desc')->paginate(10);
        return view('home.pages.jadwal',compact('datas'));
    }
}
