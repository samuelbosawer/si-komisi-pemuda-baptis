<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemuda;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class PemudaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Pemuda::with('gereja')->where([
            ['nama_depan', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('nama_depan', 'LIKE', '%' . $s . '%')
                        ->orWhere('nama_tengah', 'LIKE', '%' . $s . '%')
                        ->orWhere('nama_belakang', 'LIKE', '%' . $s . '%')
                        ->orWhere('nomor_hp', 'LIKE', '%' . $s . '%')
                        // ->orWhereHas('country',function($country) use ($request) {
                        //     $country->where('name','LIKE',"%$request->s%");
                        // });
                        ->get();
                }
            }]
        ])->orderBy('id', 'desc')->paginate(10);
        return view('admin.pemuda.index',compact('datas'))->with('i',(request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
