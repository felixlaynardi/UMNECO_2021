@extends('cms.template.app')

@section('custom-css')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/cms/page/modal.css') }}">
<link rel="stylesheet" href="{{ asset('css/cms/page/profile.css') }}">
@endsection

@section('content')
<div class="main-container pt-5">
    <div class="row-text-center">      
        <div class="profile-header" style="padding-top:10rem;padding-bottom:10rem;background-image:url({{ asset('images/profile/Header@2x.png') }});">        
            <div class="profile-eco-friend">
                Hello ECO Friend,
            </div>
            <div class="profile-name">
                NIKOLAS
            </div>
            <a href="" class="logout">
                <img src="images/profile/Log Out@2x.png" alt="">
                <p>LOG OUT</p>
            </a>            
        </div>
    </div>
    
    <div class="container" >
        <div class="row text-center"id ="data">    
            <div class="profile-data">
                ECO Friend Profile
            </div>
        
            <div class="profile-name-eco-friend">
                Name &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
            </div>
            <div class="profile-nim-eco-friend">
                NIM &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            </div>
            <div class="profile-email-eco-friend">
                Student Email &emsp;&nbsp;:
            </div>    
        </div>
    </div> 
    
    <div class="container" id="journey">
        <div class="row-text-center">
            <div class="profile-journey">
                <p>YOUR JOURNEY IN RED</p>
            </div>
        </div>
    </div>

    <div class="container" id="count">
        <div class="row text-center">
            <div class="col-sm-4" id="day-count">
                <p>DAY 3</p>
                <p style="font-size:40px">9 Days Left<p>
            </div>
            <div class="col-sm-4" id="time-count">
                <p>Time Left For Submission<p>
                <p>01:12:34<P> 
            </div>
        </div>
    </div>
    
    <div class="logo row mx-auto">
        <div class="logo-quest">
            <a href="#0" class="open-popup"><img src="{{ asset('images/profile/Utopia Temp Logo@2x.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
        </div>
        <div class="logo-quest">
            <a href="#1" class="open-popup"><img src="{{ asset('images/profile/Rise Temp Logo@2x.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
        </div>
        <div class="logo-quest">
            <a href="#2" class="open-popup"><img src="{{ asset('images/profile/Mystery@2x.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
        </div>
        <div class="logo-quest">
            <a href="#3" class="open-popup"><img src="{{ asset('images/profile/Mystery@2x.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
        </div>
    </div>
</div>
@endsection