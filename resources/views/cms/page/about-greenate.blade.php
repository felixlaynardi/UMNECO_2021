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
    <img src="{{ asset('images/about-greenate/chicken.png') }}" class="chicken">
    <img src="{{ asset('images/about-greenate/burger.png') }}" class="burger">
    <img src="{{ asset('images/about-greenate/fries.png') }}" class="fries">    
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
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="d-block w-50 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="d-block w-50 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="d-block w-50 m-auto" alt="...">
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

    <div class="section-3 mt-5">
        <div class="container d-flex">
            <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="leaf-4">
            <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-5"> 

            <div class="row text-center justify-content-center p-2"> <h1>OUR MENUS</h1> </div>
            <div class="row justify-content-around content-choice">
                <div class="col-4 p-5">
                    <div class="choices exhort ">
                        <div class="col d-flex flex-column p-3">
                            <div class="pb-5 quest-logo"><img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" alt="" class="w-auto"></div>
                            <p><b>[iɡˈzôrt]</b></p>
                            <p><b>to try to influence (someone) by words or advice : to strongly urge (someone) to do something.</b> </p>
                            <p>Pada kegiatan ini, ECO Friends akan menginfluence teman-temannya melalui media sosial dengan membuat video tentang tips bagaimana menyimpan makanan agar dapat bertahan lebih lama guna memerangi food waste.</p>

                        </div>
                        <div class="menu-circle d-lg-block d-none"></div>
                        <img src="{{ asset('images/about-greenate/burger.png') }}" class="burger-menu">
                    </div> 
                    
                </div>
                <div class="col-4 p-5">
                    <div class="choices alter ">
                        <div class="col d-flex flex-column p-3">
                            <div class="pb-5 quest-logo"><img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" alt="" class="w-auto"></div>
                            <p><b>[ˈôltər]</b></p>
                            <p><b>to try to influence (someone) by words or advice : to strongly urge (someone) to do something. [ˈôltər] change or cause to change in character or composition, typically in a comparatively small but significant way / to make different in some way.</b> </p>
                            <p>Pada kegiatan Alter, ECO Friends akan melakukan kegiatan sederhana yang dapat berdampak besar bagi bumi, yakni mengolah kembali sisa makanan menjadi hidangan baru. Dengan begitu, kita dapat memerangi food waste dengan menjadi lebih bertanggung jawab terhadap makanan.</p>
                        </div>
                        <div class="menu-circle d-lg-block d-none"></div>
                        <img src="{{ asset('images/about-greenate/pudding.png') }}" class="pudding">
                    </div>
                </div>
                <div class="col-4 p-5">
                    <div class="choices tidbit ">
                        <div class="col d-flex flex-column p-3">
                            <div class="pb-5 quest-logo"><img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" alt="" class="w-auto"></div>
                            <p><b>[ˈtidˌbit]</b></p>
                            <p><b>a small piece of interesting information, or a small dish of pleasant-tasting food.</b> </p>
                            <p>Pada kegiatan Tidbit, ECO Friends akan membuat video yang memperlihatkan ECO Friends menghabiskan makanan hingga tidak tersisa, tujuannya agar sampah makanan tidak terus bertambah. Dengan begitu, ECO Friends dapat menciptakan berita gembira dengan ikut berdampak dalam mengurangi food waste.</p>
                        </div>
                        <div class="menu-circle d-lg-block d-none"></div>
                        <img src="{{ asset('images/about-greenate/soda.png') }}" class="soda">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-2">
                <h6>Not a member yet?</h6>
            </div>
            <div class="row justify-content-center text-center">
                <a href="" class="py-3"><button class="">Become ECO Friends</button></a>
            </div>
        </div>
    </div>
</div>



@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')

<script>
    var maxHeight = 0;

    var divs = jQuery(".section-3 .choices");

    jQuery.each(divs, function(){
        var height = jQuery(this).height();
        if(maxHeight<height)
            maxHeight = height;

    });
    divs.height(maxHeight);
</script>

@endsection