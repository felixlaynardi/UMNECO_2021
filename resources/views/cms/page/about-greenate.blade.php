@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-greenate.css') }}">
@endsection

@section('content')
<div class="main">
    <div class="white-circle d-lg-block d-none"></div>
    <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="leaf-1">
    <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-2"> 
    <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-3">     
    <div class="section-1">
        

        <div class="row mt-5 justify-content-around pt-5">
            <div class="col-6 d-flex align-items-center justify-content-center">
                
            </div>
            <div class="col-6 flex-column text-end greenate-content ">
                <h1 class="text-end">WHAT IS GREENATE?</h1> 
                    
                <p>GREENATE merupakan rangkaian acara kedua dari kegiatan UMN ECO 2021. Dengan mengusung konsep restoran cepat saji, GREENATE menyajikan kegiatan Dine-In dan Take-Away yang dapat dinikmati oleh ECO Friends.</p>
                    <ul >
                        <li><p>GREENATE mengangkat tema food waste sebagai dasar dari kegiatan karena melihat sampai saat ini, dampak explosion dari food waste sudah sangat besar terutama di Indonesia. </p></li>
                        <li><p>Kata GREENATE sendiri terinspirasi dari granat yang dapat memberikan dampak besar kepada sekitarnya. Harapan kami, GREENATE dapat mewujudkan hal yang sama melalui kegiatan yang dilakukan guna mengatasi masalah food waste di Indonesia.</p></li>
                    </ul> 
                <p  >Melalui kegiatan yang ada di GREENATE, UMN ECO 2021 ingin mengajak ECO Friends untuk mengambil bagian dalam mengurangi food waste dan memberikan dampak yang besar bagi Bumi kita.</p>
            <div class="row justify-content-around px-5">
                <div class="col-6">
                    <button class="p-3">Regulasi Greenate Internal</button>
                </div>
                <div class="col-6">
                    <button class="p-3">Regulasi Greenate External</button>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="section-2 d-flex flex-column justify-content-center text-center">
        <h1>OUR PROGRAM</h1>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>



@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')

@endsection