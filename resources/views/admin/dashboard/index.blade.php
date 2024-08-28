@extends('admin.layout.tamplate')
@section('title')
    Dashboard - Admin
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
                    <div class="col-md-4">
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
                                        <h5 class="text-dark mb-1">Semua</h5>

                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $mahasiswa }}
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
                                    <div class="avatar-sm bg-success  rounded">
                                        <i class="fe-users avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mb-1">Pemuda</h3>
                                        <h5 class="text-dark mb-1">Laki-Laki</h5>
                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $jurusan }}
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
                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $jurusan }}
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
                                    <div class="avatar-sm bg-dark  rounded">
                                        <i data-feather="box" class=" avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mb-1">Wilayah</h3>
                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $jurusan }}
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
                                    <div class="avatar-sm bg-info  rounded">
                                        <i data-feather="home" class=" avatar-title font-22 text-white"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h3 class="text-dark mb-1">Gereja</h3>
                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $jurusan }}
                                            </span></h3>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-box-->
                    </div> <!-- end col -->


                </div>

                {{-- <div class="row">
                    <div class="col-md-6 col-xl-6">
                        <div class="card-box ">
                            <div class="d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <h4 class="text-dark mb-1">Total Mahasiswa Berdasarkan Gender </h4>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">

                                        <div id="gender"></div>

                                    </div>
                                </div>

                            </div>


                        </div> <!-- end card-box-->
                    </div> <!-- end col -->


                    <div class="col-md-6 col-xl-6">
                        <div class="card-box ">
                            <div class="d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <h4 class="text-dark mb-1">Total Mahasiswa Berdasarkan Jurusan </h4>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">

                                        <div id="jurusan"></div>

                                    </div>
                                </div>

                            </div>


                        </div> <!-- end card-box-->
                    </div> <!-- end col -->

                </div> --}}







            </div> <!-- container -->

        </div> <!-- content -->


        @push('script-footer')
            <!-- Third Party js-->
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

            <script>
                var options = {
                    series: [<?= $pria ?>, <?= $wanita ?>],
                    chart: {
                        width: 380,
                        type: 'pie',
                    },
                    labels: ['Pria', 'Wanita'],
                    dataLabels: {
                        enabled: true,
                        formatter: function(val, opts) {
                            return opts.w.globals.series[opts.seriesIndex];
                        },
                        style: {
                            colors: ['#FFFFFF']
                        }
                    },
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 500
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                };

                var chart = new ApexCharts(document.querySelector("#gender"), options);
                chart.render();
            </script>


            <script>
                var options = {
          series: [{
          data: [
            <?php foreach ($jurusanMahasiswa as $jm) :?>
            <?= $jm->mahasiswas->count() ?>,
            <?php endforeach; ?>

          ]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            borderRadiusApplication: 'end',
            horizontal: false,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: [
            <?php foreach ($jurusanMahasiswa as $jm) :?>
            "<?= $jm->jurusan ?>",
            <?php endforeach; ?>
          ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#jurusan"), options);
        chart.render();
            </script>

        @endpush
    @endsection
