@extends('admin.layout.tamplate')
@section('title')
    Dashboard - Admin
@endsection
@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->


    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @include('admin.layout.breadcump')
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Welcome {{ Auth::user()->name . ' | ' . Auth::user()->email }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-sm bg-blue rounded">
                                        <i class="fe-users avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mb-1">Pemuda</h3>
                                        @if (!Auth::user()->hasRole('wilayah'))
                                            {{-- <h5 class="text-dark mb-1">Semua</h5> --}}
                                        @endif

                                        @if (Auth::user()->hasRole('wilayah'))
                                            <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $pemuda }}
                                                </span></h3>
                                        @else
                                            <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $pemuda }}
                                                </span></h3>
                                        @endif

                                        {{-- <h5 class="text-dark mb-1">Laki-Laki</h5> --}}
                                    </div>

                                </div>
                            </div>

                        </div> <!-- end card-box-->
                    </div> <!-- end col -->


                    {{--
                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-sm bg-success  rounded">
                                        <i class="fe-users avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mb-1">Pemuda</h3>
                                        <h5 class="text-dark mb-1">Laki-Laki</h5>
                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $pria }}
                                            </span></h3>
                                    </div>
                                </div>

                            </div>

                        </div> <!-- end card-box-->
                    </div> <!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-sm bg-warning  rounded">
                                        <i class="fe-users avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mb-1">Pemuda</h3>
                                        <h5 class="text-dark mb-1">Wanita</h5>
                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $wanita }}
                                            </span></h3>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-box-->
                    </div> <!-- end col --> --}}



                    @if (!Auth::user()->hasRole('wilayah|gereja'))
                    <div class="col-md-3">
                        <div class="card-box card-hover" id="cardWilayah" data-wilayah="{{ $wilayah }}">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-sm bg-dark rounded">
                                        <i data-feather="box" class="avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mb-1">Wilayah</h3>
                                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $wilayah }}</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->

                    <!-- Modal -->
                    <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="dataModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="dataModalLabel">Detail Wilayah</h5>
                                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button> --}}
                                </div>
                                <div class="modal-body">
                                   <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>Kode Wilayah</th>
                                                <th>Nama Wilayah</th>
                                            </tr>
                                            @foreach ($wilayahs as $w )
                                            <tr>
                                                <td>{{$w->kode_wilayah}}</td>
                                                <td>{{$w->nama_wilayah}}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                   </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @endif;



                    @if (!Auth::user()->hasRole('gereja'))


                        <div class="col-md-3">
                            <div class="card-box card-hover" id="cardGereja"

                            >
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-sm bg-info rounded">
                                            <i data-feather="home" class=" avatar-title font-22 text-white"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <h3 class="text-dark mb-1">Gereja</h3>
                                            @if (Auth::user()->hasRole('wilayah'))
                                            <h3 class="text-dark my-1"> <span data-plugin="counterup">
                                                    {{ $gereja->gereja->count() }}
                                                </span></h3>
                                        @else
                                            <h3 class="text-dark my-1"> <span data-plugin="counterup">
                                                    {{ $gereja }}
                                                </span></h3>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->

                        <!-- Modal -->
                        <div class="modal fade" id="dataGereja" tabindex="-1" role="dialog" aria-labelledby="dataModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="dataModalLabel">Detail Gereja</h5>
                                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button> --}}
                                    </div>
                                    <div class="modal-body">
                                       <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th>Nama Gereja</th>
                                                </tr>
                                                @if (Auth::user()->hasRole('wilayah'))
                                                @foreach ($gerejas as $g )
                                                {{-- @dump($g->gereja) --}}
                                                       @foreach ($g->gereja as $gereja )
                                                       <tr>
                                                        <td> {{$gereja->nama_gereja}}</td>
                                                       </tr>
                                                       @endforeach
                                                    @endforeach
                                                @else
                                                <tr>
                                                    @foreach ($gerejas as $g )

                                                    <tr>
                                                        <td>{{$g->nama_gereja}}</td>
                                                        <td>{{$g->wilayah->nama_wilayah}}</td>
                                                    </tr>

                                                    @endforeach

                                                </tr>
                                                @endif

                                            </table>
                                       </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    @endif;


                </div>






            </div> <!-- container -->

        </div> <!-- content -->

     <script>
          @if (!Auth::user()->hasRole('wilayah|gereja'))
        // Ambil elemen card dan modal
            const card = document.getElementById('cardWilayah');
            const modal = new bootstrap.Modal(document.getElementById('dataModal')); // Bootstrap Modal Instance

            // Tambahkan event listener ketika kursor masuk
            card.addEventListener('mouseenter', function () {
                const wilayah = card.getAttribute('data-wilayah'); // Ambil data dari atribut
                // document.getElementById('wilayahContent').textContent = wilayah; // Tampilkan data di modal
                modal.show(); // Tampilkan modal
            });

            // (Opsional) Tutup modal otomatis saat kursor keluar dari card
            card.addEventListener('mouseleave', function () {
                modal.hide(); // Sembunyikan modal
            });

            @endif


             // Ambil elemen card dan modal
             const card2 = document.getElementById('cardGereja');
            const modal2 = new bootstrap.Modal(document.getElementById('dataGereja')); // Bootstrap Modal Instance

            // Tambahkan event listener ketika kursor masuk
            card2.addEventListener('mouseenter', function () {
                // const wilayah = card2.getAttribute('data-gereja'); // Ambil data dari atribut
                // document.getElementById('wilayahContent').textContent = wilayah; // Tampilkan data di modal
                modal2.show(); // Tampilkan modal
            });

            // (Opsional) Tutup modal otomatis saat kursor keluar dari card
            card2.addEventListener('mouseleave', function () {
                modal2.hide(); // Sembunyikan modal
            });

     </script>

    @endsection
