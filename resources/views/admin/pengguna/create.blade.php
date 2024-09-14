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


                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="name"> Name <span
                                                                class="text-danger">*</span> </label>
                                                        <input type="text" id="name"
                                                            @if (Request::segment(3) == 'detail') {{ 'disabled' }} @endif
                                                            value="{{ old('name') ?? ($data->name ?? '') }}"
                                                            name="name" placeholder="" class="form-control">
                                                        @if ($errors->has('name'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('name') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
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

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="role"> Role <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="role" id="" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                            <option value="" hidden> Pilih Role </option>

                                                            @foreach ($role as $r)
                                                                @if ($r->id == old('role'))
                                                                    <option selected value="{{ $r->name }}">
                                                                        {{ $r->name }}  </option>

                                                                @elseif (isset($data) && $r->name == $data->roles->pluck('name'))
                                                                    <option selected value="{{ $r->name }}">
                                                                        {{ $r->name }}</option>
                                                                @else
                                                                    <option value="{{ $r->name }}">
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
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="wilayah_id"> Wilayah <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="wilayah_id" id="wilayah" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif
                                                          >
                                                            <option value="" hidden> Pilih Wilayah </option>
                                                            @foreach ($wilayah as $w)
                                                                @if ($w->id == old('wilayah_id'))
                                                                    <option selected value="{{ $w->id }}">
                                                                        {{ $w->nama_wilayah }}</option>
                                                                @elseif (isset($data) && $w->id == $data->wilayah_id)
                                                                    <option selected value="{{ $w->id }}">
                                                                        {{ $w->nama_wilayah }}</option>
                                                                @else
                                                                    <option value="{{ $w->id }}">
                                                                        {{ $w->nama_wilayah }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('wilayah_id'))
                                                            <label class="text-danger">
                                                                {{ $errors->first('wilayah_id') }} </label>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="gereja_id"> Gereja <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="gereja_id" id="gereja" class="form-control"
                                                            @if (Request::segment(3) == 'detail') disabled @endif>
                                                            <option value="" hidden> Pilih Gereja </option>
                                                            @foreach ($gereja as $g)
                                                                <option value="{{ $g->id }}"
                                                                    @if (old('gereja_id') == $g->id || (isset($data) && $data->gereja_id == $g->id)) {{ 'selected' }} @endif>
                                                                    {{ $g->nama_gereja }}</option>
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
                                                <div class="col-md-6">
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
                        </div> <!-- end card-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        {{-- end row --}}





    </div> <!-- container -->

    </div> <!-- content -->
@endsection

@push('script-footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {

            function fetchGerejaByWilayah() {
                console.info()
            }
        });


        $(document).ready(function() {
            // Load wilayah on page load
            $.get('/admin/pengguna/get-gereja-by-wilayah/', function(wilayahs) {
                wilayahs.forEach(function(wilayah) {
                    $('#wilayah').append(new Option(wilayah.nama_wilayah, wilayah.id));
                });
            });

            // Ketika wilayah diubah
            $('#wilayah').on('change', function() {
                var wilayahId = $(this).val();

                // Hapus data gereja sebelumnya
                $('#gereja').empty().append(new Option('Pilih Gereja', ''));

                if (wilayahId) {
                    // Ambil data gereja berdasarkan wilayah_id
                    $.get('/admin/pengguna/get-gereja-by-gereja/' + wilayahId, function(gerejas) {
                        gerejas.forEach(function(gereja) {
                            $('#gereja').append(new Option(gereja.nama_gereja, gereja.id));
                        });
                    });
                }
            });
        });
    </script>
@endpush
