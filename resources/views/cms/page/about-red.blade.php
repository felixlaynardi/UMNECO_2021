@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-red.css') }}">
@endsection

@section('content')
<div class="main1">
    <img src="{{ asset('images/about-red/cloud.png') }}" class="cloud">
    <img src="{{ asset('images/about-red/circle.png') }}" class="circle d-lg-block d-none"> 
    <div class="white-circle d-lg-block d-none"></div>
    
    <div class="section-1">
        <div class="row container">
            <div class="col-lg-6 col-md-8 col-sm-12 red-content about-logo">
                 <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-red">
                 <div class="white-bg"></div>
                </div>
            <div class="col-lg-6 col-sm-12 red-content text"> 
                <h1>WHAT IS RED?</h1> 
                <h4>Real . Emergency . Daily Life</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                    <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-rise w-100" >
                </div>
                <div class="col-lg-5 col-sm-12 ">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="item utopia row carousel-item " data-bs-interval="1000000000">
                <div class="col-lg-5 col-sm-5 slide-logo">
                    <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-utopia w-100">
                </div>
                <div class="col-lg-5 col-sm-12">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="item raconteur row carousel-item" data-bs-interval="1000000000">
                <div class="col-lg-5 col-sm-5 slide-logo">
                    <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-reconteur w-100">
                </div>
                <div class="col-lg-5 col-sm-12">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="item utile row carousel-item " data-bs-interval="1000000000">
                <div class="col-lg-5 col-sm-5 slide-logo">
                    <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-utile w-100">
                </div>
                <div class="col-lg-5 col-sm-12">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac ornare vitae lobortis non vitae.</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-rise w-100" >
                </div>
            </div>
        </div>

        <div class="content-container" id="utopia">
            <span class="close-btn" data="utopia">&times;</span>
            <div class="item utopia row">
                <div class="col-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac ornare vitae lobortis non vitae.</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-rise w-100" >
                </div>
            </div>
        </div>

        <div class="content-container" id="raconteur">
            <span class="close-btn" data="raconteur">&times;</span>
            <div class="item raconteur row">
                <div class="col-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac ornare vitae lobortis non vitae.</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-rise w-100" >
                </div>
            </div>
        </div>

        <div class="content-container" id="utile">
            <span class="close-btn" data="utile">&times;</span>
            <div class="item utile row">
                <div class="col-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac ornare vitae lobortis non vitae.</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-rise w-100" >
                </div>
            </div>
        </div>
    </div>

    <div class="section-4 row">
        <a href="#" class="button-container">
            <img src="{{ asset('images/about-red/button.png') }}" class="button"> 
            <p class="button-text"> BECOME ECOFRIENDS</p>
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