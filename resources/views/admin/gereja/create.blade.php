@extends('admin.layout.tamplate')
@section('title')
    Mahasiswa
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
                                <h4 class="header-title"> {{ $caption ?? 'Tambah Data Gereja' }} </h4>


                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('admin.gereja.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('admin.gereja.store') }}" method="post"
                                            enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="nama_gereja"> Nama Gereja <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="nama_gereja"
                                                            value="{{ old('nama_gereja') ?? ($data->nama_gereja ?? '') }}"
                                                            name="nama_gereja" placeholder="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                        @if ($errors->has('nama_gereja'))
                                                            <label class="text-danger"> {{ $errors->first('nama_gereja') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="wilayah"> Wilayah <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="wilayah_id" id="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                            <option value="" hidden> Pilih Wilayah</option>
                                                            @foreach ($wilayah as $w)
                                                                <option value="{{ $w->id }}"
                                                                    @if (old('wilayah_id') == $w->id || (isset($data) && $data->wilayah_id == $w->id)) {{ 'selected' }} @endif>
                                                                    {{ $w->nama_wilayah }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('wilayah_id'))
                                                            <label class="text-danger"> {{ $errors->first('wilayah_id') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="alamat"> Alamat </label>
                                                        <textarea id="alamat" @if (Request::segment(3) == 'detail') disabled @endif name="alamat" placeholder="Masukan alamat"
                                                            rows="5" class="form-control">{{ old('alamat') ?? ($data->alamat ?? '') }} </textarea>
                                                    </div>
                                                </div>
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
                                                            href="{{ route('admin.mahasiswa') }}">Kembali</a>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.gereja.ubah', $data->id) }}">Ubah <i
                                                                class="fas fa-edit"></i> </a>
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
