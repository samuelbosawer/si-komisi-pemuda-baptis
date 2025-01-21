@extends('home.layouts.app')
@section('title')
    Agenda Kegiatan
@endsection
@section('content')

@include('home.layouts.nav')
      <!-- Header Start -->
      <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Agenda Kegiatan</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Beranda</a></li>
                <li class="breadcrumb-item active text-white fw-bolder"> Agenda Kegiatan </li>
            </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Agenda Start -->
<div class="container-fluid testimonial py-5" id="agenda">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Agenda</h5>
            <h1 class="mb-0">Agenda Kegiatan</h1>
        </div>
        <br>
        <div class="testimonial-carousel owl-carousel ">

            @foreach ($agenda as $a )
                <div class="testimonial-item text-center rounded pb-4 mt-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-3 fw-bolder" style="font-size: 20px"> {{$a->judul}}</p>
                        <p class="text-center mb-5"> {{$a->keterangan}}
                        </p>

                        <p class="text-center mb-5"> {{$a->gereja->nama_gereja ?? 'Semua Gereja'}}
                        </p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Agenda End -->
@endsection
