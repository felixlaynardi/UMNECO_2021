@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-greenate.css') }}">
@endsection

@section('content')

<div class="section-1">
    <div class="white-circle d-lg-block d-none"></div>
    <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="leaf-1">
    <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-2"> 
    <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-3"> 

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


@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')

@endsection