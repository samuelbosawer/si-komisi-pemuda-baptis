<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gereja;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Exports\GerejaExport;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class GerejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Gereja::where([
            ['nama_gereja', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('nama_gereja', 'LIKE', '%' . $s . '%')
                        ->orWhere('alamat', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
            ])->orderBy('id', 'desc')->paginate(10);
        return view('admin.gereja.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wilayah = Wilayah::get();
        return view('admin.gereja.create',compact('wilayah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_gereja' => 'required',
            'wilayah_id' => 'required',
        ],
        [
            'nama_gereja.required' => 'Tidak boleh kosong',
            'wilayah_id.required' => 'Tidak boleh kosong',
        ]

    );


    $data = new Gereja();

    $data->nama_gereja   = $request->nama_gereja;
    $data->wilayah_id = $request->wilayah_id;
    $data->alamat = $request->alamat;
    $data->keterangan = $request->keterangan;

    $data->save();


    alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
    return redirect()->route('admin.gereja');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $wilayah = Wilayah::get();
        $data = Gereja::where('id',$id)->first();
        $caption = 'Detail Data Gereja';
        return view('admin.gereja.create',compact('wilayah','data','caption'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wilayah = Wilayah::get();
        $data = Gereja::where('id',$id)->first();
        $caption = 'Ubah Data Gereja';
        return view('admin.gereja.create',compact('wilayah','data','caption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_gereja' => 'required',
            'wilayah_id' => 'required',
        ],
        [
            'nama_gereja.required' => 'Tidak boleh kosong',
            'wilayah_id.required' => 'Tidak boleh kosong',
        ]

    );


    $data = Gereja::find($id);

    $data->nama_gereja   = $request->nama_gereja;
    $data->wilayah_id = $request->wilayah_id;
    $data->alamat = $request->alamat;
    $data->keterangan = $request->keterangan;

    $data->update();


    alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
    return redirect()->route('admin.gereja');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Gereja::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function pdf(Request $request)
    {
        $search = $request->s;
        $all = Gereja::where(function ($query) use ($search) {
                $query->Where('nama_gereja', 'LIKE', '%' . $search . '%')
                    ->orWhere('alamat', 'LIKE', '%' . $search . '%')
                    ->orWhere('keterangan', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->get();

        $datas = ['datas' => $all];
        $title = ['title' => 'DATA GEREJA'];
        $doc = 'data-gereja.pdf';
        $pdf = PDF::loadView('admin.gereja.pdf', $datas, $title);
        return $pdf->download($doc);

    }

    public function excel(Request $request)
    {
        return Excel::download(new  GerejaExport($request), 'data-gereja.xlsx');
    }
}
