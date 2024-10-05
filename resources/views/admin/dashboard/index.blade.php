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
                   <div class="col-12">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Welcome {{Auth::user()->name.' | '.Auth::user()->email}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                   </div>
                </div>
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

                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $pemuda }}
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
                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $wilayah }}
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
                                        <h3 class="text-dark my-1"> <span data-plugin="counterup"> {{ $gereja }}
                                            </span></h3>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-box-->
                    </div> <!-- end col -->


                </div>






            </div> <!-- container -->

        </div> <!-- content -->


    @endsection
