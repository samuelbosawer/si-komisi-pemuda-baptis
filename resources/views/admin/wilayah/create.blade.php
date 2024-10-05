@extends('admin.layout.tamplate')
@section('title')
    Wilayah
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
                                <h4 class="header-title"> {{ $caption ?? 'Tambah Data Wilayah' }} </h4>


                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('admin.wilayah.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('admin.wilayah.store') }}" method="post"
                                            enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="nama_wilayah"> Nama Wilayah <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="nama_wilayah"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('nama_wilayah') ?? ($data->nama_wilayah ?? '') }}"
                                                            name="nama_wilayah" placeholder="" class="form-control">
                                                        @if ($errors->has('nama_wilayah'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('nama_wilayah') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="kode_wilayah"> Kode Wilayah <span class="text-danger">
                                                            </span> </label>
                                                        <input type="text" id="kode_wilayah"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('kode_wilayah') ?? ($data->kode_wilayah ?? '') }}"
                                                            name="kode_wilayah" placeholder="" class="form-control">
                                                        @if ($errors->has('kode_wilayah'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('kode_wilayah') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="col-md-8">
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
                                                            href="{{ route('admin.wilayah') }}">Kembali</a>

                                            @if(Auth::user()->hasRole('wilayah') || Auth::user()->hasRole('admin') )

                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.wilayah.ubah', $data->id) }}">Ubah <i
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

                                        </div>

                                    </div>




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

@push('script-footer')
    <script src="/assets/js/pages/form-fileuploads.init.js"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#images').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-images').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

        });
    </script>
@endpush
