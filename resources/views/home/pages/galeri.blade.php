@extends('home.layouts.app')
@section('title')
    Galeri
@endsection
@section('content')

@include('home.layouts.nav')
      <!-- Header Start -->
      <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Galeri</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Beranda</a></li>
                <li class="breadcrumb-item active text-white fw-bolder"> Galeri </li>
            </ol>
        </div>
    </div>
    <!-- Header End -->



    <!-- Gallery Start -->
<div class="container-fluid gallery py-5 my-5" id="galeri">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Galeri</h5>
        <h1 class="mb-4">Foto kegiatan pemuda baptis Papua</h1>

    </div>
    <div class="tab-class text-center">

        <div class="tab-content">
            <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                <div class="row g-2 container">
                    @foreach ($galeri as $g )
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="{{asset($g->foto)}}" class="img-fluid w-100 h-100 rounded"
                                alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2"> {{$g->judul}}</h5>
                                    <p class="text-center mb-5 text-white"> {{$g->gereja->nama_gereja ?? 'Semua Gereja'}}
                                    </p>

                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="{{asset($g->foto)}}" data-title="{{$g->keterangan}}" data-lightbox="{{$g->judul}}"
                                    class="my-auto"><i class="fas fa-plus fa-2x text-white"></i></a>

                                    {{-- <p class="text-center mb-5 text-white"> {{$g->keterangan}}
                                    </p> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>
</div>
<!-- Gallery End -->

    @endsection
