@extends('home.layouts.app')
@section('title')
    Pengumuman
@endsection
@section('content')

      <!-- Header Start -->
      <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Pengumuman</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item text-white"><a href="/" class="text-white">Beranda</a></li>
                <li class="breadcrumb-item active text-white fw-bolder"> Pengumuman </li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

<!-- Pengumuman Start -->
<div class="container-fluid bg-light service py-5" id="pengumuman">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Pengumuman</h5>
            <h1 class="mb-0">Informasi Pengumuman terbaru pada setiap kegiatan Pemuda Baptis Papua</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    @foreach ($pengumuman as $p)
                        <div class="col-md-6">
                            <div class="service-content-inner  bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-center">
                                    <h5 class="mb-4">{{ $p->judul }}</h5>
                                    <p class="mb-0">{{ $p->keterangan }}
                                    </p>
                                </div>
                                <div class="text-small text-muted text-center mt-3 fw-bold service-content">
                                    <p> {{ strftime('%d %B %Y', strtotime($p->mulai)) . ' - ' . strftime('%d %B %Y', strtotime($p->selesai)) }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>
</div>
<!-- Pengumuman End -->

@endsection
