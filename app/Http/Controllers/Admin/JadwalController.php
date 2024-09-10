<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalIbadah as Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Jadwal::where([
            ['tempat_ibadah', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('tempat_ibadah', 'LIKE', '%' . $s . '%')
                        ->orWhere('petugas_ibadah', 'LIKE', '%' . $s . '%')
                        ->orWhere('pelayan_firman', 'LIKE', '%' . $s . '%')
                        ->orWhere('doa_syafaat', 'LIKE', '%' . $s . '%')
                        ->orWhere('doa_syukur', 'LIKE', '%' . $s . '%')
                        ->orWhere('status', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('id', 'desc')->paginate(10);
        return view('admin.jadwal.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'tempat_ibadah' => 'required',
                'pelayan_firman' => 'required',
                'doa_syafaat' => 'required',
                'doa_syukur' => 'required',
                'status' => 'required',
                'tanggal' => 'required',
            ],
            [
                'tempat_ibadah.required' => 'Tidak boleh kosong',
                'pelayan_firman.required' => 'Tidak boleh kosong',
                'doa_syafaat.required' => 'Tidak boleh kosong',
                'doa_syukur.required' => 'Tidak boleh kosong',
                'status.required' => 'Tidak boleh kosong',
                'tanggal.required' => 'Tidak boleh kosong',
            ]

        );


        $data = new Jadwal();

        $data->tempat_ibadah   = $request->tempat_ibadah;
        $data->pelayan_firman   = $request->pelayan_firman;
        $data->doa_syafaat   = $request->doa_syafaat;
        $data->doa_syukur   = $request->doa_syukur;
        $data->status   = $request->status;
        $data->tanggal   = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->save();

        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('admin.jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Jadwal::where('id', $id)->first();
        $caption = 'Detail Data Jadwal Jemaat';
        return view('admin.jadwal.create', compact('data', 'caption'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Jadwal::where('id', $id)->first();
        $caption = 'Ubah Data Jadwal Jemaat';
        return view('admin.jadwal.create', compact('data', 'caption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(
            $request,
            [
                'tempat_ibadah' => 'required',
                'pelayan_firman' => 'required',
                'doa_syafaat' => 'required',
                'doa_syukur' => 'required',
                'status' => 'required',
                'tanggal' => 'required',
            ],
            [
                'tempat_ibadah.required' => 'Tidak boleh kosong',
                'pelayan_firman.required' => 'Tidak boleh kosong',
                'doa_syafaat.required' => 'Tidak boleh kosong',
                'doa_syukur.required' => 'Tidak boleh kosong',
                'status.required' => 'Tidak boleh kosong',
                'tanggal.required' => 'Tidak boleh kosong',
            ]

        );


        $data =  Jadwal::find($id);

        $data->tempat_ibadah   = $request->tempat_ibadah;
        $data->pelayan_firman   = $request->pelayan_firman;
        $data->doa_syafaat   = $request->doa_syafaat;
        $data->doa_syukur   = $request->doa_syukur;
        $data->status   = $request->status;
        $data->tanggal   = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->update();

        alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
        return redirect()->route('admin.jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Jadwal::find($id);
        $data->delete();
        return redirect()->back();
    }
}
