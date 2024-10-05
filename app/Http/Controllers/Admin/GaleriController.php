<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use App\Exports\GaleriExport;
use App\Models\Gereja;
use Illuminate\Support\Facades\Auth;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Galeri::with('gereja')->where([
            ['judul', '!=', Null],
            ['foto', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ]);
        if(Auth::user()->hasRole('gereja'))
        {
            $query->Where('gereja_id',null)->orWhere('gereja_id', Auth::user()->gereja_id);
        }


        $datas = $query->orderBy('id', 'desc')->paginate(10);
        return view('admin.galeri.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gereja = Gereja::get();
        if(Auth::user()->hasRole('wilayah'))
        {
            $gereja = Gereja::where('wilayah_id',Auth::user()->wilayah_id)->get();
        }
        return view('admin.galeri.create',compact('gereja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'foto' => 'required',
        ],
        [
            'judul.required' => 'Tidak boleh kosong',
            'foto.required' => 'Tidak boleh kosong',
        ]
        );

        $data = new galeri();
        $data->judul = $request->judul;
        $data->keterangan = $request->keterangan;
        $data->gereja_id = $request->gereja_id;

        if (isset($request->foto)) {


            // crate file path
            $path = public_path('gambar/galeri/' . $data->foto);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $timestamp = now()->timestamp;
            $data->foto = 'gambar/galeri/'.$timestamp.'-galeri';

            // move file into folder path with the file name
            $request->foto->move(public_path('gambar/galeri'), $timestamp.'-galeri');
        }
        $data->save();


        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('admin.galeri');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Galeri::where('id',$id)->first();
        $caption = 'Detail Data Galeri';
        $gereja = Gereja::get();
        if(Auth::user()->hasRole('gereja'))
        {
            $data = Galeri::where('gereja_id',Auth::user()->gereja_id)->where('id',$id)->orWhere('id','')->first();
            if(empty($data))
            {
             return redirect()->route('admin.galeri');
            }
        }
        if(Auth::user()->hasRole('wilayah'))
        {
            $gereja = Gereja::where('wilayah_id',Auth::user()->wilayah_id)->get();
        }
        return view('admin.galeri.create',compact('data','caption','gereja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Galeri::where('id',$id)->first();
        $caption = 'Ubah Data Galeri';
        $gereja = Gereja::get();
        return view('admin.galeri.create',compact('data','caption','gereja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'judul' => 'required',
        ],
        [
            'judul.required' => 'Tidak boleh kosong',
        ]
        );

        $data = galeri::find($id);
        $data->judul = $request->judul;
        $data->keterangan = $request->keterangan;
        $data->gereja_id = $request->gereja_id;
        if (isset($request->foto)) {


            // crate file path
            $path = public_path('gambar/galeri/' . $data->foto);

            // delete file if exist
            if (file_exists($path)) {
                File::delete($path);
            }

            // adding file name into database variable
            $timestamp = now()->timestamp;
            $data->foto = 'gambar/galeri/'.$timestamp.'-galeri';

            // move file into folder path with the file name
            $request->foto->move(public_path('gambar/galeri'), $timestamp.'-galeri');
        }
        $data->update();


        alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
        return redirect()->route('admin.galeri');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Galeri::find($id);
        if ($data->foto) {
            File::delete($data->foto);
        }
        $data->delete();
        return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $search = $request->s;
        $all = Galeri::with('gereja')->where(function ($query) use ($search) {
                $query->Where('judul', 'LIKE', '%' . $search . '%')
                    ->orWhere('foto', 'LIKE', '%' . $search . '%')
                    ->orWhere('keterangan', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->get();

        $datas = ['datas' => $all];
        $title = ['title' => 'DATA GALERI'];
        $doc = 'data-galeri.pdf';
        $pdf = PDF::loadView('admin.galeri.pdf', $datas, $title);
        return $pdf->download($doc);

    }

    public function excel(Request $request)
    {
        return Excel::download(new  GaleriExport($request), 'data-galeri.xlsx');
    }
}
