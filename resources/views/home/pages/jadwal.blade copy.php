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
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-2 container">
                        <div class="col-12 mx-auto d-flex justify-content-center">
                            <div class="mt-3 table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th width="1%">No</th>
                                        <th>Gereja</th>
                                        <th>Tanggal</th>
                                        <th>Tempat Ibadah</th>
                                        <th>Pelayanan Firman</th>
                                        <th>Doa_Syukur</th>
                                        <th>Doa_Syafaat</th>
                                    </tr>
                                        @php
                                            $i = 1;
                                        @endphp

                                    @forelse ($datas as $data)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td class="text-dark">
                                                {{ $data->gereja->nama_gereja ?? 'Semua Gereja' }}
                                            </td>
                                            <td>{{ strftime('%d %B %Y', strtotime($data->tanggal)) }}</td>
                                            <td>{{ $data->tempat_ibadah }}</td>
                                            <td>{{ $data->pelayan_firman }}</td>
                                            <td>{{ $data->doa_syukur }}</td>
                                            <td>{{ $data->doa_syafaat }}</td>


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
