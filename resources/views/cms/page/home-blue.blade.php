@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/home-blue.css') }}">

@endsection

@section('content')



<div class="welcome-blue-section pt-5">
    <img src="{{ asset('images/about-blue/logo-bg.png') }}" alt="" class="logo-bg">
    <div class="welcome-blue-overlay"></div>
    <img src="{{ asset('images/about-blue/blue-logo.png') }}" alt="" class="blue-logo">
</div>

<div class="section-1 container">
    <img src="{{ asset('images/about-blue/bubbles.png') }}" alt="" class="bubbles-1 d-sm-block d-none">
    <div class="container text-content-1">
        <p>
            <b>BLUE (Behold The Undersea)</b> merupakan rangkaian kegiatan ketiga sekaligus yang terakhir dari UMN ECO 2021 dengan mengusung konsep 
            buku dongeng dan fokus pada kondisi bawah laut yang membutuhkan pertolongan akibat meningkatnya polusi 
            dan pencemaran mikroplastik.
            <br>
            <br>
            Nantinya, ECO Friends akan membantu Lulu membersihkan tempat tinggalnya yang penuh mikroplastik dengan membuat 
            VIDEO pembuatan karya berbahan dasar PLASTIK BEKAS di rumah. Kamu siap? Yuk, kita bantu Lulu!
        </p>
        
        <div class="p-5 m-5 d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/about-blue/clam.png') }}" alt="" class="clam" >
        </div>

    </div>
</div>

<div class="section-2 container">
    <div class="container">
        <div class="row justify-content-around  py-4">
            <div class="col-lg-6 col-12 order-lg-4 order-1">
                <img src="{{ asset('images/about-blue/picture1.jpg') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-12 order-lg-3 order-2 py-lg-0 py-4 text-content-2">
                <p class="first-text"> Halo, ECO Friends!</p>
                <p class="second-text"> Kenalin nama aku Lulu! </p>
                <p class="third-text"> Aku hidup di dasar laut bersama dengan teman-temanku. 
                    Saat ini, aku sedang ada masalah yang cukup besar, baca ceritaku ya!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section-3 container">
    <img src="{{ asset('images/about-blue/bubbles.png') }}" alt="" class="bubbles-2 d-sm-block d-none">

    <div class="container">
        <div class="row justify-content-around  py-4">
            <div class="col-12 order-1">
                <img src="{{ asset('images/about-blue/picture2.jpg') }}" alt="" class="w-100">
            </div>
            <div class="col-12 order-2 py-4 text-content-3">
                <p>
                Ini adalah tempat tinggalku. Dulu tidak seperti ini kondisinya. 
                Waktu aku kecil rumahku bersih dan indah sekali.
                Namun, karena wabah plastik yang melanda, semuanya menjadi kotor dan berbahaya, sampai membuat semua temanku sakit.
                </p>
            </div>
        </div>
        <div class="row justify-content-around  py-4">
            <div class="col-12 order-1">
                <img src="{{ asset('images/about-blue/picture3.png') }}" alt="" class="w-100">
            </div>
            <div class="col-12 order-2 py-4 text-content-4">
                <p>
                Akibat ulah manusia, teman-teman ku bingung membedakan mana yang makanan dan mana yang bukan, 
                karena bau dan bentuk yang dihasilkan sama. 
                Rumahku Juga tercemar mikroplastik yang menghasilkan polutan seperti <b>PCB</b> dan 
                <b>pestisida</b> sehingga kotor dan membuat teman-temanku sakit!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section-4 container">
    <div class="container">
        <div class="row justify-content-around  py-4">
            <div class="col-lg-6 col-12 order-lg-3 order-1">
                <img src="{{ asset('images/about-blue/picture4.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-12 order-lg-4 order-2 py-lg-0 py-4 text-content-5 d-flex flex-column justify-content-xxl-around justify-content-between">
                <p>Ditambah lagi, banyak sekali mikroplastik yang tidak sengaja terkonsumsi oleh teman-temanku, 
                    terkadang bisa mencapai <b>5kg</b> plastik setiap minggunya!</p>
                <p class="sub"> Bentuknya yang serupa, 
                    membuat teman-temanku sulit membedakan antara makanan dan sampah plastik. 
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section-5 container">
    <img src="{{ asset('images/about-blue/bubbles.png') }}" alt="" class="bubbles-3 d-sm-block d-none">

    <div class="container">
        <div class="row justify-content-around  py-4">
            <div class="col-lg-6 col-12 order-lg-4 order-1">
                <img src="{{ asset('images/about-blue/picture5.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-6 col-12 order-lg-3 order-2 py-lg-0 py-4 text-content-6 d-flex flex-column justify-content-xxl-around justify-content-between">
                <p> Lulu bingung nih harus minta tolong sama siapa... 
                    Bantu selamatkan tempat tinggal dan teman-teman Lulu ya, ECO Friends!
                    
                </p>
                <p class="sub"> Tindakan kecil yang ECO Friends lakukan sangat berarti bagi kami lho!</p>
            </div>
        </div>
    </div>
</div>

<div class="section-6 container">
    <div class="container">
        <div class="row justify-content-around  py-4">
            <div class="col-12 order-1">
                <img src="{{ asset('images/about-blue/picture6.jpg') }}" alt="" class="w-100">
            </div>
            <div class="col-12 order-2 py-4 text-content-7">
                <p>
                    ECO Friends mau membantu Lulu kan? 
                </p>
                <p class="sub">
                    Lulu punya solusi mudah nih untuk ECO Friends agar bisa membantu menyelamatkan lautan dan isinya! 
                    ECO Friends bisa mendapatkan informasi lebih banyak tentang solusi Lulu dengan meng click tombol dibawah ini.
                </p>
            </div>
        </div>

        <div class="row justify-content-around  py-4">
            <div class="col-lg-3 col-md-5 col-sm-6 col-12 d-flex justify-content-center">
                <button class="register-blue-button">
                    REGISTER NOW
                </button>
            </div>
        </div>
    </div>
</div>
@include('cms.template.footer')
@endsection


<!-- Javascript -->
@section('custom-js')
@endsection