<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeri;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Galeri::where([
            ['judul', '!=', Null],
            ['foto', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('id', 'desc')->paginate(10);
        return view('admin.galeri.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galeri.create');
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
        return view('admin.galeri.create',compact('data','caption'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Galeri::where('id',$id)->first();
        $caption = 'Ubah Data Galeri';
        return view('admin.galeri.create',compact('data','caption'));
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
}
