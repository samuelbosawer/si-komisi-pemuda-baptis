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
                                <h4 class="header-title"> Data Pengguna</h4>
                                <div class="row mt-3 d-flex justify-content-between">
                                    <div class="col-6">
                                        @include('admin.layout.search')
                                    </div>

                                    <div class="">
                                        <a class="btn btn-dark" href="{{ route('admin.pengguna.tambah') }}"> Tambah Data <i
                                                data-feather="plus"></i></a>
                                                <a class="btn btn-success" href="{{route('admin.pengguna.excel','s='.request()->s)}}">Cetak Excel <i data-feather="printer"></i></a>

                                        <a class="btn btn-danger" href="{{route('admin.pengguna.pdf','s='.request()->s ?? '')}}">Cetak PDF <i data-feather="printer"></i></a>
                                    </div>
                                </div>

                                <div class="mt-3 table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Email</th>
                                            <th>Wilayah</th>
                                            <th>Gereja</th>
                                            <th></th>
                                        </tr>
                                        @forelse ($datas as $data)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td class="text-dark">
                                                    {{ $data->email }}
                                                </td>
                                                <td class="text-dark">
                                                    {{ $data->wilayah->nama_wilayah ?? '-' }}
                                                </td>
                                                <td class="text-dark">
                                                    {{ $data->gereja->nama_gereja ?? '-' }}
                                                </td>

                                                <td>

                                                    <a href="{{ route('admin.pengguna.detail', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning border-0  waves-effect waves-light fs-4">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.pengguna.ubah', $data->id) }}"
                                                        class="btn btn-sm btn-outline-primary border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form class="d-inline"
                                                        action="{{ route('admin.pengguna.hapus', $data->id) }}"
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
                                {!! $datas->appends(['s' => request()->s])->links() !!}


                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
