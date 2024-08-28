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
                                <h4 class="header-title"> Data Mahasiswa</h4>
                                <div class="row mt-3 d-flex justify-content-between">
                                    <div class="col-6">
                                        @include('admin.layout.search')
                                    </div>

                                    <div class="">
                                            <a class="btn btn-dark" href="{{route('admin.mahasiswa.tambah')}}"> Tambah Data <i data-feather="plus"></i></a>
                                        <a class="btn btn-success" href="{{route('admin.mahasiswa.excel')}}">Cetak Excel <i data-feather="printer"></i></a>
                                    </div>
                                </div>

                                <div class="mt-3 table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Foto</th>
                                            <th>NIM</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jurusan</th>
                                            <th>Jenis Kelamin</th>
                                            <th></th>
                                        </tr>
                                            @forelse ($datas as $data )
                                            <tr>
                                                <td>{{ ++$i}}</td>
                                                <td class="p-0" width="100px">
                                                    <img src="{{ asset($data->foto) }}" alt="Picture" class="img img-fluid p-2 w-80 m-1 rounded">
                                                </td>
                                                <td>
                                                    {{$data->nim}}
                                                </td>
                                                <td>
                                                    <a class="text-dark"
                                                        href=""> {{$data->nama_lengkap}}</a>
                                                </td>
                                                <td>
                                                     {{$data->jurusan->jurusan}}</td>
                                                <td>
                                                    {{$data->jenis_kelamin}}
                                                </td>
                                                <td>

                                                    <a href="{{route('admin.mahasiswa.detail',$data->id)}}"
                                                        class="btn btn-sm btn-outline-warning border-0  waves-effect waves-light fs-4">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{route('admin.mahasiswa.ubah',$data->id)}}"
                                                        class="btn btn-sm btn-outline-primary border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form class="d-inline" action="{{route('admin.mahasiswa.hapus',$data->id)}}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-outline-danger border-0 waves-effect waves-light fs-4"
                                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"
                                                            type="submit">

                                                            <i class="fas fa-trash"></i>

                                                        </button>
                                                    </form>

                                                </td>

                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="7">
                                                    No data . . .
                                                </td>
                                            </tr>
                                            @endforelse


                                    </table>
                                </div>
                                <!-- end .mt-4 -->
                                {!! $datas->links() !!}


                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
