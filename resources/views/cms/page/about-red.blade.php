@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-red.css') }}">
@endsection

@section('content')
<div class="main">
    <img src="{{ asset('images/about-red/cloud.png') }}" class="cloud">
    <img src="{{ asset('images/about-red/circle.png') }}" class="circle d-block d-lg-block d-sm-none" > 
    <div class="white-circle"><img src="{{ asset('images/about-red/circle.png') }}" alt=""></div>
    
    <div class="container section-1">
        <div class="row">
            <div class="col-lg-6 col-sm-12 red-content about-logo"> <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-red"></div>
            <div class="col-lg-6 col-sm-12 red-content text"> 
                <h1>WHAT IS RED?</h1> 
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            
        </div>
    </div>

    <div class="section-2">
        <img src="{{ asset('images/about-red/city.png') }}" class="city"> 
    </div>
    
    <div class="section-3 ">
        <div class="row mission-logo-container-row container">
            <div class="col-lg-6 col-sm-12 mission-logo-container-col"> <span class="mission-logo" onclick="togglePopup1()"id="rise-btn"></span> </div>
            <div class="col-lg-6 col-sm-12 mission-logo-container-col"> <span class="mission-logo" onclick="togglePopup2()" id="utopia-btn"></span>  </div>
            <div class="col-lg-6 col-sm-12 mission-logo-container-col"> <span class="mission-logo" onclick="togglePopup3()" id="raconteur-btn"></span>  </div>
            <div class="col-lg-6 col-sm-12 mission-logo-container-col"> <span class="mission-logo" onclick="togglePopup4()" id="utile-btn"></span>  </div>
            <!-- <div class="col-lg-6 col-sm-12 "> <img src="{{ asset('images/about-red/temp-logo.png') }}" class=""></div>
            <div class="col-lg-6 col-sm-12 "> <img src="{{ asset('images/about-red/temp-logo.png') }}" class=""></div>
            <div class="col-lg-6 col-sm-12 "> <img src="{{ asset('images/about-red/temp-logo.png') }}" class=""></div>
            <div class="col-lg-6 col-sm-12 "> <img src="{{ asset('images/about-red/temp-logo.png') }}" class=""></div> -->
        </div>
    </div>

    <div class="section-4 row">
        <a href="#" class="button-container">
            <img src="{{ asset('images/about-red/button.png') }}" class="button"> 
            <p class="button-text"> BECOME ECOFRIENDS</p>
        </a>
    </div>
</div>

<div class="popup-bg" id="rise">
    <div class="popup-content popup-rise">
        <span class="close-btn" onclick="togglePopup1()">&times;</span>
        <div class="row mission-content">
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>

<div class="popup-bg" id="utopia">
    <div class="popup-content popup-utopia">
        <span class="close-btn" onclick="togglePopup2()">&times;</span>
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
        <span class="close-btn" onclick="togglePopup3()">&times;</span>
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
        <span class="close-btn" onclick="togglePopup4()">&times;</span>
        <div class="row mission-content">
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>


@endsection

@section('custom-js')

<script src="{{ asset('js/cms/page/about-red.js') }}"></script>

@endsection
