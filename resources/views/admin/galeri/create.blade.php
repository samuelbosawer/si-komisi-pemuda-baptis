@extends('admin.layout.tamplate')
@section('title')
    Galeri
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
                                <h4 class="header-title"> {{ $caption ?? 'Tambah Data Galeri' }} </h4>


                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('admin.galeri.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('admin.galeri.store') }}" method="post"
                                            enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box">
                                            <div class="row">

                                                <div class="col-md-8">
                                                    <div class="form-group mb-3">
                                                        <label for="judul"> Judul Foto <span
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

                                                <div class="col-md-8">
                                                    <div class="form-group mb-3">
                                                        <label for="keterangan"> Keterangan </label>
                                                        <textarea id="keterangan" @if (Request::segment(3) == 'detail') disabled @endif name="keterangan"
                                                            placeholder="Masukan keterangan" rows="5" class="form-control">{{ old('keterangan') ?? ($data->keterangan ?? '') }} </textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
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
                                                            href="{{ route('admin.galeri') }}">Kembali</a>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.galeri.ubah', $data->id) }}">Ubah <i
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
