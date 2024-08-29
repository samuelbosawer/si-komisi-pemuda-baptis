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
                                <h4 class="header-title">  {{$caption ??'Tambah Data Mahasiswa'}} </h4>


                     @if(Request::segment(4) == 'ubah')
                         <form action="{{route('admin.mahasiswa.update', $data->id)}}" method="post" enctype="multipart/form-data">
                         @method('PUT')
                     @else
                         <form action="{{route('admin.mahasiswa.store')}}" method="post" enctype="multipart/form-data">
                     @endif
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="nim"> NIM <span class="text-danger">*</span> </label>
                                                <input type="number" id="nim" value="{{old('nim') ?? $data->nim ?? ''}}" name="nim" placeholder="" class="form-control"   @if((Request::segment(3)) == 'detail' || (Request::segment(4)) == 'ubah' ) disabled @endif >
                                                @if($errors->has('nim'))
                                                    <label class="text-danger"> {{ $errors->first('nim') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="nama_lengkap"> Nama Lengkap <span class="text-danger">*</span> </label>
                                                <input type="text" id="nama_lengkap" @if((Request::segment(3)) == 'detail') {{'disabled'}} @endif value="{{old('nama_lengkap') ??  $data->nama_lengkap ?? ''}}" name="nama_lengkap" placeholder="" class="form-control">
                                                @if($errors->has('nama_lengkap'))
                                                    <label class="text-danger"> {{ $errors->first('nama_lengkap') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tempat_lahir"> Tempat Lahir <span class="text-danger">*</span> </label>
                                                <input type="text" id="tempat_lahir" value="{{old('tempat_lahir') ?? $data->tempat_lahir ?? ''}}" name="tempat_lahir" placeholder="" class="form-control" @if((Request::segment(3)) == 'detail') {{'disabled'}} @endif>
                                                @if($errors->has('tempat_lahir'))
                                                    <label class="text-danger"> {{ $errors->first('tempat_lahir') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="tanggal_lahir"> Tanggal Lahir <span class="text-danger">*</span> </label>
                                                <input type="date" @if((Request::segment(3)) == 'detail') {{'disabled'}} @endif id="tanggal_lahir" value="{{old('tanggal_lahir') ?? $data->tanggal_lahir ?? '' }}" name="tanggal_lahir" placeholder="" class="form-control">
                                                @if($errors->has('tanggal_lahir'))
                                                    <label class="text-danger"> {{ $errors->first('tanggal_lahir') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="jenis_kelamin"> Jenis Kelamin  <span class="text-danger">*</span> </label>
                                                <select name="jenis_kelamin" id="" class="form-control" @if((Request::segment(3)) == 'detail') disabled @endif>
                                                    <option value="" hidden> Pilih Jenis Kelamin </option>
                                                    <option value="Pria" @if((old('jenis_kelamin') ?? (isset($data) ? $data->jenis_kelamin : '')) == 'Pria') selected @endif >Pria</option>
                                                    <option value="Wanita" @if((old('jenis_kelamin') ?? (isset($data) ? $data->jenis_kelamin : '')) == 'Wanita') selected @endif>Wanita</option>
                                                </select>
                                                @if($errors->has('jenis_kelamin'))
                                                 <label class="text-danger"> {{ $errors->first('jenis_kelamin') }} </label>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="jurusan"> Jurusan  <span class="text-danger">*</span> </label>
                                                <select name="jurusan" id="" class="form-control" @if((Request::segment(3)) == 'detail') disabled @endif >
                                                    <option value="" hidden> Pilih Jurusan</option>
                                                    @foreach ($jurusan as $j )
                                                        <option value="{{$j->id}}" @if(old('jurusan') == $j->id || (isset($data) && $data->jurusan_id == $j->id)) {{'selected'}} @endif >{{$j->jurusan}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('jurusan'))
                                                 <label class="text-danger"> {{ $errors->first('jurusan') }} </label>
                                            @endif
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="no_hp"> No. HP/WA <span class="text-danger">*</span> </label>
                                                <input type="number" @if((Request::segment(3)) == 'detail' || (Request::segment(4)) == 'ubah' ) disabled @endif  id="no_hp" value="{{old('no_hp') ??  $data->no_hp ?? ''}}" name="no_hp" placeholder="" class="form-control">
                                                @if($errors->has('no_hp'))
                                                    <label class="text-danger"> {{ $errors->first('no_hp') }} </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="email"> Email <span class="text-danger">*</span> </label>
                                                <input type="text" @if((Request::segment(3)) == 'detail' || (Request::segment(4)) == 'ubah' ) disabled @endif id="email" value="{{old('email') ??  $data->email ?? ''}}" name="email" placeholder="" class="form-control">
                                                @if($errors->has('email'))
                                                    <label class="text-danger"> {{ $errors->first('email') }} </label>
                                                @endif
                                            </div>
                                    </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="foto"> Foto <span class="text-danger">*</span> </label>
                                                <input type="file" id="foto" @if((Request::segment(3)) == 'detail') disabled @endif value="{{old('foto')}}" name="foto" placeholder="" class="form-control">
                                                @if($errors->has('foto'))
                                                    <label class="text-danger"> {{ $errors->first('foto') }} </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                @if(isset($data) && $data->foto)
                                                    <img src="{{ asset($data->foto) }}" alt="Foto" class="img-thumbnail mt-2" width="150">
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="alamat"> Alamat </label>
                                                <textarea id="alamat" @if((Request::segment(3)) == 'detail') disabled @endif name="alamat" placeholder="Masukan alamat" rows="5" class="form-control">{{old('alamat') ??  $data->alamat ?? ''}} </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="keterangan"> Keterangan </label>
                                                <textarea id="keterangan" @if((Request::segment(3)) == 'detail') disabled @endif name="keterangan" placeholder="Masukan keterangan" rows="5" class="form-control">{{old('keterangan') ??  $data->keterangan ?? ''}} </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    @if((Request::segment(3)) == 'detail')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a  class="btn btn-primary" href="{{route('admin.mahasiswa')}}">Kembali</a>
                                            <a  class="btn btn-primary" href="{{route('admin.mahasiswa.ubah',$data->id)}}">Ubah  <i class="fas fa-edit"></i> </a>
                                        </div>
                                    </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary">Simpan  <i data-feather="save"></i></button>
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
