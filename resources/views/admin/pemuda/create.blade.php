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
                                <h4 class="header-title"> {{ $caption ?? 'Tambah Data Pemuda' }} </h4>


                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('admin.pemuda.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('admin.pemuda.store') }}" method="post"
                                            enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="nama_depan"> Nama Depan <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="nama_depan"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('nama_depan') ?? ($data->nama_depan ?? '') }}"
                                                            name="nama_depan" placeholder="" class="form-control">
                                                        @if ($errors->has('nama_depan'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('nama_depan') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="nama_tengah"> Nama Tengah <span class="text-danger">
                                                            </span> </label>
                                                        <input type="text" id="nama_tengah"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('nama_tengah') ?? ($data->nama_tengah ?? '') }}"
                                                            name="nama_tengah" placeholder="" class="form-control">
                                                        @if ($errors->has('nama_tengah'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('nama_tengah') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="nama_belakang"> Nama Belakang <span class="text-danger">
                                                            </span> </label>
                                                        <input type="text" id="nama_belakang"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('nama_belakang') ?? ($data->nama_belakang ?? '') }}"
                                                            name="nama_belakang" placeholder="" class="form-control">
                                                        @if ($errors->has('nama_belakang'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('nama_belakang') }} </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group mb-3">
                                                        <label for="jenis_kelamin"> Jenis Kelamin <span
                                                                class="text-danger">*</span> </label>
                                                        <select name="jenis_kelamin" id="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                            <option value="" hidden> Pilih Jenis Kelamin </option>
                                                            <option value="Laki-Laki"
                                                                @if ((old('jenis_kelamin') ?? (isset($data) ? $data->jenis_kelamin : '')) == 'Laki-Laki') selected @endif>
                                                                Laki-Laki
                                                            </option>
                                                            <option value="Wanita"
                                                                @if ((old('jenis_kelamin') ?? (isset($data) ? $data->jenis_kelamin : '')) == 'Wanita') selected @endif>Wanita
                                                            </option>
                                                        </select>
                                                        @if ($errors->has('jenis_kelamin'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('jenis_kelamin') }} </label>
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


                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="tempat_lahir"> Tempat Lahir <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="tempat_lahir"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('tempat_lahir') ?? ($data->tempat_lahir ?? '') }}"
                                                            name="tempat_lahir" placeholder="" class="form-control">
                                                        @if ($errors->has('tempat_lahir'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('tempat_lahir') }} </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="tanggal_lahir"> Tanggal Lahir <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="date" id="tanggal_lahir"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('tanggal_lahir') ?? ($data->tanggal_lahir ?? '') }}"
                                                            name="tanggal_lahir" placeholder="" class="form-control">
                                                        @if ($errors->has('tanggal_lahir'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('tanggal_lahir') }} </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="nomor_hp"> Nomor Hp <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="number" id="nomor_hp"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('nomor_hp') ?? ($data->nomor_hp ?? '') }}"
                                                            name="nomor_hp" placeholder="" class="form-control">
                                                        @if ($errors->has('nomor_hp'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('nomor_hp') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="usia"> Usia <span class="text-danger"></span>
                                                        </label>
                                                        <input type="text" id="usia"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('usia') ?? ($data->usia ?? '') }}"
                                                            name="usia" placeholder="" class="form-control">
                                                        @if ($errors->has('usia'))
                                                            <label class="text-danger"> {{ $errors->first('usia') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="form-group mb-3">
                                                        <label for="alamat"> Alamat </label>
                                                        <textarea id="alamat" @if (Request::segment(3) == 'detail') disabled @endif name="alamat"
                                                            placeholder="Masukan alamat" rows="5" class="form-control">{{ old('alamat') ?? ($data->alamat ?? '') }} </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="foto"> Foto <span class="text-danger">*</span>
                                                        </label>
                                                        <br>
                                                        @if (!isset($data->foto))
                                                            <div class="mb-2">
                                                                <img src="{{ asset('assets/images/00.jpg') }}"
                                                                    alt="Profile picture not found"
                                                                    class="img img-thumbnail" width="200"
                                                                    id="preview-images">
                                                            </div>
                                                        @else
                                                            <div class="mb-2">
                                                                <img src="{{ asset($data->foto ?? 'assets/images/00.jpg') }}"
                                                                    alt="Profile picture not found"
                                                                    class="img img-thumbnail" width="200"
                                                                    id="preview-images">
                                                            </div>
                                                        @endif


                                                        <div class="custom-file ">
                                                            <input type="file"
                                                                @if (Request::segment(3) == 'detail') disabled @endif
                                                                name="foto" class="custom-file-input" id="images"
                                                                value="{{ $data->foto ?? '' }}" accept="image/*">
                                                            <small class="text-muted mt-2 d-block">Choose a file from your
                                                                computer</small>
                                                            <label class="custom-file-label" for="customFile">Upload
                                                                images</label>
                                                            @if ($errors->has('foto'))
                                                                <label class="text-danger">
                                                                    {{ $errors->first('foto') }}
                                                                </label>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>







                                            @if (Request::segment(3) == 'detail')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.pemuda') }}">Kembali</a>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.pemuda.ubah', $data->id) }}">Ubah <i
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
