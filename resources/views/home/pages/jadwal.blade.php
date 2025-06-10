@extends('home.layouts.app')

@section('title')
    Jadwal Ibadah
@endsection
@section('content')

    @include('home.layouts.nav')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Jadwal Ibadah</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item text-white"><a href="/" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item active text-white fw-bolder"> Jadwal Ibadah </li>
                </ol>
        </div>
    </div>
    <!-- Header End -->



    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5 my-5" id="galeri">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Jadwal Ibadah</h5>
            <h1 class="mb-4">Jadwal Ibadah berjalan dari setiap Ibadah Pemuda Baptis</h1>

        </div>
        <div class="tab-class text-center">

            <div class="tab-content">
                <div id="" class="tab-pane fade show p-0 active">
                    <div class="row d-flex justify-content-center">
                        <div class="col-10">
                            <div class="mt-3 table-responsive">
                                <table class="table table-bordered  table-hover table-striped">
                                    <tr class="ng">
                                        <th class="table-primary" width="1%">No</th>
                                        <th class="table-primary">Gereja</th>
                                        <th class="table-primary">Tanggal</th>
                                        <th class="table-primary">Tempat Ibadah</th>
                                        <th class="table-primary">Pelayanan Firman</th>
                                        <th class="table-primary">Doa Syukur</th>
                                        <th class="table-primary">Doa Syafaat</th>
                                        <th class="table-primary">Status</th>
                                    </tr>
                                        @php
                                            $i = 1;
                                        @endphp

                                    @forelse ($datas as $data)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td class="">
                                                {{ $data->gereja->nama_gereja ?? 'Semua Gereja' }}
                                            </td>
                                            <td>{{ strftime('%d %B %Y', strtotime($data->tanggal)) }}</td>
                                            <td>{{ $data->tempat_ibadah }}</td>
                                            <td>{{ $data->pelayan_firman }}</td>
                                            <td>{{ $data->doa_syukur }}</td>
                                            <td>{{ $data->doa_syafaat }}</td>
                                            <td>{{ $data->status }}</td>


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
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery End -->

    @endsection
