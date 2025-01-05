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
                                    @if (!Auth::user()->hasRole('gereja'))
                                        <div class="col-6">
                                            @include('admin.layout.search')
                                        </div>
                                    @endif

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


                                @if (Auth::user()->hasRole('gereja'))
                                    <div class="row mt-3">
                                        <div class="col-md-12 p-4 shadow">
                                            <table>
                                                <tr>
                                                    <td width="200">Nama Gereja</td>
                                                    <th>{{ $datas[0]->nama_gereja }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Wilayah</td>
                                                    <th>{{ $datas[0]->wilayah->nama_wilayah }}</th>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Pemuda</td>
                                                    <th>{{ $datas[0]->pemuda->count() }}</th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                @endif

                                @if (Auth::user()->hasRole('wilayah|admin'))
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
                                                        @endif

                                                        @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('gereja'))
                                                            <a href="{{ route('admin.gereja.ubah', $data->id) }}"
                                                                class="btn btn-sm btn-outline-primary border-0 waves-effect waves-light fs-4">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        @endif
                                                        <a href="{{ route('admin.gereja.detail', $data->id) }}"
                                                            class="btn btn-sm btn-outline-warning border-0  waves-effect waves-light fs-4">
                                                            <i class="fas fa-eye"></i>
                                                        </a>

                                                        @if (Auth::user()->hasRole('admin'))
                                                            @if (auth()->user()->hasPermissionTo('access-other-users'))
                                                                <a href="{{ route('admin.impersonate.start', $data->user->id) }}"
                                                                    class="btn btn-sm btn-outline-success border-0  waves-effect waves-light fs-4">
                                                                    <i class="fas fa-universal-access"></i></a>
                                                            @endif
                                                        @endif



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
                                @endif



                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
