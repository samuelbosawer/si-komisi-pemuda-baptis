@extends('admin.layout.tamplate')
@section('title')
    Wilayah
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
                                <h4 class="header-title"> Data Wilayah</h4>
                                <div class="row mt-3 d-flex justify-content-between">
                                    @if(Auth::user()->hasRole('admin'))
                                    <div class="col-6">
                                        @include('admin.layout.search')
                                    </div>
                                    @endif

                                    <div class="">
                                        @if( Auth::user()->hasRole('admin') )

                                        <a class="btn btn-dark" href="{{ route('admin.wilayah.tambah') }}"> Tambah Data <i
                                                data-feather="plus"></i></a>
                                        @endif

                                                <a class="btn btn-success" href="{{route('admin.wilayah.excel','s='.request()->s)}}">Cetak Excel <i data-feather="printer"></i></a>
                                                <a class="btn btn-danger" href="{{route('admin.wilayah.pdf','s='.request()->s ?? '')}}">Cetak PDF <i data-feather="printer"></i></a>
                                    </div>
                                </div>
                                @if(Auth::user()->hasRole('wilayah||gereja'))
                                    <div class="row mt-3">
                                        <div class="col-md-12 p-4 shadow">
                                          <table>
                                            <tr>
                                                <td width="200">Kode Wilayah</td>
                                                <th>{{$datas[0]->kode_wilayah}}</th>
                                            </tr>
                                            <tr>
                                                <td>Nama Wilayah</td>
                                                <th>{{$datas[0]->nama_wilayah}}</th>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Gereja</td>
                                                <th>{{$datas[0]->gereja->count()}}</th>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Pemuda</td>
                                                <th>{{$datas[0]->pemuda->count()}}</th>
                                            </tr>
                                          </table>
                                        </div>
                                    </div>

                                @endif


                                @if(Auth::user()->hasRole('admin'))


                                    <div class="mt-3 table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th width="1%">No</th>
                                                <th>Kode Wilayah</th>
                                                <th>Nama Wilayah</th>
                                                <th>Jumlah Gereja</th>
                                                <th>Jumlah Pemuda</th>
                                                <th></th>
                                            </tr>
                                            @forelse ($datas as $data)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td class="text-dark">
                                                        {{ $data->kode_wilayah }}
                                                    </td>
                                                    <td class="text-dark">
                                                        {{ $data->nama_wilayah }}
                                                    </td>


                                                    <td class="text-dark">
                                                        {{ $data->gereja->count() }}
                                                    </td>

                                                    <td class="text-dark">
                                                        {{ $data->pemuda->count() }}
                                                    </td>



                                                    <td>

                                                        <a href="{{ route('admin.wilayah.detail', $data->id) }}"
                                                            class="btn btn-sm btn-outline-warning border-0  waves-effect waves-light fs-4">
                                                            <i class="fas fa-eye"></i>
                                                        </a>


                                                        @if( Auth::user()->hasRole('admin|wilayah') )
                                                        <a href="{{ route('admin.wilayah.ubah', $data->id) }}"
                                                            class="btn btn-sm btn-outline-primary border-0 waves-effect waves-light fs-4">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        @endif
                                                        @if( Auth::user()->hasRole('admin') )

                                                        <form class="d-inline"
                                                            action="{{ route('admin.wilayah.hapus', $data->id) }}"
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
