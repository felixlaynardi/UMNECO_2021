@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-red.css') }}">
    <style>
        .sweet-alert-container {
            background-image: url("{{ asset('images/profile/illust@3x-20.jpg') }}");
            background-size: 100%;
            border-radius: 5px;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
<div class="main1">
    <img src="{{ asset('images/about-red/cloud.png') }}" class="cloud">
    <img src="{{ asset('images/about-red/circle.png') }}" class="circle d-lg-block d-none"> 
    <div class="white-circle d-lg-block d-none"></div>
    
    <div class="section-1">
        <div class="row container">
            <div class="col-lg-6 col-md-8 col-sm-12 red-content about-logo ">
                 <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-red  animate__animated animate__zoomIn animate__delay-1s">
                 <div class="white-bg"></div>
                </div>
            <div class="col-lg-6 col-sm-12 red-content text animate__animated animate__fadeInRight animate__delay-1s"> 
                <h1 >WHAT IS RED?</h1> 
                <h4 >Real . Emergency . Daily life</h4>
                <p ><b>Real Emergency Daily life atau disingkat RED</b> adalah salah satu rangkaian kegiatan, sekaligus acara pembuka dari kegiatan <b>UMN ECO 2021</b>.</p>
                    <ul >
                        <li><p><b>Real Emergency</b> dikaitkan dengan masalah-masalah pencemaran lingkungan alam yang sedang terjadi pada dunia saat ini.</p></li>
                        <li><p><b>Daily life dikaitkan</b> dengan kegiatan sehari-hari yang dapat kita lakukan untuk membantu mengurangi pencemaran lingkungan alam yang sedang terjadi. </p></li>
                    </ul> 
                <p  >Melalui quests yang ada di kegiatan <b>RED, UMN ECO 2021</b> ingin mengajak <b>ECO Friends</b> untuk mengambil bagian dalam mengurangi pencemaran lingkungan alam dan membangun kebiasaan baru secara nyata di kegiatan sehari-hari kalian yang dapat berdampak untuk mengurangi pencemaran lingkungan alam.</p>
                <a href="{{ asset('files/Regulasi_RED.pdf') }}" download class="button-container mx-auto" id="pdf-download">Unduh Peraturan dan Ketentuan RED</a>
                
            </div>
            
        </div>
    </div>

    <div class="section-2">
        <img src="{{ asset('images/about-red/city.png') }}" class="city"> 
    </div>
    
</div>

<div class="main2">

    <!-- --------------------Small device-------------------------- -->

    <div id="carouselExampleControls" class="carousel slide d-lg-none d-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="item rise row carousel-item active " data-bs-interval="1000000000">
                <div class="col-lg-5 col-sm-5 slide-logo">
                    <img src="{{ asset('images/rise.png') }}" class="logo-rise w-100 pb-5" >
                </div>
                <div class="col-lg-5 col-sm-12 ">
                    <p>Kata <em>Rise</em> dalam Bahasa Inggris memiliki arti permulaan/terbit. Pada <em>quest</em> wajib ini, <b>ECO Friends</b> akan melakukan kegiatan menanam tanaman, dimana ini merupakan permulaan sebuah kehidupan baru dalam tanaman. Nantinya, kegiatan <em>Rise</em> akan berjalan dari rumah <b>ECO Friends</b> masing-masing dan dipublikasikan ke Instagram selama 12 hari.</p>
                    <p>Yuk, sama-sama kita wujudkan perubahan dengan mulai menanam tanaman! Let’s begin our journey! #TheBeginningofANewLife #RealEmergencyDailylife</p>                </div>
            </div>
            <div class="item utopia row carousel-item " data-bs-interval="1000000000">
                <div class="col-lg-5 col-sm-5 slide-logo">
                    <img src="{{ asset('images/utopia.png') }}" class="logo-utopia w-100 pb-5">
                </div>
                <div class="col-lg-5 col-sm-12">
                    <p>Kata <em>Utopia</em> dalam Bahasa Inggris memiliki arti, "masyarakat atau lingkungan yang memiliki kualitas hampir sempurna atau sesuai kriteria". Penggunaan kata ini secara spesifik menggambarkan kondisi lingkungan yang lebih baik dan lebih bersih setelah melakukan kegiatan <em>Utopia</em>, dimana <b>ECO Friends</b> akan melakukan penghapusan sampah digital berupa e-mail dan dipublikasikan di Instagram selama 12 hari.</p>
                    <p>Sama seperti badan kita yang jika semakin banyak beraktivitas, semakin banyak energi yang dikeluarkan, hal ini berlaku juga pada e-mail. Menurut penelitian dari </em>Digital Cleanup Day</em>, bila kita membiarkan 1 GB e-mail tersimpan selama satu tahun, kita menggunakan energi sebesar 32,1 kWh yang setara dengan daya oven memanggang selama 10 jam. Hal ini bisa menyebabkan adanya polusi karbon ke bumi. Kebayang kan berapa banyak energi dan polusi karbon yang dikeluarkan!</p>
                    <p>Oleh karena itu, yuk, kita selamatkan bumi dimulai dari hal kecil, yaitu menghapus sampah digital berupa e-mail di kegiatan Utopia! #SmallActforBigImpact #RealEmergencyDailylife</p>
                </div>
            </div>
            <div class="item raconteur row carousel-item" data-bs-interval="1000000000">
                <div class="col-lg-5 col-sm-5 slide-logo">
                    <img src="{{ asset('images/raconteur.png') }}" class="logo-reconteur w-100 pb-5">
                </div>
                <div class="col-lg-5 col-sm-12">
                    <p>Kata <em>raconteur</em> dalam Bahasa Inggris memiliki arti “orang yang pandai bercerita”. Selain menjadi tempat atau wadah bagi <b>ECO Friends</b> untuk peduli terhadap lingkungan alam, UMN ECO juga ingin mengambil ranah peduli terhadap hewan-hewan yang selama ini tidak terlalu diketahui kelangkaan dan dampaknya terhadap Bumi.</p>
                    <p>Contohnya adalah Owa Jawa! Ternyata, primata asli dari Pulau Jawa ini ikut berkontribusi dalam menyebarkan benih berbagai pohon di hutan yang dapat melestarikan Bumi. Sayangnya, populasi mereka terancam punah karena ulah manusia yang merusak habitatnya dan memburunya untuk diperjualbelikan secara ilegal sebagai hewan peliharaan. Padahal, Owa Jawa mempunyai sifat yang unik, dimana mereka hanya bisa melakukan reproduksi dengan satu Owa Jawa saja. Dengan populasinya yang terancam punah, mereka jadi susah untuk dibudidayakan. </p>
                    <p>Kami tunggu cerita-cerita menarik yang lain dari kalian ya, <b>ECO Friends!</b> #TellYourTale #RealEmergencyDailylife</p>
                </div>
            </div>
            <div class="item utile row carousel-item " data-bs-interval="1000000000">
                <div class="col-lg-5 col-sm-5 slide-logo">
                    <img src="{{ asset('images/utile.png') }}" class="logo-utile w-100 pb-5">
                </div>
                <div class="col-lg-5 col-sm-12">
                <p>Kata <em>Utile</em> dalam Bahasa Inggris berarti “berguna atau bermanfaat”. Di Utile, ECO Friends kami berharap pandangan <b>ECO Friends</b> terhadap barang-barang yang tadinya dianggap sudah tidak berguna di dalam rumah masing-masing, ternyata masih bisa digunakan untuk menghasilkan suatu karya.</p>
                <p>Tahukah kalian kalau Kardus bekas yang menumpuk di rumah kalian dapat dijadikan berbagai macam kerajinan tangan? Mulai dari bingkai foto, celengan, hingga rak penyimpan buku atau barang-barang kalian. Selain bermanfaat bagi diri kita sendiri, kita juga dapat menyelamatkan lingkungan, loh, <b>ECO Friends</b>.</p>
                <p>Maka dari itu, yuk, kita berkreasi bersama untuk membuat barang-barang bekas tersebut menjadi sesuatu yang bisa bermanfaat! #UselessBecomeUseful #RealEmergencyDailylife</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- -------------------------------Monitor-------------------------- -->

    <div class="section-3 d-lg-block d-none">
        <div class="row mission-logo-container-row px-4" id="mission-btn">
            <div class="col-lg-6 mission-logo-container-col"> <span class="mission-logo" data="rise" id="rise-btn"></span> </div>
            <div class="col-lg-6 mission-logo-container-col"> <span class="mission-logo" data="utopia" id="utopia-btn"></span>  </div>
            <div class="col-lg-6 mission-logo-container-col"> <span class="mission-logo" data="raconteur" id="raconteur-btn"></span>  </div>
            <div class="col-lg-6 mission-logo-container-col"> <span class="mission-logo" data="utile" id="utile-btn"></span>  </div>
        </div>
        
        <div class="content-container" id="rise">
            <span class="close-btn" data="rise">&times;</span>
            <div class="item rise row">
                <div class="col-6">
                    <p>Kata <em>Rise</em> dalam Bahasa Inggris memiliki arti permulaan/terbit. Pada <em>quest</em> wajib ini, <b>ECO Friends</b> akan melakukan kegiatan menanam tanaman, dimana ini merupakan permulaan sebuah kehidupan baru dalam tanaman. Nantinya, kegiatan <em>Rise</em> akan berjalan dari rumah <b>ECO Friends</b> masing-masing dan dipublikasikan ke Instagram selama 12 hari.</p>
                    <p>Yuk, sama-sama kita wujudkan perubahan dengan mulai menanam tanaman! Let’s begin our journey! #TheBeginningofANewLife #RealEmergencyDailylife</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/rise.png') }}" class="logo-rise w-100" >
                </div>
            </div>
        </div>

        <div class="content-container" id="utopia">
            <span class="close-btn" data="utopia">&times;</span>
            <div class="item utopia row">
                <div class="col-6">
                    <p>Kata <em>Utopia</em> dalam Bahasa Inggris memiliki arti, "masyarakat atau lingkungan yang memiliki kualitas hampir sempurna atau sesuai kriteria". Penggunaan kata ini secara spesifik menggambarkan kondisi lingkungan yang lebih baik dan lebih bersih setelah melakukan kegiatan <em>Utopia</em>, dimana <b>ECO Friends</b> akan melakukan penghapusan sampah digital berupa e-mail dan dipublikasikan di Instagram selama 12 hari.</p>
                    <p>Sama seperti badan kita yang jika semakin banyak beraktivitas, semakin banyak energi yang dikeluarkan, hal ini berlaku juga pada e-mail. Menurut penelitian dari </em>Digital Cleanup Day</em>, bila kita membiarkan 1 GB e-mail tersimpan selama satu tahun, kita menggunakan energi sebesar 32,1 kWh yang setara dengan daya oven memanggang selama 10 jam. Hal ini bisa menyebabkan adanya polusi karbon ke bumi. Kebayang kan berapa banyak energi dan polusi karbon yang dikeluarkan!</p>
                    <p>Oleh karena itu, yuk, kita selamatkan bumi dimulai dari hal kecil, yaitu menghapus sampah digital berupa e-mail di kegiatan Utopia! #SmallActforBigImpact #RealEmergencyDailylife</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/utopia.png') }}" class="logo-rise w-100" >
                </div>
            </div>
        </div>

        <div class="content-container" id="raconteur">
            <span class="close-btn" data="raconteur">&times;</span>
            <div class="item raconteur row">
                <div class="col-6">
                    <p>Kata <em>raconteur</em> dalam Bahasa Inggris memiliki arti “orang yang pandai bercerita”. Selain menjadi tempat atau wadah bagi <b>ECO Friends</b> untuk peduli terhadap lingkungan alam, UMN ECO juga ingin mengambil ranah peduli terhadap hewan-hewan yang selama ini tidak terlalu diketahui kelangkaan dan dampaknya terhadap Bumi.</p>
                    <p>Contohnya adalah Owa Jawa! Ternyata, primata asli dari Pulau Jawa ini ikut berkontribusi dalam menyebarkan benih berbagai pohon di hutan yang dapat melestarikan Bumi. Sayangnya, populasi mereka terancam punah karena ulah manusia yang merusak habitatnya dan memburunya untuk diperjualbelikan secara ilegal sebagai hewan peliharaan. Padahal, Owa Jawa mempunyai sifat yang unik, dimana mereka hanya bisa melakukan reproduksi dengan satu Owa Jawa saja. Dengan populasinya yang terancam punah, mereka jadi susah untuk dibudidayakan. </p>
                    <p>Kami tunggu cerita-cerita menarik yang lain dari kalian ya, <b>ECO Friends!</b> #TellYourTale #RealEmergencyDailylife</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/raconteur.png') }}" class="logo-rise w-100" >
                </div>
            </div>
        </div>

        <div class="content-container" id="utile">
            <span class="close-btn" data="utile">&times;</span>
            <div class="item utile row">
                <div class="col-6">
                <p>Kata <em>Utile</em> dalam Bahasa Inggris berarti “berguna atau bermanfaat”. Di Utile, ECO Friends kami berharap pandangan <b>ECO Friends</b> terhadap barang-barang yang tadinya dianggap sudah tidak berguna di dalam rumah masing-masing, ternyata masih bisa digunakan untuk menghasilkan suatu karya.</p>
                <p>Tahukah kalian kalau Kardus bekas yang menumpuk di rumah kalian dapat dijadikan berbagai macam kerajinan tangan? Mulai dari bingkai foto, celengan, hingga rak penyimpan buku atau barang-barang kalian. Selain bermanfaat bagi diri kita sendiri, kita juga dapat menyelamatkan lingkungan, loh, <b>ECO Friends</b>.</p>
                <p>Maka dari itu, yuk, kita berkreasi bersama untuk membuat barang-barang bekas tersebut menjadi sesuatu yang bisa bermanfaat! #UselessBecomeUseful #RealEmergencyDailylife</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/utile.png') }}" class="logo-rise w-100" >
                </div>
            </div>
        </div>
    </div>

    <div class="section-4">
        <a href="#" class="button-container">
            BECOME ECO FRIENDS
        </a>
    </div>
</div> 


<!-- <div class="popup-bg" id="utopia">
    <div class="popup-content popup-utopia">
        <span class="close-btn">&times;</span>
        <div class="row mission-content">
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>

<div class="popup-bg" id="rise">
    <div class="popup-content popup-rise">
        <span class="close-btn">&times;</span>
        <div class="row mission-content">
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>



<div class="popup-bg" id="raconteur">
    <div class="popup-content popup-raconteur">
        <span class="close-btn">&times;</span>
        <div class="row mission-content">
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>

<div class="popup-bg" id="utile">
    <div class="popup-content popup-utile">
        <span class="close-btn">&times;</span>
        <div class="row mission-content">
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div> -->
@include('cms.template.footer')

@endsection

@section('custom-js')
<script>
    // $('.carousel').carousel()
// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("item");
//   var dots = document.getElementsByClassName("dot");

//     if (n > slides.length) {
//         slideIndex = 1
//     }    
//     if (n < 1) {
//         slideIndex = slides.length
//     }
//     for (i = 0; i < slides.length; i++) {
//         // slides[i].style.display = "none";
        
//         $(slides[i]).fadeOut(0);
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
        
//     }
    
// //   slides[slideIndex-1].style.display = "flex"; 
//     $(slides[slideIndex-1]).fadeIn(1000).css("display", "flex"); 
//     dots[slideIndex-1].className += " active";
// }
</script>
<script>
    Swal.fire(
        {
            title: '',
            html: `
            <div class="container">
            <h2>THANK YOU, ECO FRIENDS!</h2>
                <div class="background">
                    <div class="sweet-alert-container">
                        <div class="utile-box">
                            <img src="{{ asset('images/utile.png') }}" />
                        </div>
                        <div class="rise-box">
                            <img src="{{ asset('images/rise.png') }}" />
                        </div>
                        <div class="utopia-box">
                            <img src="{{ asset('images/utopia.png') }}" />
                        </div>
                        <div class="raconteur-box">
                            <img src="{{ asset('images/raconteur.png') }}" />
                        </div>
                    </div>
                </div>
                <h6 class="modal-bottom">Your participation in RED have brought a great amount of positive impacts for our Earth</h6>

            </div>
            
            `,
            confirmButtonText: 'Continue',
            showCancelButton: false,
        }
    )
</script>
<script>
    
var popupBtn = document.querySelectorAll(".mission-logo");

popupBtn.forEach(function(btn) {
    btn.onclick = function(){
        var popup = btn.getAttribute("data");


        document.getElementById("mission-btn").style.position = "absolute";
        document.getElementById(popup).style.animation = "slidein 500ms linear";
        document.getElementById(popup).style.display = "flex";
    };
});

var closeBtn = document.querySelectorAll(".close-btn");

closeBtn.forEach(function(btn) {
    // btn.onclick = function(){
    //     var popup = (btn.closest(".content-container").style.display = "none");
        
    //     document.getElementById("mission-btn").style.display = "flex";
    // };
    btn.onclick = function(){
        var popup = btn.getAttribute("data");

       
        document.getElementById(popup).style.animation = "slideout 500ms linear";
        $(btn.closest(".content-container")).fadeOut(500);
        // document.getElementById(popup).style.display = "none";
    };
});

window.onclick = function(e){
    if(e.target.classList.contains('popup-bg')) {
        e.target.style.display = "none";
    }
};
</script>



@endsection
