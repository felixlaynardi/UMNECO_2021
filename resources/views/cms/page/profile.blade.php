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
        <div class="profile-header" style="background-image:url({{ asset('images/profile/Header@2x.png') }});">        
            <div class="container profile-header-content">    
                <div class="profile-eco-friend ">
                    Hello ECO Friend,
                </div>
                <div class="profile-name ">
                    <p style="text-transform: uppercase;">{{$data->firstname}}</p>
                </div>
            <a href="{{url('logout')}}" class="logout">
                <i class="fas fa-sign-out-alt" style="font-size: 40px;"></i>
                <p>LOG OUT</p>
            </a> 
            </div>           
        </div>
    </div>
        
    <div class="container">
        <div id="eco-friend-identity">
            <div class="row text-center mt-5 mb-5"id ="data">    
                <div class="profile-data">
                    ECO Friend Profile
                </div>
            </div>
            
            <div class="row text-center"id ="name">
                <div class="profile-title col-sm-3 col-md-4 col-lg-3 col-2">
                    <p style="text-transform: capitalize;">Name </p>
                </div>
                <div class="colon col-sm-1 col-md-1 col-lg-1 col-1">:</div>
                <div class="profile-content col-sm-7 col-md-7 col-lg-6 col-9">
                    <p style="text-transform: capitalize;">{{$data->firstname}} {{$data->lastname}}</p>
                </div>
            </div>

            <div class="row text-center"id ="nim">
                <div class="profile-title col-sm-3 col-md-4 col-lg-3 col-2">
                    <p>NIM</p>
                </div>
                <div class="colon col-sm-1 col-md-1 col-lg-1 col-1">:</div>
                <div class="profile-content col-sm-7 col-md-7 col-lg-5 col-9">
                    <p>{{$data->student_id}}</p>
                </div>
            </div>

            <div class="row text-center"id ="email">
                <div class="profile-title col-sm-3 col-md-4 col-lg-3 col-2">
                    <p>Email </p>
                </div>  
                <div class="colon col-sm-1 col-md-1 col-lg-1 col-1">:</div>
                <div class="profile-content col-sm-7 col-md-7 col-lg-8 col-9">
                    <p>{{$data->email}}</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-1">
            <div class="profile-journey col-12 col-md-8">
                <p>YOUR JOURNEY IN RED</p>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-md-4 col-12" id="day-count">
                <p class="day-n">DAY 3</p>
                <p class="day-left">9 Days Left
                <p>
            </div>
            <div class="col-md-8 col-12" id="time-count">
                <div class="time-left mt-3">Remaining Time for Submission</div>
                <div class="time-countdown">01:12:34</div> 
            </div>
            <div class="col-md-8 col-11" id="time-countdown">
                <ul class="countdown">
                    <div id="days" class="d-none">
                        01
                    </div>
                    <li>
                        <div class="num" id="hours">12</div>
                        <div class="txt">hours</div>
                    </li>
                    <li>
                        <div class="num" id="minutes">36</div>
                        <div class="txt">minutes</div>
                    </li>
                    <li>
                        <div class="num" id="seconds">48</div>
                        <div class="txt">seconds</div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="progress-graph">
            <div class="chart small-font-size">
                <!-- bar pertama -->
                <div class="col-3" id="bar-submit">
                    <div class="bar bar-{{ $percentageAllMission['utopiaPercentage'] }} utopia col-sm-3">
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

                    <div class="desc-utopia desc-mission">
                        <p class="col-12">UTOPIA</p>
                    </div>

                    @if ($allMissionProgress["utopia"] == 0)
                    <div class="logo-submit col-12">
                        <button class="submit-button" id="submit-utopia">Submit</button>
                    </div>
                    @endif
                </div>

                <!-- bar kedua -->
                <div class="col-3" id="bar-submit">
                    <div class="bar bar-25 rise col-sm-3">
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

                    <div class="desc-rise desc-mission">
                        <p class="col-12">RISE</p>
                    </div>

                    @if ($allMissionProgress["rise"] == 0)
                    <div class="logo-submit col-12">
                        <button class="submit-button" id="submit-rise">Submit</button>
                    </div>
                    @endif
                </div>

                <!-- bar ketiga -->
                <div class="col-3" id="bar-submit">
                    <div class="bar bar-{{ $percentageAllMission['utilePercentage'] }} utile col-sm-3">
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

                    <div class="desc-utile desc-mission">
                        @if($data->mystery_quest == 1)
                        <p class="col-12">Utile</p>
                        @else
                        <p class="col-12">?</p>
                        @endif
                    </div>

                    @if ($allMissionProgress["utile"] == 0)
                    @if($data->mystery_quest == 1)
                    <div class="logo-submit col-12">
                        <button class="submit-button" id="submit-utile">Submit</button>
                    </div>
                    @else
                    <div class="logo-submit col-12">
                        <button class="submit-button" id="submit-utile" disabled>Locked</button>
                    </div>
                    @endif
                    @endif
                </div>

                <!-- bar keempat -->
                <div class="col-3" id="bar-submit">
                    <div class="bar bar-{{ $percentageAllMission['raconteurPercentage'] }} racounter col-sm-3">
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

                    <div class="desc-racounter desc-mission">
                        @if($data->mystery_quest == 2)
                        <p class="col-12">Raconteur</p>
                        @else
                        <p class="col-12">?</p>
                        @endif
                    </div>

                    @if ($allMissionProgress["raconteur"] == 0)
                    @if($data->mystery_quest == 2)
                    <div class="logo-submit col-12">
                        <button class="submit-button" id="submit-racounter">Submit</button>
                    </div>
                    @else
                    <div class="logo-submit col-12">
                        <button class="submit-button" id="submit-racounter" disabled>Locked</button>
                    </div>
                    @endif
                    @endif
                </div>
            
            </div>
        </div>   
    </div>
</div>     
<div class="col-12" id="footer">        
    <div class="profile-footer" style="padding-top:10rem;padding-bottom:10rem;background-image: linear-gradient(to top, #d74646, #e15251, #eb5d5d, #f56968, #ff7474);;">   
        <div class="container" id="footer-items">      
            <div class="eco-umn-tagline">
                <p>#WeActForTheBetterEarth</p>
            </div>
            <div class="eco-red">
                <p>#RealEmergencyDailyLife</p>
            </div>
            <div class="logo-umn-eco">
                <img src="/images/profile/Logo UMN@2x.png" alt="logo-umn-eco">
            </div>
            <div class="logo-umn-eco-red">
                <img src="/images/profile/LOGO RED FINAL.png" alt="logo-umn-eco">
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-js')
<script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
<script src="{{ asset('js/cms/page/timer.js') }}"></script>

@if (session('status') == 'Success')
<script>
    Swal.fire("Welcome", "{{$data->firstname}}", "success");
</script>
@endif

<script>
    $("#submit-utopia").click(function() {
        Swal.fire({
            title: 'Submit Link',
            html: `
            <form action="{{route('submitLink')}}" method="post">
                @csrf
                <input type="text" name="link" id="submitted-link" class="swal2-input" placeholder="Insert Link">
                <input type="number" value="1" name="type" style="display:none;">
                <input type="number" value="{{ $misiKe_N }}" name="misiKe_N" style="display:none;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        `,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false
        })
    })

    $("#submit-rise").click(function() {
        Swal.fire({
            title: 'Submit Link',
            html: `
            <form action="{{route('submitLink')}}" method="post">
                @csrf
                <input type="text" name="link" id="submitted-link" class="swal2-input" placeholder="Insert Link">
                <input type="number" value="2" name="type" style="display:none;">
                <input type="number" value="{{ $misiKe_N }}" name="misiKe_N" style="display:none;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        `,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false
        })
    })

    $("#submit-utile").click(function() {
        Swal.fire({
            title: 'Submit Link',
            html: `
            <form action="{{route('submitLink')}}" method="post">
                @csrf
                <input type="text" name="link" id="submitted-link" class="swal2-input" placeholder="Insert Link">
                <input type="number" value="3" name="type" style="display:none;">
                <input type="number" value="{{ $misiKe_N }}" name="misiKe_N" style="display:none;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        `,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false
        })
    })

    $("#submit-racounter").click(function() {
        Swal.fire({
            title: 'Submit Link',
            html: `
            <form action="{{route('submitLink')}}" method="post">
                @csrf
                <input type="text" name="link" id="submitted-link" class="swal2-input" placeholder="Insert Link">
                <input type="number" value="4" name="type" style="display:none;">
                <input type="number" value="{{ $misiKe_N }}" name="misiKe_N" style="display:none;">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        `,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false
        })
    })
</script>

<!-- SCRIPT FOR SPECIAL MISSION -->
@if($dateForSpecialMission == 0 && $data->mystery_quest == 0)
<script>
    console.log("SPECIAL MISSION RIBET WOI");
    Swal.mixin({
        confirmButtonText: 'Next &rarr;',
        showCancelButton: false,
        progressSteps: ['1', '2']
    }).queue([{
            title: 'Choose Mystery Quest',
            text: '...',
            icon: 'warning'
        },
        {
            title: 'Choose Secret Mission?',
            html: `
            <div class="sweet-alert-container">
                <div class="utile-box">
                    <img src="{{ asset('images/profile/Utile Temp Logo@2x.png') }}" />
                    <form action="{{ route('mysteryQuest') }}" method="post">
                        @csrf
                        <input type="number" value="1" name="mysteryQuest" style="display:none;">
                        <button type="submit" class="btn btn-primary">Utile</button>
                    </form>
                </div>
                <div class="raconteur-box">
                    <img src="{{ asset('images/profile/Racounter Temp Logo@2x.png') }}" />
                    <form action="{{ route('mysteryQuest') }}" method="post">
                        @csrf
                        <input type="number" value="2" name="mysteryQuest" style="display:none;">
                        <button type="submit" class="btn btn-primary">Raconteur</button>
                    </form>
                </div>
            </div>
            
            `,
            confirmButtonText: 'Skip For Now',
            showCancelButton: false,
        }
    ])
</script>
@endif

@endsection