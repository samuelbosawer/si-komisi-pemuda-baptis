<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AgendasExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgendaKegiatan as Agenda;

use App\Exports\PengumumanExport;
use App\Models\Gereja;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Agenda::with('gereja')->where([
            ['judul', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('judul', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        ->orWhere('tanggal_kegiatan', 'LIKE', '%' . $s . '%')
                        ->orWhere('status', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->orderBy('id', 'desc')->paginate(10);
        return view('admin.agenda.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gereja = Gereja::get();
        return view('admin.agenda.create',compact('gereja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'tanggal_kegiatan' => 'required',
                'status' => 'required',
                // 'gereja_id' => 'required',
            ],
            [
                'judul.required' => 'Tidak boleh kosong',
                'tanggal_kegiatan.required' => 'Tidak boleh kosong',
                'status.required' => 'Tidak boleh kosong',
                // 'gereja_id.required' => 'Tidak boleh kosong',
            ]

        );


        $data = new Agenda();

        $data->judul   = $request->judul;
        $data->tanggal_kegiatan   = $request->tanggal_kegiatan;
        $data->status   = $request->status;
        $data->keterangan = $request->keterangan;
        $data->gereja_id = $request->gereja_id ?? '';
        $data->save();

        alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
        return redirect()->route('admin.agenda');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Agenda::where('id', $id)->first();
        $gereja = Gereja::get();
        $caption = 'Detail Data Agenda';
        return view('admin.agenda.create', compact('data', 'caption','gereja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $caption = 'Ubah Data Agenda';
        $data = Agenda::where('id', $id)->first();
        $gereja = Gereja::get();
        return view('admin.agenda.create', compact('data', 'caption','gereja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'tanggal_kegiatan' => 'required',
                'status' => 'required',
                'gereja_id' => 'required',
            ],
            [
                'judul.required' => 'Tidak boleh kosong',
                'tanggal_kegiatan.required' => 'Tidak boleh kosong',
                'status.required' => 'Tidak boleh kosong',
                'gereja_id.required' => 'Tidak boleh kosong',
            ]

        );


        $data = Agenda::find($id);
        $data->judul   = $request->judul;
        $data->tanggal_kegiatan   = $request->tanggal_kegiatan;
        $data->status   = $request->status;
        $data->keterangan = $request->keterangan;
        $data->gereja_id = $request->gereja_id;
        $data->update();

        alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
        return redirect()->route('admin.agenda');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Agenda::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $search = $request->s;
        $all = Agenda::with('gereja')->where(function ($query) use ($search) {
                $query->Where('judul', 'LIKE', '%' . $search . '%')
                    ->orWhere('keterangan', 'LIKE', '%' . $search . '%')
                    ->orWhere('tanggal_kegiatan', 'LIKE', '%' . $search . '%')
                    ->orWhere('status', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->get();

        $datas = ['datas' => $all];
        $title = ['title' => 'DATA AGENDA KEGIATAN'];
        $doc = 'data-agenda.pdf';
        $pdf = PDF::loadView('admin.agenda.pdf', $datas, $title);
        return $pdf->download($doc);

    }

    public function excel(Request $request)
    {
        return Excel::download(new  AgendasExport($request), 'data-agenda.xlsx');
    }

}
