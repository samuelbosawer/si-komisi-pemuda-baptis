@extends('admin.layout.tamplate')
@section('title')
    Jadwal
@endsection
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                @include('admin.layout.breadcump')

                <div class="row">
                    <div class="col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title"> {{ $caption ?? 'Tambah Data Jadwal' }} </h4>


                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('admin.jadwal.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('admin.jadwal.store') }}" method="post"
                                            enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="gereja_id"> Gereja <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="gereja_id" id="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                            <option value="" hidden> Pilih Gereja </option>
                                                            <option value="" > Semua Gereja </option>
                                                            @foreach ($gereja as $g)
                                                                @if ($g->id == old('gereja_id'))
                                                                    <option selected value="{{ $g->id }}">
                                                                        {{ $g->nama_gereja }}</option>
                                                                @elseif (isset($data) && $g->id == $data->gereja_id)
                                                                    <option selected value="{{ $g->id }}">
                                                                        {{ $g->nama_gereja }}</option>
                                                                @else
                                                                    <option value="{{ $g->id }}">
                                                                        {{ $g->nama_gereja }}</option>
                                                                @endif
                                                            @endforeach


                                                        </select>
                                                        @if ($errors->has('gereja_id'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('gereja_id') }} </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="tempat_ibadah"> Tempat Ibadah <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="tempat_ibadah"
                                                            value="{{ old('tempat_ibadah') ?? ($data->tempat_ibadah ?? '') }}"
                                                            name="tempat_ibadah" placeholder="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                        @if ($errors->has('tempat_ibadah'))
                                                            <label class="text-danger"> {{ $errors->first('tempat_ibadah') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="pelayan_firman"> Pelayan Firman <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="pelayan_firman"
                                                            value="{{ old('pelayan_firman') ?? ($data->pelayan_firman ?? '') }}"
                                                            name="pelayan_firman" placeholder="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                        @if ($errors->has('pelayan_firman'))
                                                            <label class="text-danger"> {{ $errors->first('pelayan_firman') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="doa_syafaat"> Doa Syafaat <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="doa_syafaat"
                                                            value="{{ old('doa_syafaat') ?? ($data->doa_syafaat ?? '') }}"
                                                            name="doa_syafaat" placeholder="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                        @if ($errors->has('doa_syafaat'))
                                                            <label class="text-danger"> {{ $errors->first('doa_syafaat') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="doa_syukur"> Doa Syukur <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="doa_syukur"
                                                            value="{{ old('doa_syukur') ?? ($data->doa_syukur ?? '') }}"
                                                            name="doa_syukur" placeholder="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                        @if ($errors->has('doa_syukur'))
                                                            <label class="text-danger"> {{ $errors->first('doa_syukur') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="status"> Status <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="status" id="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                            <option value="" hidden> Pilih Status</option>
                                                            <option @if (old('status') == 'Aktif' || (isset($data) && $data->status == 'Aktif')) {{ 'selected' }} @endif value="Aktif"> Aktif</option>
                                                            <option @if (old('status') == 'Tidak Aktif' || (isset($data) && $data->status == 'Tidak Aktif')) {{ 'selected' }} @endif value="Tidak Aktif"> Tidak Aktif</option>
                                                        </select>
                                                        @if ($errors->has('status'))
                                                            <label class="text-danger"> {{ $errors->first('status') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="tanggal"> Tanggal <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="date" id="tanggal"
                                                            value="{{ old('tanggal') ?? ($data->tanggal ?? '') }}"
                                                            name="tanggal" placeholder="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                        @if ($errors->has('tanggal'))
                                                            <label class="text-danger"> {{ $errors->first('tanggal') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>



                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="keterangan"> Keterangan </label>
                                                        <textarea id="keterangan" @if (Request::segment(3) == 'detail') disabled @endif name="keterangan"
                                                            placeholder="Masukan keterangan" rows="5" class="form-control">{{ old('keterangan') ?? ($data->keterangan ?? '') }} </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            @if (Request::segment(3) == 'detail')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.jadwal') }}">Kembali</a>

                                                            @if(Auth::user()->hasRole('wilayah') || Auth::user()->hasRole('admin') )
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.jadwal.ubah', $data->id) }}">Ubah <i
                                                                class="fas fa-edit"></i> </a>
                                                            @endif
                                                    </div>
                                                </div>
                                            @else
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-primary">Simpan <i
                                                                data-feather="save"></i></button>
                                                    </div>
                                                </div>
                                            @endif



                                        </div> <!-- end card-box-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->
                                </form>




                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
