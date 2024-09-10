@extends('admin.layout.tamplate')
@section('title')
    Pengguna
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
                                <h4 class="header-title"> {{ $caption ?? 'Tambah Data Pengguna' }} </h4>


                                @if (Request::segment(4) == 'ubah')
                                    <form action="{{ route('admin.pengguna.update', $data->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                    @else
                                        <form action="{{ route('admin.pengguna.store') }}" method="post"
                                            enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-box">
                                            <div class="row">

                                                <div class="col-md-5">
                                                    <div class="form-group mb-3">
                                                        <label for="email"> Email <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="email"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('email') ?? ($data->email ?? '') }}"
                                                            name="email" placeholder="" class="form-control">
                                                        @if ($errors->has('email'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('email') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="form-group mb-3">
                                                        <label for="role"> Role <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="role" id="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                            <option value="" hidden> Pilih Role </option>
                                                            @foreach ($role as $r)
                                                                @if ($r->id == old('role'))
                                                                    <option selected value="{{ $r->id }}">
                                                                        {{ $r->name }}</option>
                                                                @elseif (isset($data) && $r->id == $data->role)
                                                                    <option selected value="{{ $r->id }}">
                                                                        {{ $r->name }}</option>
                                                                @else
                                                                    <option value="{{ $r->id }}">
                                                                        {{ $r->name }}</option>
                                                                @endif
                                                            @endforeach


                                                        </select>
                                                        @if ($errors->has('Role'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('Role') }} </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="form-group mb-3">
                                                        <label for="wilayah_id"> Wilayah <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="wilayah_id" id="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                            <option value="" hidden> Pilih Wilayah </option>
                                                            @foreach ($gereja as $g)
                                                                @if ($g->id == old('wilayah_id'))
                                                                    <option selected value="{{ $g->id }}">
                                                                        {{ $g->nama_gereja }}</option>
                                                                @elseif (isset($data) && $g->id == $data->wilayah_id)
                                                                    <option selected value="{{ $g->id }}">
                                                                        {{ $g->nama_gereja }}</option>
                                                                @else
                                                                    <option value="{{ $g->id }}">
                                                                        {{ $g->nama_gereja }}</option>
                                                                @endif
                                                            @endforeach


                                                        </select>
                                                        @if ($errors->has('wilayah_id'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('wilayah_id') }} </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
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

                                                <div class="col-md-5">
                                                    <div class="form-group mb-3">
                                                        <label for="password" class="form-label"> Password <span class="text-danger">*</span></label>
                                                        <input type="password" name="password" id="password"  placeholder="" class="form-control">
                                                        @if ($errors->has('password'))
                                                            <span class="text-danger" role="alert">
                                                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('password') }}</small>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <!-- input group end -->
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group mb-3">
                                                        <label for="password_confirmation" class="form-label">Confirmation Password <span class="text-danger">*</span></label>
                                                        <input type="password" name="password_confirmation" id="password_confirmation"  placeholder="" class="form-control">
                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="text-danger" role="alert">
                                                                <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('password_confirmation') }}</small>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <!-- input group end -->
                                                </div>





                                            </div>







                                            @if (Request::segment(3) == 'detail')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.pengguna') }}">Kembali</a>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('admin.pengguna.ubah', $data->id) }}">Ubah <i
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
