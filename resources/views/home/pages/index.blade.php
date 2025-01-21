@extends('home.layouts.app')
@section('title')
    Beranda
@endsection
@section('content')

@include('home.layouts.nav')


<!-- About Start -->
<div class="container-fluid about py-5" id="tentang">
    <div class="container py-5">



        <div class="row g-5 align-items-center">
            <div class="col-lg-12 text-center ">
                <h1 class="mb-4">Welcome to <span class="text-primary">SI Pemuda Baptis Papua</span></h1>
                <p class="mb-4 bg-primary p-3 rounded text-white shadow">Sistem Informasi Pemuda Baptis Papua Tingkat
                    Wilayah Jayapura, Keerom, dan Yahukimo adalah sebuah platform digital yang dirancang untuk
                    mendukung pengelolaan data dan aktivitas Pemuda Baptis di tiga wilayah tersebut. Sistem ini
                    bertujuan untuk memudahkan pemantauan kegiatan, komunikasi, serta administrasi organisasi pemuda
                    gereja dengan lebih efisien. </p>
            </div>
        </div>

        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-md-3 m-2">

               <div class="shadow p-3 text-center rounded">
                    <h4>Wilayah<i class="fas fa-cross"></i></i></h4>
                    <p>Jumlah wilayah {{$wilayah}}</p>
               </div>

            </div>

            <div class="col-md-3 m-2">

                <div class="shadow p-3 text-center rounded">
                     <h4>Gereja <i class="fas fa-church"></i></i></h4>
                     <p>Jumlah Gereja {{$gereja}}</p>
                </div>

             </div>

             <div class="col-md-3 m-2">

                <div class="shadow p-3 text-center rounded">
                     <h4>Pemuda <i class="fas fa-users"></i></i></h4>
                     <p>Jumlah Pemuda {{$pemuda}}</p>
                </div>

             </div>
        </div>


    </div>
</div>
<!-- About End -->



@endsection
