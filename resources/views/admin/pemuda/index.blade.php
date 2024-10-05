@extends('admin.layout.tamplate')
@section('title')
  Pemuda
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
                                <h4 class="header-title"> Data Pemuda</h4>
                                <div class="row mt-3 d-flex justify-content-between">
                                    <div class="col-6">
                                        @include('admin.layout.search')
                                    </div>

                                    <div class="">
                                        <a class="btn btn-dark" href="{{route('admin.pemuda.tambah')}}"> Tambah Data <i data-feather="plus"></i></a>
                                        <a class="btn btn-success" href="{{route('admin.pemuda.excel','s='.request()->s)}}">Cetak Excel <i data-feather="printer"></i></a>
                                        <a class="btn btn-danger" href="{{route('admin.pemuda.pdf','s='.request()->s ?? '')}}">Cetak PDF <i data-feather="printer"></i></a>
                                    </div>
                                </div>

                                <div class="mt-3 table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th width="1%">No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Gereja</th>
                                            <th></th>
                                        </tr>
                                        @forelse ($datas as $data)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td class="p-0" width="100px">
                                                <img src="{{ asset($data->foto) }}" alt="Picture"
                                                    class="img img-fluid p-2 w-80 m-1 rounded">
                                            </td>
                                            <td>
                                                <a class="text-dark" href="">
                                                    {{ $data->nama_depan .' '.$data->nama_belakang.' '.$data->belakang }}
                                                </a>
                                            </td>

                                            <td>
                                                {{ $data->gereja->nama_gereja }}
                                            </td>

                                            <td>
                                                <a href="{{ route('admin.pemuda.detail', $data->id) }}"
                                                    class="btn btn-sm btn-outline-warning border-0  waves-effect waves-light fs-4">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                @if(Auth::user()->hasRole('gereja') || Auth::user()->hasRole('admin') )

                                                <a href="{{ route('admin.pemuda.ubah', $data->id) }}"
                                                    class="btn btn-sm btn-outline-primary border-0 waves-effect waves-light fs-4">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form class="d-inline"
                                                    action="{{ route('admin.pemuda.hapus', $data->id) }}"
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


                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                {{-- end row --}}





            </div> <!-- container -->

        </div> <!-- content -->
    @endsection
