<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemuda;
use App\Models\Gereja;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

use App\Exports\PemudasExport;
use App\Models\Wilayah;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class PemudaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        $query = Pemuda::with('gereja')->where([
            ['nama_depan', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('nama_depan', 'LIKE', '%' . $s . '%')
                        ->orWhere('nama_tengah', 'LIKE', '%' . $s . '%')
                        ->orWhere('nama_belakang', 'LIKE', '%' . $s . '%')
                        ->orWhere('nomor_hp', 'LIKE', '%' . $s . '%')
                        ->orWhere('jenis_kelamin', 'LIKE', '%' . $s . '%')
                        ->orWhere('tempat_lahir', 'LIKE', '%' . $s . '%')
                        ->orWhere('tanggal_lahir', 'LIKE', '%' . $s . '%')
                        ->orWhere('nomor_hp', 'LIKE', '%' . $s . '%')
                        ->orWhere('usia', 'LIKE', '%' . $s . '%')
                        ->orWhere('alamat', 'LIKE', '%' . $s . '%')
                        ->orWhere('angkatan', 'LIKE', '%' . $s . '%')
                        ->orWhere('nik', 'LIKE', '%' . $s . '%');
                }
            }]
        ])->when($request->s, function ($query) use ($request) {
            $query->orWhereHas('gereja', function ($query) use ($request) {
                $query->where('nama_gereja', 'LIKE', '%' . $request->s . '%');
            });
        });

        if(Auth::user()->hasRole('gereja'))
        {
            $query->where('gereja_id', Auth::user()->gereja_id);
        }
        if(Auth::user()->hasRole('wilayah'))
        {
            $query->whereHas('gereja', function($query) {
                $query->whereHas('wilayah', function($subQuery) {
                    $subQuery->where('id', Auth::user()->wilayah_id);
                });
            });
        }




        $datas = $query->orderBy('id', 'desc')->paginate(10);

        return view('admin.pemuda.index', compact('datas'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->hasRole('gereja'))
        {
            $gereja = Gereja::where('id',Auth::user()->gereja_id)->get();
        }elseif(Auth::user()->hasRole('wilayah'))
        {
            $gereja = Gereja::where('wilayah_id',Auth::user()->wilayah_id)->get();
        }else{
            $gereja = Gereja::get();
        }
        return view('admin.pemuda.create',compact('gereja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_depan' => 'required',
            'jenis_kelamin' => 'required',
            'gereja_id' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'angkatan' => 'required',
            'nomor_hp' => 'required|unique:pemudas,nomor_hp',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nik' => 'required|unique:pemudas,nik',
            'usia' => 'max:25|min:16|integer',
        ],
        [
            'nama_depan.required' => 'Tidak boleh kosong',
            'jenis_kelamin.required' => 'Tidak boleh kosong',
            'gereja_id.required' => 'Tidak boleh kosong',
            'tempat_lahir.required' => 'Tidak boleh kosong',
            'tanggal_lahir.required' => 'Tidak boleh kosong',
            'nomor_hp.required' => 'Tidak boleh kosong',
            'nomor_hp.unique' => 'Sudah terdaftar',
            'foto.required' => 'Tidak boleh kosong',
            'angkatan.required' => 'Tidak boleh kosong',
            'angkatan.unique' => 'Sudah terdaftar',
            'usia.max' => 'Usia terlalu tua',
            'usia.min' => 'Usia terlalu mudah',
            'usia.integer' => 'Harus angka',

        ]
        );
        $data = new Pemuda();

        $data->nama_depan   = $request->nama_depan;
        $data->nama_tengah   = $request->nama_tengah;
        $data->nama_belakang   = $request->nama_belakang;
        $data->jenis_kelamin   = $request->jenis_kelamin;
        $data->gereja_id   = $request->gereja_id;
        $data->tempat_lahir   = $request->tempat_lahir;
        $data->tanggal_lahir   = $request->tanggal_lahir;
        $data->nomor_hp   = $request->nomor_hp;
        $data->usia   = $request->usia;
        $data->alamat   = $request->alamat;
        $data->angkatan   = $request->angkatan;
        $data->nik = $request->nik;


          // picture creation
    if (isset($request->foto)) {


        // crate file path
        $path = public_path('gambar/pemuda/' . $data->foto);

        // delete file if exist
        if (file_exists($path)) {
            File::delete($path);
        }

        // adding file name into database variable
        $timestamp = now()->timestamp;
        $data->foto = 'gambar/pemuda/'.$timestamp.'-pemuda';

        // move file into folder path with the file name
        $request->foto->move(public_path('gambar/pemuda'), $timestamp.'-pemuda');
    }
    $data->save();


    alert()->success('Berhasil', 'Tambah data berhasil')->autoclose(3000);
    return redirect()->route('admin.pemuda');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(Auth::user()->hasRole('gereja'))
        {
            $gereja = Gereja::where('id',Auth::user()->gereja_id)->get();
        }elseif(Auth::user()->hasRole('wilayah'))
        {
            $gereja = Gereja::where('wilayah_id',Auth::user()->wilayah_id)->get();
        }else{
            $gereja = Gereja::get();
        }
        $data = Pemuda::where('id',$id)->first();
        $caption = 'Detail Data Pemuda';
        return view('admin.pemuda.create',compact('gereja','data','caption'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(Auth::user()->hasRole('gereja'))
        {
            $gereja = Gereja::where('id',Auth::user()->gereja_id)->get();
        }elseif(Auth::user()->hasRole('wilayah'))
        {
            $gereja = Gereja::where('wilayah_id',Auth::user()->wilayah_id)->get();
        }else{
            $gereja = Gereja::get();
        }
        $data = Pemuda::where('id',$id)->first();
        $caption = 'Ubah Data Pemuda';
        return view('admin.pemuda.create',compact('gereja','data','caption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_depan' => 'required',
            'jenis_kelamin' => 'required',
            'gereja_id' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nomor_hp' => 'required',
            'angkatan' => 'required',
            'usia' => 'max:25|min:16|integer',
            // 'nik' => 'required|unique:pemudas,nik',

            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'nama_depan.required' => 'Tidak boleh kosong',
            'jenis_kelamin.required' => 'Tidak boleh kosong',
            'gereja_id.required' => 'Tidak boleh kosong',
            'tempat_lahir.required' => 'Tidak boleh kosong',
            'tanggal_lahir.required' => 'Tidak boleh kosong',
            'nomor_hp.required' => 'Tidak boleh kosong',
            'nomor_hp.unique' => 'Sudah terdaftar',
            'angkatan.unique' => 'Sudah terdaftar',
            'usia.max' => 'Usia terlalu tua',
            'usia.min' => 'Usia terlalu mudah',
            'usia.integer' => 'Harus angka',
            // 'foto.required' => 'Tidak boleh kosong',
        ]
        );
        $data = Pemuda::find($id);
        $data->nama_depan   = $request->nama_depan;
        $data->nama_tengah   = $request->nama_tengah;
        $data->nama_belakang   = $request->nama_belakang;
        $data->jenis_kelamin   = $request->jenis_kelamin;
        $data->gereja_id   = $request->gereja_id;
        $data->tempat_lahir   = $request->tempat_lahir;
        $data->tanggal_lahir   = $request->tanggal_lahir;
        $data->nomor_hp   = $request->nomor_hp;
        $data->usia   = $request->usia;
        $data->alamat   = $request->alamat;
        $data->angkatan   = $request->angkatan;

          // picture creation
    if (isset($request->foto)) {


        // crate file path
        $path = public_path('gambar/pemuda/' . $data->foto);

        // delete file if exist
        if (file_exists($path)) {
            File::delete($path);
        }

        // adding file name into database variable
        $timestamp = now()->timestamp;
        $data->foto = 'gambar/pemuda/'.$timestamp.'-pemuda';

        // move file into folder path with the file name
        $request->foto->move(public_path('gambar/pemuda'), $timestamp.'-pemuda');
    }
    $data->update();


    alert()->success('Berhasil', 'Ubah data berhasil')->autoclose(3000);
    return redirect()->route('admin.pemuda');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pemuda::find($id);
        if ($data->foto) {
            File::delete($data->foto);
        }
        $data->delete();
        return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $s = $request->s;
        $query = Pemuda::with('gereja')->whereHas('gereja')
            ->where(function ($query) use ($s) {
                $query->orWhere('nama_depan', 'LIKE', '%' . $s . '%')
                ->orWhere('nama_tengah', 'LIKE', '%' . $s . '%')
                ->orWhere('nama_belakang', 'LIKE', '%' . $s . '%')
                ->orWhere('nomor_hp', 'LIKE', '%' . $s . '%')
                ->orWhere('jenis_kelamin', 'LIKE', '%' . $s . '%')
                ->orWhere('tempat_lahir', 'LIKE', '%' . $s . '%')
                ->orWhere('tanggal_lahir', 'LIKE', '%' . $s . '%')
                ->orWhere('nomor_hp', 'LIKE', '%' . $s . '%')
                ->orWhere('usia', 'LIKE', '%' . $s . '%')
                ->orWhere('alamat', 'LIKE', '%' . $s . '%')
                ->orWhere('angkatan', 'LIKE', '%' . $s . '%');
            })
            ->orderBy('id', 'desc')->when($request->s, function ($query) use ($request) {
                $query->orWhereHas('gereja', function ($query) use ($request) {
                    $query->where('nama_gereja', 'LIKE', '%' . $request->s . '%');
                });
            });


        if(Auth::user()->hasRole('gereja'))
        {
            $query->where('gereja_id', Auth::user()->gereja_id);
        }
        if(Auth::user()->hasRole('wilayah'))
        {
            $query->whereHas('gereja', function($query) {
                $query->whereHas('wilayah', function($subQuery) {
                    $subQuery->where('id', Auth::user()->wilayah_id);
                });
            });
        }

        $all = $query->get();

        $datas = ['datas' => $all];
        $title = ['title' => 'Daftar Data Pemuda'];
        $doc = 'data-pemuda.pdf';
        $pdf = FacadePdf::loadView('admin.pemuda.pdf', $datas, $title);
        return $pdf->stream($doc);
        // return $pdf->download($doc);

        // $datas = Pemuda::get();
        // $title = 'Daftar Data Pemuda';
        // return view('admin.pemuda.pdf',compact('datas','title'));
    }

    public function excel(Request $request)
    {
        return Excel::download(new PemudasExport($request), 'data-pemuda.xlsx');
    }
}
