@extends('cms.template.app')

@section('custom-css')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cms/page/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/profile.css') }}">
@endsection

@section('content')
<div id="main" class="main-container pt-5">
    <div class="profile-header" style="padding-top:10rem;padding-bottom:10rem;background-image:url({{ asset('images/profile/Header@2x.png') }});">
        <div class="profile-eco-friend">
            Hello ECO Friend,
        </div>
        <div class="profile-name">
            NIKOLAS
        </div>
        <a href="" class="logout">
            <img src="images/profile/Log Out@2x.png" alt=""><p>LOG OUT</p>
        </a>
        </div>
        <div class="profile-data">
            ECO Friend Profile
        </div>
        <div class="profile-data-eco-friend">
            <div class="profile-name-eco-friend">
                Name:
            </div>
            <div class="profile-nim-eco-friend">    
                NIM:
            </div>
            <div class="profile-email-eco-friend">
                Student Email:
            </div>
        </div>
<!--         
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/home">Logout<i class="fa fa-power-off"></i></a></li> -->
        
        <div class="profile-journey-bg" style="padding-top:10rem;padding-bottom:10rem;background-image:url({{ asset('images/profile/Bar Merah Your Journey@2x.png') }});">
            <div class="profile-journey">
                YOUR JOURNEY IN RED
            </div>
        </div>
    </div>
</div>
@endsection