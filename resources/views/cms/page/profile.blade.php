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
                    <p style="text-transform: uppercase;">{{$data->firstname}} {{$data->lastname}} </p>
                </div>
            </div>
            <a href="{{url('logout')}}" class="logout">
                <img src="images/profile/Log Out@2x.png" alt="">
                <p>LOG OUT</p>
            </a>
        </div>
    </div>

    <div class="container" id="eco-friend-identity">
        <div class="container">
            <div class="row text-center" id="data">
                <div class="profile-data">
                    ECO Friend Profile
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center" id="name">
                <div class="profile-name-eco-friend col-sm-3 col-md-4 col-lg-3">
                    <p style="text-transform: capitalize;">Name </p>
                </div>
                <div class="colon col-sm-1 col-md-1 col-lg-1">:</div>
                <div class="profile-name-eco-friend col-sm-7 col-md-7 col-lg-6">
                    <p style="text-transform: capitalize;">{{$data->firstname}} {{$data->lastname}}</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center" id="nim">
                <div class="profile-nim-eco-friend col-sm-3 col-md-4 col-lg-3">
                    <p>NIM</p>
                </div>
                <div class="colon col-sm-1 col-md-1 col-lg-1">:</div>
                <div class="profile-nim-eco-friend col-sm-7 col-md-7 col-lg-5">
                    <p>{{$data->student_id}}</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row text-center" id="email">
                <div class="profile-email-eco-friend col-sm-3 col-md-4 col-lg-3">
                    <p>Student Email </p>
                </div>
                <div class="colon col-sm-1 col-md-1 col-lg-1">:</div>
                <div class="profile-email-eco-friend col-sm-7 col-md-7 col-lg-8">
                    <p>{{$data->email}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row-text-center">
            <div class="profile-journey">
                <p>YOUR JOURNEY IN RED</p>
            </div>
        </div>
    </div>

    <div class="container" id="count">
        <div class="row text-center">
            <div class="col-sm-4" id="day-count">
                <p class="day-n">DAY 3</p>
                <p class="day-left">9 Days Left
                <p>
            </div>
            <div class="col-sm-4" id="time-count">
                <p class="time-left">Time Left For Submission
                <p>
                <p class="time-countdown">
                <div id="days" class="d-none">
                    01
                </div>
                <div id="hours" class="d-inline-block float-start ms-4">
                    01 :
                </div>
                <div id="minutes" class="d-inline-block float-start">
                    12 :
                </div>
                <div id="seconds" class="d-inline-block float-start">
                    34
                </div>
                <P>
            </div>
        </div>
    </div>

    <div class="container progress-graph">
        <div class="chart small-font-size">
            <!-- bar pertama -->
            <div class="container col-3" id="bar-submit">
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
                <div class="desc-utopia">
                    <p class="col-12">UTOPIA</p>
                </div>

                @if ($allMissionProgress["utopia"] == 0)
                <div class="logo-submit col-12">
                    <button class="submit-button" id="submit-utopia">Submit</button>
                </div>
                @endif
            </div>

            <!-- bar kedua -->
            <div class="container col-3" id="bar-submit">
                <div class="bar bar-{{ $percentageAllMission['risePercentage'] }} rise col-sm-3">
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

                <div class="desc-rise">
                    <p class="col-12">RISE</p>
                </div>
                @if ($allMissionProgress["rise"] == 0)
                <div class="logo-submit col-12">
                    <button class="submit-button" id="submit-rise">Submit</button>
                </div>
                @endif
            </div>

            <!-- bar ketiga -->
            <div class="container col-3" id="bar-submit">
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

                <div class="desc-utile">
                    <p class="col-12">?</p>
                </div>
                @if ($allMissionProgress["utile"] == 0)
                <div class="logo-submit col-12">
                    <button class="submit-button" id="submit-utile">Locked</button>
                </div>
                @endif
            </div>

            <!-- bar keempat -->
            <div class="container col-3" id="bar-submit">
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

                <div class="desc-racounter">
                    <p class="col-12">?</p>
                </div>
                @if ($allMissionProgress["raconteur"] == 0)
                <div class="logo-submit col-12">
                    <button class="submit-button" id="submit-racounter">Locked</button>
                </div>
                @endif
            </div>

        </div>
    </div>

    <div class="container progress-graph-top">
        <div class="chart small-font-size">
            <!-- bar pertama -->
            <div class="container col-3" id="bar-submit">
                <div class="bar bar-60 utopia col-sm-3">
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

                <div class="desc-utopia">
                    <p class="col-12">UTOPIA</p>
                </div>
                @if ($allMissionProgress["utopia"] == 0)
                <div class="logo-submit col-12">
                    <button class="submit-button" id="submit-utopia">Submit</button>
                </div>
                @endif
            </div>

            <!-- bar kedua -->
            <div class="container col-3" id="bar-submit">
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

                <div class="desc-rise">
                    <p class="col-12">RISE</p>
                </div>
                @if ($allMissionProgress["rise"] == 0)
                <div class="logo-submit col-12">
                    <button class="submit-button" id="submit-rise">Submit</button>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container progress-graph-bottom">
        <div class="chart small-font-size">

            <!-- bar ketiga -->
            <div class="container col-3" id="bar-submit">
                <div class="bar bar-35 utile col-sm-3">
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

                <div class="desc-utile">
                    <p class="col-12">?</p>
                </div>
                @if ($allMissionProgress["utile"] == 0)
                <div class="logo-submit col-12">
                    <button class="submit-button" id="submit-utile">Locked</button>
                </div>
                @endif
            </div>

            <!-- bar keempat -->
            <div class="container col-3" id="bar-submit">
                <div class="bar bar-80 racounter col-sm-3">
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

                <div class="desc-racounter">
                    <p class="col-12">?</p>
                </div>
                @if ($allMissionProgress["raconteur"] == 0)
                <div class="logo-submit col-12">
                    <button class="submit-button" id="submit-racounter">Locked</button>
                </div>
                @endif
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
@if($dateForSpecialMission == 0)
<script>
    console.log("SPECIAL MISSION RIBET WOI");
    Swal.mixin({
        confirmButtonText: 'Next &rarr;',
        showCancelButton: true,
        progressSteps: ['1', '2']
    }).queue([{
            title: 'Info',
            text: '...',
            icon: 'warning'
        },
        {
            title: 'Choose Secret Mission?',
            html: `
            <div class="sweet-alert-container">
                <div class="utile-box">
                    <img src="{{ asset('images/profile/Utile Temp Logo@2x.png') }}" />
                    <button type="button" class="btn btn-primary">Utile</button>
                </div>
                <div class="raconteur-box">
                    <img src="{{ asset('images/profile/Racounter Temp Logo@2x.png') }}" />
                    <button type="button" class="btn btn-primary">Raconteur</button>
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