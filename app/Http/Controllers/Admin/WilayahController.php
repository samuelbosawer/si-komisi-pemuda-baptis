<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wilayah;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use App\Exports\WilayahExport;
use Illuminate\Support\Facades\Auth;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Wilayah::where([
            ['nama_wilayah', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('nama_wilayah', 'LIKE', '%' . $s . '%')
                        ->orWhere('kode_wilayah', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%');
                }
            }]
        ]);

        if(Auth::user()->hasRole('wilayah'))
        {
            $query->where('id', Auth::user()->wilayah_id);
        }


        $datas = $query->orderBy('id', 'desc')->paginate(10);

        return view('admin.wilayah.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.wilayah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nama_wilayah' => 'required',
        ],
        [
            'nama_wilayah.required' => 'Tidak boleh kosong',
        ]
        );
        $data = new Wilayah();

        $data->nama_wilayah   = $request->nama_wilayah;
        $data->kode_wilayah   = $request->kode_wilayah;
        $data->keterangan   = $request->keterangan;

        $data->save();
        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('admin.wilayah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Wilayah::where('id',$id)->first();
        $caption = 'Detail Data Wilayah';
        if(Auth::user()->hasRole('wilayah'))
        {
            $data = Wilayah::where('id',Auth::user()->wilayah_id)->first();
        }
        return view('admin.wilayah.create',compact('data','caption'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Wilayah::where('id',$id)->first();
        $caption = 'Ubah Data Wilayah';
        if(Auth::user()->hasRole('wilayah'))
        {
            $data = Wilayah::where('id',Auth::user()->wilayah_id)->first();
        }
        return view('admin.wilayah.create',compact('data','caption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_wilayah' => 'required',
        ],
        [
            'nama_wilayah.required' => 'Tidak boleh kosong',
        ]
        );
        $data = Wilayah::find($id);

        $data->nama_wilayah   = $request->nama_wilayah;
        $data->kode_wilayah   = $request->kode_wilayah;
        $data->keterangan   = $request->keterangan;

        $data->update();
        alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
        return redirect()->route('admin.wilayah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Wilayah::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $search = $request->s;
        $all = Wilayah::where(function ($query) use ($search) {
                $query->Where('nama_wilayah', 'LIKE', '%' . $search . '%')
                    ->orWhere('kode_wilayah', 'LIKE', '%' . $search . '%')
                    ->orWhere('keterangan', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->get();

        $datas = ['datas' => $all];
        $title = ['title' => 'DATA WILAYAH'];
        $doc = 'data-wilayah.pdf';
        $pdf = PDF::loadView('admin.wilayah.pdf', $datas, $title);
        return $pdf->download($doc);

        // $datas = Pemuda::get();
        // $title = 'DATA PEMUDA';
        // return view('admin.pemuda.pdf',compact('datas','title'));
    }

    public function excel(Request $request)
    {
        return Excel::download(new  WilayahExport($request), 'data-wilayah.xlsx');
    }
}
