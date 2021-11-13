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

    <div class="section-6 container mb-5">
        <div class="container">
            <div class="row justify-content-around pt-4">
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

                @if($submit_status === 'not_login')
                    <div class="row justify-content-center order-3 py-4">
                        <div class="col-lg-3 col-md-5 col-sm-6 col-12 d-flex justify-content-center">
                            <button class="regulation-blue-button bottom-blue-button" style="width:205px">
                                <a href="{{ asset('files/Regulasi_BLUE.pdf') }}" style="text-decoration:none; color:#fff;" download>REGULATION</a>
                            </button>
                        </div>
                        <div class="col-lg-3 col-md-5 col-sm-6 col-12 d-flex justify-content-center">
                            <button class="register-blue-button bottom-blue-button" style="width:205px">
                                <a href="{{ route('registrationView') }}" style="text-decoration:none; color:#fff;">REGISTER NOW</a>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if($submit_status !== 'not_login')
    <div class="section-7">
        <img src="{{ asset('images/about-blue/Biru wave wavey.png') }}" alt="" class="wave">
        <div class="welcome-section" id="profile">
            <div class="row justify-content-around  py-4">
                <img src="{{ asset('images/about-blue/bubbles.png') }}" alt="" class="bubble1">
                <img src="{{ asset('images/about-blue/bubbles.png') }}" alt="" class="bubble2">
                <div class="col-12 col-md-10 col-lg-9 order-1 px-5">
                    <p class="hello">Hello, {{ session('username') }}</p>
                    <p class="ready">Ready to embark on an amazing tale?</p>
                </div>

                <div class="col-12 col-md-10 col-lg-9 order-2 px-5">
                    <img src="{{ asset('images/about-blue/Picture Extension Logged In.jpg') }}" alt="" class="w-100" style="border-radius: 15px">
                    <p class="ecofriend-question" >ECO Friends, apakah kalian sudah siap membantu Lulu untuk menyelamatkan rumah dan teman-teman Lulu?</p>
                </div>
            </div>
            <div class="row justify-content-around  py-4">
                <div class="col-lg-3 col-md-5 col-sm-6 col-12 d-flex justify-content-center">
                    @if(!$submit_status)
                        <button id="submit-link-blue-btn" class="submit-blue-button">
                            Submit Now!
                        </button>
                    @else
                        <button class="submit-blue-button submitted">
                            Submitted!
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
        <!-- <div class="row justify-content-around  py-4">
            <div class="col-lg-3 col-md-5 col-sm-6 col-12 d-flex justify-content-center">
                <button class="regulation-blue-button bottom-blue-button">
                    REGULATION
                </button>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-6 col-12 d-flex justify-content-center">
                <button class="register-blue-button bottom-blue-button">
                    REGISTER NOW
                </button>
            </div>
        </div>
    </div>
</div>

<div class="section-7">
    <img src="{{ asset('images/about-blue/Biru wave wavey.png') }}" alt="" class="wave">
    <div class="welcome-section">
        <div class="row justify-content-around pt-4 pb-1">
            <img src="{{ asset('images/about-blue/bubbles.png') }}" alt="" class="bubble1">
            <img src="{{ asset('images/about-blue/bubbles.png') }}" alt="" class="bubble2">    
            <div class="col-12 col-md-10 col-lg-9 order-1 px-5">      
                <p class="hello">Hello, Nutun</p>
                <p class="ready">Ready to embark on an amazing tale?</p>
            </div>
            
        
            <div class="col-12 col-md-10 col-lg-9 order-1 px-5">
                <img src="{{ asset('images/about-blue/Picture Extension Logged In.jpg') }}" alt="" class="w-100" style="border-radius: 15px">
                <p class="ecofriend-question" >ECO Friends, apakah kalian sudah siap membantu Lulu untuk menyelamatkan rumah dan teman-teman Lulu?</p>
            </div>
        </div>
        <div class="row justify-content-around pt-4">
            <div class="col-lg-3 col-md-5 col-sm-6 col-12 d-flex justify-content-center">
                
                <button class="submit-blue-button">
                    Submit Now!
                </button>
                
            </div>    
        </div>
    </div>   
</div> -->
    @include('cms.template.footer')
@endsection

<!-- Javascript -->
@section('custom-js')
    @if(session('status') == 'Blue Link Submitted')
        <script>
            Swal.fire(
            'Link Submitted',
            'You had submitted a link',
            'success'
            )
        </script>
    @endif
    @if($submit_status !== 'not_login')
        <script>window.location = "#profile";</script>
    @endif

    @if(!$submit_status)
        <script>
            let re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
            let valid = false;

            $("#submit-link-blue-btn").click(function() {
                Swal.fire({
                    title: 'Submit Link',
                    html: `
                    <form action="./submit_link_blue" method="POST" id="submit-link-blue">
                        @csrf
                        <input type="url" name="link" id="task-link" class="swal2-input" placeholder="Insert Link">
                    </form>
                    `,
                    showCancelButton: false,
                    confirmButtonText: 'Submit',
                    focusConfirm: false,
                    preConfirm: () => {
                        const url = Swal.getPopup().querySelector('#task-link').value
                        valid = true
                        if (!url || !re.test(url)) {
                            Swal.showValidationMessage(`Harus menggunakan url yang valid`)
                            valid = false
                        }
                        return {
                            url: valid
                        }
                    }
                }).then((result) => {
                    if (valid) {
                        $("#submit-link-blue").submit()
                    }
                })
            })
        </script>
    @endif
@endsection
