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
            <div class="container">    
                <div class="profile-eco-friend ">
                    Hello ECO Friend,
                </div>
                <div class="profile-name ">
                    <p style="text-transform: uppercase;">{{$data->name}}</p>
                </div>
            </div>
            <a href="{{url('logout')}}" class="logout">
                <img src="images/profile/Log Out@2x.png" alt="">
                <p>LOG OUT</p>
            </a>            
        </div>
    </div>
    
    <div class="container">
        <div class="row text-center"id ="data">    
            <div class="profile-data">
                ECO Friend Profile
            </div>
        <div>
    </div>
    <div class="container">
        <div class="row text-center"id ="name">
            <div class="profile-name-eco-friend col-sm-12 col-md-12 col-lg-3">
                <p style="text-transform: capitalize;">Name </p>
            </div>
            <div class="profile-name-eco-friend col-sm-12 col-md-12 col-lg-5">
                <p style="text-transform: capitalize;"> : {{$data->name}}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center"id ="nim">
            <div class="profile-nim-eco-friend col-sm-12 col-md-12 col-lg-3">
                <p>NIM</p>
            </div>
            <div class="profile-nim-eco-friend col-sm-12 col-md-12 col-lg-5">
                <p>: {{$data->student_id}}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center"id ="email">
            <div class="profile-email-eco-friend col-sm-12 col-md-12 col-lg-3">
                <p>Student Email </p>
            </div>  
            <div class="profile-email-eco-friend col-sm-12 col-md-12 col-lg-9">
                <p>: {{$data->email}}</p>
            </div>  
        </div>
    </div>  
    
    <div class="container">
        <div class="row-text-center" >
            <div class="profile-journey">
                <p>YOUR JOURNEY IN RED</p>
            </div>
        </div>
    </div>

    <div class="container" id="count">
        <div class="row text-center">
            <div class="col-sm-4" id="day-count">
                <p class="day-n">DAY 3</p>
                <p class="day-left">9 Days Left<p>
            </div>
            <div class="col-sm-4" id="time-count">
                <p class="time-left">Time Left For Submission<p>
                <p class="time-countdown">01:12:34<P> 
            </div>
        </div>
    </div>
    <div class="container">
    <div class="container progress-graph">
        <div class="chart small-font-size">
            <!-- bar pertama -->
            <div class="bar bar-60 utopia">
                <img src="{{ asset('images/profile/Utopia Temp Logo@2x.png') }}" alt="">
                <div class="face side-0">
                    <div class="growing-bar"></div>
                </div>
                <div class="face side-1">
                    <div class="growing-bar"></div>
                </div>
                <div class="face top"></div>
                <div class="face floor"></div>
            </div>
            <!-- bar kedua -->
            <div class="bar bar-25 rise">
                <img style="width: 2em" src="{{ asset('images/profile/Rise Temp Logo@2x.png') }}" alt="">
                <div class="face side-0">
                    <div class="growing-bar"></div>
                </div>
                <div class="face side-1">
                    <div class="growing-bar"></div>
                </div>
                <div class="face top"></div>
                <div class="face floor"></div>
            </div>
            <!-- bar ketiga -->
            <div class="bar bar-35 utile">
                <img style="width: 2em" src="{{ asset('images/profile/Mystery@2x.png') }}" alt="">
                <div class="face side-0">
                    <div class="growing-bar"></div>
                </div>
                <div class="face side-1">
                    <div class="growing-bar"></div>
                </div>
                <div class="face top"></div>
                <div class="face floor"></div>
            </div>
            <!-- bar keempat -->
            <div class="bar bar-80 racounter">
                <img style="width: 2em" src="{{ asset('images/profile/Mystery@2x.png') }}" alt="">
                <div class="face side-0">
                    <div class="growing-bar"></div>
                </div>
                <div class="face side-1">
                    <div class="growing-bar"></div>
                </div>
                <div class="face top"></div>
                <div class="face floor"></div>
            </div>
        </div>
    </div>
    </div>

    <div class="logo row mx-auto">
        <div class="logo-submit">
            <button class="submit">Submit</button>
        </div>
        <!-- <div class="logo-submit">
            <a href="#1" class="open-popup"><img src="{{ asset('images/oprec/logo/GANTAR.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
        </div>
        <div class="logo-submit">
            <a href="#2" class="open-popup"><img src="{{ asset('images/oprec/logo/ORTA.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
        </div>
        <div class="logo-submit">
            <a href="#3" class="open-popup"><img src="{{ asset('images/oprec/logo/LUA.png') }}" alt="" class="image-fluid" onclick="mBlur();"></a>
        </div> -->
    </div>
</div>
@endsection

@section('custom-js')
<script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
<script src="{{ asset('js/cms/page/profile.js') }}"></script>
@if (session('status') == 'Success')

<script>
    Swal.fire("Selamat datang", "{{$data->name}}", "success");
</script>
@endif

@endsection