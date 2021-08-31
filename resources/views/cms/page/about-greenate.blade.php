@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-greenate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

@endsection

@section('content')
<div class="main">
    
    <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="leaf-1">
    <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-2"> 
    <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-3"> 
    <img src="{{ asset('images/about-greenate/chicken.png') }}" class="chicken">
    <img src="{{ asset('images/about-greenate/burger.png') }}" class="burger">
    <img src="{{ asset('images/about-greenate/fries.png') }}" class="fries">    
    <div class="white-circle d-block"></div>

    <div class="section-1 mb-5">
        

        <div class="row mt-5 pt-5 container m-auto">
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center pt-lg-0 pt-5">
                <img src="{{ asset('images/about-greenate/greenate-logo.png') }}" class="m-auto greenate-logo">
            </div>
            <div class="col-12 col-lg-6 flex-column text-end greenate-content pt-lg-0 pt-5">
                <h1 class="text-lg-end text-center pb-5">WHAT IS GREENATE?</h1> 
                    
                <p>GREENATE merupakan rangkaian acara kedua dari kegiatan UMN ECO 2021. Dengan mengusung konsep restoran cepat saji, GREENATE menyajikan kegiatan Dine-In dan Take-Away yang dapat dinikmati oleh ECO Friends.</p>
                    <ul >
                        <li><p>GREENATE mengangkat tema food waste sebagai dasar dari kegiatan karena melihat sampai saat ini, dampak explosion dari food waste sudah sangat besar terutama di Indonesia. </p></li>
                        <li><p>Kata GREENATE sendiri terinspirasi dari granat yang dapat memberikan dampak besar kepada sekitarnya. Harapan kami, GREENATE dapat mewujudkan hal yang sama melalui kegiatan yang dilakukan guna mengatasi masalah food waste di Indonesia.</p></li>
                    </ul> 
                <p  >Melalui kegiatan yang ada di GREENATE, UMN ECO 2021 ingin mengajak ECO Friends untuk mengambil bagian dalam mengurangi food waste dan memberikan dampak yang besar bagi Bumi kita.</p>
            <div class="row regulation-button px-sm-3 px-1">
                <div class="col-6">
                    <a href="instagram.com/lifosmin"><button class="p-3">Regulasi Greenate Internal</button></a>
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
        <div id="activityCarousel" class="carousel slide" data-bs-interval="false">
            <div class="carousel-inner">
                <div class="activity-carousel carousel-item active" data-bs-interval="false" id="take-away-carousel">
                    <img src="{{ asset('images/about-greenate/take-away-resize.png') }}" class="d-block m-auto col-10 col-md-6 col-lg-3" alt="...">
                    <div class="carousel-caption d-block m-auto container pt-5 px-3">
                        <p>Pada kegiatan Take-Away, ECO Friends akan disajikan dengan tiga menu yang berbeda, yaitu Exhort, Alter, dan Tidbit. Nantinya, ECO Friends akan membawa pulang menu tersebut dan melakukannya dari rumah masing-masing. Kegiatan ini dirancang dalam urutan pengolahan makanan agar ECO Friends dapat merepresentasikan kegiatan ini pada kehidupan sehari-hari sebagai langkah pencegahan food waste.  </p>
                    </div>
                </div>
                <div class="activity-carousel carousel-item " data-bs-interval="false" id="dine-in-carousel">
                    <img src="{{ asset('images/about-greenate/dine-in-resize.png') }}" class="d-block m-auto col-10 col-md-6 col-lg-3" alt="...">
                    <div class="carousel-caption d-block m-auto container pt-5 px-3">
                        <p>Berbeda dengan Take-Away, pada menu Dine-In ini ECO Friends akan berkumpul bersama-sama dan langsung menikmati menu yang disajikan, yaitu Webinar.</p>
                    </div>                    
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#activityCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#activityCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="section-3 mt-5 section-3-active" id="take-away-section">
        <div class="container d-flex">
            <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="leaf-4">
            <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-5"> 

            <div class="row text-center justify-content-center p-2 d-none d-xl-flex"> <h1>OUR MENUS</h1> </div>
            <div class="row justify-content-around content-choice d-none d-xl-flex">
                <div class="col-4 p-5">
                    <div class="choices exhort ">
                        <div class="col d-flex flex-column p-3">
                            <div class="py-5 m-5 quest-logo "><img src="{{ asset('images/about-greenate/exhort.png') }}" alt="" width="100%"></div>
                            <p class="pt-5"><b>[iɡˈzôrt]</b></p>
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
                            <div class="py-5 m-5 quest-logo"><img src="{{ asset('images/about-greenate/alter.png') }}" alt="" width="100%"></div>
                            <p class="pt-5"><b>[ˈôltər]</b></p>
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
                            <div class="py-5 m-5 quest-logo"><img src="{{ asset('images/about-greenate/tidbit.png') }}" alt=""  width="100%"></div>
                            <p class="pt-5"><b>[ˈtidˌbit]</b></p>
                            <p><b>a small piece of interesting information, or a small dish of pleasant-tasting food.</b> </p>
                            <p>Pada kegiatan Tidbit, ECO Friends akan membuat video yang memperlihatkan ECO Friends menghabiskan makanan hingga tidak tersisa, tujuannya agar sampah makanan tidak terus bertambah. Dengan begitu, ECO Friends dapat menciptakan berita gembira dengan ikut berdampak dalam mengurangi food waste.</p>
                        </div>
                        <div class="menu-circle d-lg-block d-none"></div>
                        <img src="{{ asset('images/about-greenate/soda.png') }}" class="soda">
                    </div>
                </div>
            </div>
            <div class="justify-content-around content-choice d-xl-none d-flex">           
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="choices exhort p">
                                <div class="col d-flex flex-column p-3">
                                    <div class="py-5 m-5 quest-logo "><img src="{{ asset('images/about-greenate/exhort.png') }}" alt="" width="50%"></div>
                                    <p class="pt-5"><b>[iɡˈzôrt]</b></p>
                                    <p><b>to try to influence (someone) by words or advice : to strongly urge (someone) to do something.</b> </p>
                                    <p>Pada kegiatan ini, ECO Friends akan menginfluence teman-temannya melalui media sosial dengan membuat video tentang tips bagaimana menyimpan makanan agar dapat bertahan lebih lama guna memerangi food waste.</p>

                                </div>
                                <div class="menu-circle"></div>
                                <img src="{{ asset('images/about-greenate/burger.png') }}" class="burger-menu">
                            </div> 
                        </div>
                        <div class="swiper-slide">
                            <div class="choices alter ">
                                <div class="col d-flex flex-column p-3">
                                    <div class="py-5 m-5 quest-logo"><img src="{{ asset('images/about-greenate/alter.png') }}" alt="" width="50%"></div>
                                    <p class="pt-5"><b>[ˈôltər]</b></p>
                                    <p><b>change or cause to change in character or composition, typically in a comparatively small but significant way / to make different in some way.</b> </p>
                                    <p>Pada kegiatan Alter, ECO Friends akan melakukan kegiatan sederhana yang dapat berdampak besar bagi bumi, yakni mengolah kembali sisa makanan menjadi hidangan baru. Dengan begitu, kita dapat memerangi food waste dengan menjadi lebih bertanggung jawab terhadap makanan.</p>
                                </div>
                                <div class="menu-circle"></div>
                                <img src="{{ asset('images/about-greenate/pudding.png') }}" class="pudding">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="choices tidbit ">
                                <div class="col d-flex flex-column p-3">
                                    <div class="py-5 m-5 quest-logo"><img src="{{ asset('images/about-greenate/tidbit.png') }}" alt=""  width="50%"></div>
                                    <p class="pt-5"><b>[ˈtidˌbit]</b></p>
                                    <p><b>a small piece of interesting information, or a small dish of pleasant-tasting food.</b> </p>
                                    <p>Pada kegiatan Tidbit, ECO Friends akan membuat video yang memperlihatkan ECO Friends menghabiskan makanan hingga tidak tersisa, tujuannya agar sampah makanan tidak terus bertambah. Dengan begitu, ECO Friends dapat menciptakan berita gembira dengan ikut berdampak dalam mengurangi food waste.</p>
                                </div>
                                <div class="menu-circle"></div>
                                <img src="{{ asset('images/about-greenate/soda.png') }}" class="soda">
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                
                    <div class="swiper-button-prev"><div class="container-navi-swipe"> </div></div>
                    
                    
                    <div class="swiper-button-next"><div class="container-navi-swipe"> </div></div>

                </div>
            </div>

            <div class="row justify-content-center text-center mt-2">
                <h6>Not a member yet?</h6>
            </div>
            <div class="row justify-content-center text-center">
                <a href="" class="py-3"><button class="become-eco-friends-button">Become ECO Friends</button></a>
            </div>
        </div>
    </div>

    <div class="section-3 mt-5" id="dine-in-section">
        <div class="container d-flex">
            <img src="{{ asset('images/about-greenate/top-leaf.png') }}" class="leaf-4">
            <img src="{{ asset('images/about-greenate/bottom-leaf.png') }}" class="leaf-5"> 
            <img src="{{ asset('images/about-greenate/chicken.png') }}" class="dine-in-chicken">
            <div class="row content-2">
                <div class="dine-in-text col-lg-6 col-12 ">
                    <h1>DINE-IN</h1>
                    <p>Webinar yang diselenggarakan pada GREENATE akan mengangkat topik food waste dengan tagline “Too Good To Be Waste”. </p>
                    <p>Melalui Webinar ini, ECO Friends diharapkan dapat menyerap materi yang disampaikan dan mengimplementasikannya di dalam kehidupan sehari-hari untuk mengurangi food waste di Bumi kita.</p>
                </div>
            </div>
            <div class="row justify-content-center text-center mt-2 zoom-container">
                <img src="{{ asset('images/about-greenate/zoom.png') }}" class="zoom-logo">
            </div>
        </div>
    </div>

    
</div>



@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    $('#activityCarousel').bind('slide.bs.carousel', function (e) {
        if($('#take-away-carousel').hasClass('active')){
            $('#take-away-section').toggleClass('section-3-active');
            $('#dine-in-section').toggleClass('section-3-active');
        }
        else if($('#dine-in-carousel').hasClass('active')){
            $('#take-away-section').toggleClass('section-3-active');
            $('#dine-in-section').toggleClass('section-3-active');
        }
        else{
            console.log("none");
        }
    });
</script>

<script>
  

    function myFunction(x){
        if(x.matches){
            var maxHeight = 0;

            var divs = jQuery(".section-3 .choices");
            jQuery.each(divs, function(){
                var height = jQuery(this).height();
                if(maxHeight<height)
                    maxHeight = height;

            });
            divs.height(maxHeight);
        }        
    }
    function matchHeight(x){
        var maxHeight = 0;

        var divs = jQuery(".activity-carousel");
        jQuery.each(divs, function(){
            var height = jQuery(this).height();
            if(maxHeight<height)
                maxHeight = height;
        });
        divs.height(maxHeight);
    }
    var x = window.matchMedia("(min-width: 1200px)");
    var y = window.matchMedia("(min-width: 1200px)");
    
    myFunction(x);
    matchHeight();

</script>

@endsection