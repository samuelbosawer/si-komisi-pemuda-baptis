@extends('admin.layout.tamplate')
@section('title')
    Gereja
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
                                <h4 class="header-title"> Data Gereja</h4>
                                <div class="row mt-3 d-flex justify-content-between">
                                    <div class="col-6">
                                        @include('admin.layout.search')
                                    </div>

                                    <div class="">
                                        @if (Auth::user()->hasRole('admin'))
                                            <a class="btn btn-dark" href="{{ route('admin.gereja.tambah') }}"> Tambah Data
                                                <i data-feather="plus"></i></a>
                                        @endif
                                        <a class="btn btn-success"
                                            href="{{ route('admin.gereja.excel', 's=' . request()->s) }}">Cetak Excel <i
                                                data-feather="printer"></i></a>
                                        <a class="btn btn-danger"
                                            href="{{ route('admin.gereja.pdf', 's=' . request()->s ?? '') }}">Cetak PDF <i
                                                data-feather="printer"></i></a>
                                    </div>
                                </div>

                                <div class="mt-3 table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Nama Gereja</th>
                                            <th>Wilayah</th>
                                            <th>Jumlah Pemuda</th>
                                            <th></th>
                                        </tr>
                                        @forelse ($datas as $data)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $data->nama_gereja }}</td>
                                                <td>
                                                    {{ $data->wilayah->nama_wilayah }}
                                                </td>

                                                <td>
                                                    {{ $data->pemuda->count() }}
                                                </td>

                                                <td>
                                                    @if (Auth::user()->hasRole('admin'))
                                                        <form class="d-inline"
                                                            action="{{ route('admin.gereja.hapus', $data->id) }}"
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
                                                        <a href="{{ route('admin.gereja.ubah', $data->id) }}"
                                                            class="btn btn-sm btn-outline-primary border-0 waves-effect waves-light fs-4">
                                                            <i class="fas fa-edit"></i>
                                                        </a>

                                                    @endif
                                                    <a href="{{ route('admin.gereja.detail', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning border-0  waves-effect waves-light fs-4">
                                                        <i class="fas fa-eye"></i>
                                                    </a>


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
