<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

use App\Exports\PengumumanExport;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Pengumuman::where([
            ['judul', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%');
                }
            }]
        ])->orderBy('id', 'desc')->paginate(10);
        return view('admin.pengumuman.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'judul' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
        ],
        [
            'judul.required' => 'Tidak boleh kosong',
            'mulai.required' => 'Tidak boleh kosong',
            'selesai.required' => 'Tidak boleh kosong',
        ]
        );
        $data = new Pengumuman();

        $data->judul   = $request->judul;
        $data->mulai   = $request->mulai;
        $data->selesai   = $request->selesai;
        $data->keterangan   = $request->keterangan;

        $data->save();


    alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
    return redirect()->route('admin.pengumuman');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Pengumuman::where('id',$id)->first();
        $caption = 'Detail Data Pengumuman';
        return view('admin.pengumuman.create',compact('data','caption'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Pengumuman::where('id',$id)->first();
        $caption = 'Ubah Data Pengumuman';
        return view('admin.pengumuman.create',compact('data','caption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
        ],
        [
            'judul.required' => 'Tidak boleh kosong',
            'mulai.required' => 'Tidak boleh kosong',
            'selesai.required' => 'Tidak boleh kosong',
        ]
        );

        $data = Pengumuman::find($id);
        $data->judul   = $request->judul;
        $data->mulai   = $request->mulai;
        $data->selesai   = $request->selesai;
        $data->keterangan   = $request->keterangan;

        $data->update();


    alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
    return redirect()->route('admin.pengumuman');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pengumuman::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $search = $request->s;
        $all = Pengumuman::where(function ($query) use ($search) {
                $query->Where('judul', 'LIKE', '%' . $search . '%')
                    ->orWhere('keterangan', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->get();

        $datas = ['datas' => $all];
        $title = ['title' => 'DATA PENGUMUMAN'];
        $doc = 'data-gereja.pdf';
        $pdf = PDF::loadView('admin.pengumuman.pdf', $datas, $title);
        return $pdf->download($doc);

    }

    public function excel(Request $request)
    {
        return Excel::download(new  PengumumanExport($request), 'data-pengumuman.xlsx');
    }
}
