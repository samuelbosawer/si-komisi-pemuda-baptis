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
                                <h4 class="header-title"> {{ $caption ?? 'Tambah Data Agenda' }} </h4>


                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('admin.agenda.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('admin.agenda.store') }}" method="post"
                                            enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="judul"> Judul Agenda <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="judul"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('judul') ?? ($data->judul ?? '') }}"
                                                            name="judul" placeholder="" class="form-control">
                                                        @if ($errors->has('judul'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('judul') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="tanggal_kegiatan"> Tanggal Kegiatan <span class="text-danger">
                                                            * </span>  </label>
                                                        <input type="datetime-local" id="tanggal_kegiatan"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('tanggal_kegiatan') ?? ($data->tanggal_kegiatan ?? '') }}"
                                                            name="tanggal_kegiatan" placeholder="" class="form-control">
                                                        @if ($errors->has('tanggal_kegiatan'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('tanggal_kegiatan') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-4">
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

                                                <div class="col-md-8">
                                                    <div class="form-group mb-3">
                                                        <label for="keterangan"> Keterangan </label>
                                                        <textarea id="keterangan" @if (Request::segment(3) == 'detail') disabled @endif name="keterangan"
                                                            placeholder="Masukan keterangan" rows="5" class="form-control">{{ old('keterangan') ?? ($data->keterangan ?? '') }} </textarea>
                                                    </div>
                                                </div>


                                                <div class="col-8">
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

                                            </div>







                                            @if (Request::segment(3) == 'detail')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.agenda') }}">Kembali</a>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.agenda.ubah', $data->id) }}">Ubah <i
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
