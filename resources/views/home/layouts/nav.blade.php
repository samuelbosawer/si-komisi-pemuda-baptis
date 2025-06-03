      <!-- Topbar Start -->
      <div class="container-fluid bg-primary px-5 d-none d-lg-block" id="top">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">

                    @if (Auth::guest())
                        <a href="{{ route('login') }}"><small class="me-3 text-light"><i
                                    class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                    @else
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><small class="me-3 text-light"><i
                                    class="fa fa-sign-out-alt me-2"></i>Logout</small></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
  <!-- Navbar & Hero Start -->
   <div class="container-fluid position-relative p-0">

    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <div class="d-flex m-0 text-white mt-3">
                <div class="d-flex align-items-center"> <img src="{{ asset('assets/images/logo.png') }}"srcset="">

                    <h1 class=" fw-bold h5 "> SI Pemuda Baptis Papua  </h1>
                </div>
                {{-- <h1 class=" fw-bold h5 "> SI Pemuda Baptis Papua  <br >Tingkat Wilayah  Jayapura, <br> Keerom
                    dan Yahukimo</h1> --}}

            </div>
            <h2 class="">
            </h2>
            <!-- <img src="asset-visitor/img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link ">Beranda</a>
                <a href="{{route('tentang')}}" class="nav-item nav-link">Tentang </a>
                <a href="{{route('jadwal')}}" class="nav-item nav-link">Jadwal</a>
                <a href="{{route('pengumuman')}}" class="nav-item nav-link">Pengumuman</a>
                <a href="{{route('agenda')}}" class="nav-item nav-link">Agenda</a>
                <a href="{{route('galeri')}}" class="nav-item nav-link">Galeri</a>
            </div>
            {{-- <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a> --}}
        </div>

    </nav>

    @if (Request::segment(1) == null)
    <!-- Carousel Start -->
    @include('home.layouts.coursel')

    <!-- Carousel End -->
    @endif

</div>


