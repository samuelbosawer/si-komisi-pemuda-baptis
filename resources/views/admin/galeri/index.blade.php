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
                                <h4 class="header-title"> Data Galeri</h4>
                                <div class="row mt-3 d-flex justify-content-between">
                                    <div class="col-6">
                                        @include('admin.layout.search')
                                    </div>

                                    <div class="">
                                        <a class="btn btn-dark" href="{{ route('admin.galeri.tambah') }}"> Tambah Data <i
                                                data-feather="plus"></i></a>
                                        {{-- <a class="btn btn-success" href="{{route('admin.galeri.excel')}}">Cetak Excel <i data-feather="printer"></i></a> --}}
                                    </div>
                                </div>

                                <div class="mt-3 table-responsive">
                                    <table class="table">
                                    <tr>
                                            <th width="1%">No</th>
                                            <th>Judul</th>
                                            <th>Foto</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                        </tr>
                                        @forelse ($datas as $data)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td class="text-dark">
                                                    {{ $data->judul }}
                                                </td>

                                                <td class="text-dark">
                                                    <img src="{{ asset($data->foto) }}" alt="Picture" class="img img-fluid p-2 w-80 m-1 rounded" width="100">
                                                </td>
                                                <td class="text-dark">
                                                    {{ $data->keterangan }}
                                                </td>


                                                <td>

                                                    <a href="{{ route('admin.galeri.detail', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning border-0  waves-effect waves-light fs-4">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.galeri.ubah', $data->id) }}"
                                                        class="btn btn-sm btn-outline-primary border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form class="d-inline"
                                                        action="{{ route('admin.galeri.hapus', $data->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            class="btn btn-sm btn-outline-danger border-0 waves-effect waves-light fs-4"
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
