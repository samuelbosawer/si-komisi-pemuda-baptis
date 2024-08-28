<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Str;


class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Jurusan::where([
            ['jurusan', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('jurusan', 'LIKE', '%' . $s . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
            ])->orderBy('id', 'desc')->paginate(10);
        return view('admin.jurusan.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jurusan' => 'required',
        ],
        [
            'jurusan.required' => 'Tidak boleh kosong',
        ]

    );


    $data = new Jurusan();

    $data->jurusan   = $request->jurusan;
    $data->keterangan = $request->keterangan;

    $data->save();


    alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
    return redirect()->route('admin.jurusan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Jurusan::where('id',$id)->first();
        $caption = 'Detail Data Jurusan';
        return view('admin.jurusan.create',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Jurusan::where('id',$id)->first();
        $caption = 'Ubah Data Jurusan';
        return view('admin.jurusan.create',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'jurusan' => 'required',
        ],
        [
            'jurusan.required' => 'Tidak boleh kosong',
        ]

    );


    $data = Jurusan::find($id);
    $data->jurusan   = $request->jurusan;
    $data->keterangan = $request->keterangan;
    $data->update();


    alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
    return redirect()->route('admin.jurusan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Jurusan::find($id);
        $data->delete();
        return redirect()->back();
    }
}
