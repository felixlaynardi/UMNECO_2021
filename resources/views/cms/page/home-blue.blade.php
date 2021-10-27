@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/home-blue.css') }}">

@endsection

@section('content')

<div class="container container-blue-home p-sm-5 py-5 px-3 mb-5">
    <div class="px-md-5 px-1 mt-5">
        <div class="row justify-content-around  py-4">
            <div class="col-lg-5 col-md-11 col-12 order-1">
                <img src="{{ asset('images/about-blue/image-1.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-5 col-md-11 col-12 order-2 py-lg-0 py-4">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Mauris quam vitae tellus, lectus sapien at netus quam dignissim. 
                Auctor bibendum urna donec at. Aliquam accumsan amet sit volutpat volutpat, purus non sed. 
                At tellus lorem vel ridiculus mauris, enim, placerat nunc. Duis eget posuere rutrum nulla volutpat. 
                Id ante lobortis elementum faucibus vel maecenas ante orci at. Justo, pulvinar aliquam sed odio. 
                </p>
            </div>
        </div>
        
        <div class="row justify-content-around  py-4">
            <div class="col-lg-5 col-md-11 col-12 order-lg-4 order-1">
                <img src="{{ asset('images/about-blue/image-2.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-5 col-md-11 col-12 order-lg-3 order-2 py-lg-0 py-4">
                <p>
                Halo Eco Friends, kenalin nama aku Lulu! Aku hidup di dasar laut bersama dengan teman-temanku. 
                Hobiku mengumpulkan barang-barang yang jatuh dari permukaan laut. 
                </p>
            </div>
        </div>

        <div class="row justify-content-around  py-4">
            <div class="col-md-11 col-12 order-1">
                <img src="{{ asset('images/about-blue/image-3.png') }}" alt="" class="w-100">
            </div>
            <div class="col-md-11 col-12 order-2 py-4">
                <p>
                Ini adalah tempat tinggalku. Dulu tempat tinggalku bersih dan indah sekali, tidak seperti yang kalian lihat saat ini. 
                Karena wabah plastik yang melanda daerah tempat tinggalku, banyak sekali teman-teman ku yang jatuh sakit.
                </p>
            </div>
        </div>

        <div class="row justify-content-around  py-4">
            <div class="col-lg-5 col-md-11 col-12 order-1">
                <img src="{{ asset('images/about-blue/image-4.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-5 col-md-11 col-12 order-2 py-lg-0 py-4">
                <p>
                *Penyebabnya karena air tercemar mikro plastik dan wabah ini terjadi karena ulah manusia. 
                Dalam semingguz,banyak sekali mikroplastik terkonsumsi olehku dan teman-temanku, 
                bahkan dapat mencapai 5 kg plastik setiap minggunya!
                </p>
            </div>
        </div>

        <div class="row justify-content-around  py-4">
            <div class="col-md-11 col-12 order-1">
                <img src="{{ asset('images/about-blue/image-5.png') }}" alt="" class="w-100">
            </div>
            <div class="col-md-11 col-12 order-2 py-4">
                <p>
                Akibat ulah manusia, teman-teman ku bingung membedakan mana yang makanan dan mana yang bukan, 
                karena bau dan bentuk yang dihasilkan sama. 
                Rumahku Juga tercemar mikroplastik yang menghasilkan polutan seperti PCB dan 
                pestisida sehingga kotor dan membuat teman-temanku sakit!
                </p>
            </div>
        </div>

        <div class="row justify-content-around  py-4">
            <div class="col-lg-5 col-md-11 col-12 order-lg-2 order-1">
                <img src="{{ asset('images/about-blue/image-6.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-5 col-md-11 col-12 order-lg-1 order-2 py-lg-0 py-4">
                <p>
                Saat ini lulu bingung harus minta tolong sama siapa, Eco Friends! tolong selamatkan tempat tinggal kami!
                </p>
            </div>
        </div>

        <div class="row justify-content-around  py-4">
            <div class="col-md-11 col-12 order-1">
                <img src="{{ asset('images/about-blue/image-7.png') }}" alt="" class="w-100">
            </div>
            <div class="col-md-11 col-12 order-2 py-4">
                <p>
                Lulu punya solusi yang bisa Eco Friends lakukan agar tempat tinggal dan teman-teman lulu dapat terselamatkan dari wabah plastik ini. 
                Eco Friends dapat mengakses informasi lebih banyak lagi mengenai solusi yang akan lulu tawarkan melalui tombol dibawah ini. 
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