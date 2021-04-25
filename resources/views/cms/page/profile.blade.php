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
            <div class="row text-center mt-5 mb-5" id="data">
                <div class="profile-data">
                    ECO Friend Profile
                </div>
            </div>

            <div class="row text-center" id="name">
                <div class="profile-title col-sm-3 col-md-4 col-lg-3 col-2">
                    <p style="text-transform: capitalize;">Name </p>
                </div>
                <div class="colon col-sm-1 col-md-1 col-lg-1 col-1">:</div>
                <div class="profile-content col-sm-7 col-md-7 col-lg-6 col-9">
                    <p style="text-transform: capitalize;white-space: nowrap;">{{$data->firstname}} {{$data->lastname}}</p>
                </div>
            </div>

            <div class="row text-center" id="nim">
                <div class="profile-title col-sm-3 col-md-4 col-lg-3 col-2">
                    <p>NIM</p>
                </div>
                <div class="colon col-sm-1 col-md-1 col-lg-1 col-1">:</div>
                <div class="profile-content col-sm-7 col-md-7 col-lg-5 col-9">
                    <p>{{$data->student_id}}</p>
                </div>
            </div>

            <div class="row text-center" id="email">
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
                <p class="day-n" id="day-now">DAY 3</p>
                <p class="day-left" id="day-left">9 Days Left</p>
            </div>
            <div class="col-md-8 col-12" id="time-count">
                <div class="time-left mt-3">Remaining Time for Submission</div>
                <div class="time-countdown">
                    <div id="" class="d-none days">
                        01
                    </div>
                    <div id="" class="d-inline-block hours">
                        01
                    </div>
                    <div class="d-inline-block">
                        :
                    </div>
                    <div id="" class="d-inline-block minutes">
                        01
                    </div>
                    <div class="d-inline-block">
                        :
                    </div>
                    <div id="" class="d-inline-block seconds">
                        01
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-11" id="time-countdown">
                <ul class="countdown">
                    <div id="days" class="d-none">
                        01
                    </div>
                    <li>
                        <div class="num hours" id="">12</div>
                        <div class="txt">hours</div>
                    </li>
                    <li>
                        <div class="num minutes" id="">36</div>
                        <div class="txt">minutes</div>
                    </li>
                    <li>
                        <div class="num seconds" id="">48</div>
                        <div class="txt">seconds</div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="progress-graph">
            <div class="chart small-font-size">
                <!-- bar pertama -->
                <div class="col-3" id="bar-submit bar-utopia">
                    <div class="bar bar-{{ $percentageAllMission['utopiaPercentage'] }} utopia col-sm-3">
                        <img src="{{ asset('images/utopia.png') }}" alt="">
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

                    <div class="logo-submit col-12">
                        <button @if ($allMissionProgress['utopia']==1) disabled @endif class="submit-button @if ($allMissionProgress['utopia'] == 1) submit-disabled @endif" id="submit-utopia">Submit</button>
                    </div>
                </div>

                <!-- bar kedua -->
                <div class="col-3" id="bar-submit bar-rise">
                    <div class="bar bar-{{ $percentageAllMission['risePercentage'] }} rise col-sm-3">
                        <img style="width: 2em" src="{{ asset('images/rise.png') }}" alt="">
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

                    <div class="logo-submit col-12">
                        <button @if ($allMissionProgress['rise']==1) disabled @endif class="submit-button @if ($allMissionProgress['rise'] == 1) submit-disabled @endif" id="submit-rise">Submit</button>
                    </div>
                </div>

                <!-- bar ketiga -->
                <div class="col-3" id="bar-submit bar-utile">
                    <div class="bar bar-{{ $percentageAllMission['utilePercentage'] }} utile col-sm-3">
                        <img style="width: 2em" src="@if($data->mystery_quest == 1) {{ asset('images/utile.png') }} @else {{ asset('images/profile/Mystery@2x.png') }} @endif" alt="">
                        <div class="face side-0">
                            <div class="growing-bar"></div>
                        </div>
                        <div class="face side-1">
                            <div class="growing-bar"></div>
                        </div>
                        <div class="face top"></div>
                        <div class="face floor"></div>
                    </div>

                    <div class="desc-utile desc-mission @if($data->mystery_quest == 1) no-margin2 utile-font @endif">
                        @if($data->mystery_quest == 1)
                        <p class="col-12">UTILE</p>
                        @else
                        <p class="col-12">?</p>
                        @endif
                    </div>

                    @if($data->mystery_quest == 1)
                    <div class="logo-submit col-12">
                        <button @if ($allMissionProgress['utile']==1) disabled @endif class="submit-button @if ($allMissionProgress['utile'] == 1) submit-disabled @endif" id="submit-utile">Submit</button>
                    </div>
                    @else
                    <div class="logo-submit col-12">
                        <button class="submit-button submit-disabled" id="submit-utile" disabled>Locked</button>
                    </div>
                    @endif
                </div>

                <!-- bar keempat -->
                <div class="col-3" id="bar-submit bar-raconteur">
                    <div class="bar bar-{{ $percentageAllMission['raconteurPercentage'] }} racounter col-sm-3">
                        <img style="width: 2em" src="@if($data->mystery_quest == 2) {{ asset('images/raconteur.png') }} @else {{ asset('images/profile/Mystery@2x.png') }} @endif " alt="">
                        <div class="face side-0">
                            <div class="growing-bar"></div>
                        </div>
                        <div class="face side-1">
                            <div class="growing-bar"></div>
                        </div>
                        <div class="face top"></div>
                        <div class="face floor"></div>
                    </div>

                    <div class="desc-racounter desc-mission @if($data->mystery_quest == 2) no-margin raconteur-font @endif">
                        @if($data->mystery_quest == 2)
                        <p class="col-12">RACONTEUR</p>
                        @else
                        <p class="col-12">?</p>
                        @endif
                    </div>


                    @if($data->mystery_quest == 2)
                    <div class="logo-submit col-12">
                        <button @if ($allMissionProgress['raconteur']==1) disabled @endif class="submit-button @if ($allMissionProgress['raconteur'] == 1) submit-disabled @endif" id="submit-raconteur">Submit</button>
                    </div>
                    @else
                    <div class="logo-submit col-12">
                        <button class="submit-button submit-disabled" id="submit-racounter" disabled>Locked</button>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
<<<<<<< Updated upstream
@include('cms.template.footer')
=======
@include('cms.template.footer')   
>>>>>>> Stashed changes
<!-- <div class="col-12" id="footer">        
    <div class="profile-footer" style="padding-top:10rem;padding-bottom:10rem;background-image: linear-gradient(to top, #d74646, #e15251, #eb5d5d, #f56968, #ff7474);;">   
        <div class="container" id="footer-items">      
            <div class="eco-umn-tagline">
                <p>#WeActForTheBetterEarth</p>
            </div>
            <div class="eco-red">
                <p>#RealEmergencyDailylife</p>
            </div>
            <div class="logo-umn-eco">
                <img src="/images/profile/Logo UMN@2x.png" alt="logo-umn-eco">
            </div>
            <div class="logo-umn-eco-red">
                <img src="/images/profile/LOGO RED FINAL.png" alt="logo-umn-eco">
            </div>
        </div>
    </div>
</div> -->

@endsection

@section('custom-js')
<script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
<!-- <script src="{{ asset('js/cms/page/timer.js') }}"></script> -->
<!-- <script src="{{ asset('js/cms/page/day-timer.js') }}"></script> -->

@if (session('status') == 'Success')
<script>
    // Swal.fire("Welcome", "{{$data->firstname}}. ", "success");
    Swal.fire({
        icon: 'success',
        title: 'Welcome, {{$data->firstname}}',
        text: 'Hope these quests can be your new habit for a better Earth.',
    })
</script>
@endif

@if (session('status') == 'Submitted')
<script>
    Swal.fire({
        icon: 'success',
        title: 'Your link has been submitted',
        text: 'Our team will validate your submitted link soon!',
    })
</script>
@endif

<!-- Day Timer -->
<script>
    (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
        
        var curr = new Date().getTime()
        var carbon_time = '{{ $current_time }}'
        var diff_d = curr - carbon_time

        // console.log(diff)
        // console.log(curr)
        // console.log(carbon_time)

        var oprec = new Date('May 8, 2021 00:00:00');
        countDown_d = oprec.getTime(),
        
        x = setInterval(function () {
            let now_d = new Date().getTime(),
            distance = countDown_d - now_d - diff_d;
            
            (document.getElementById("day-now").innerText = "DAY " + (12 - Math.floor(distance / day))),
            (document.getElementById("day-left").innerText = Math.floor(distance / day) + " DAYS LEFT")

            //do something later when date is reached
            if (distance < 0) {  
            clearInterval(x);
            }
            //seconds
        }, 0);
    })();
</script>

<!-- Timer -->
<script>
    (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
        
        var curr = new Date().getTime()
        var carbon_time = '{{ $current_time }}'
        var diff = curr - carbon_time

        var oprec = new Date();
        oprec.setDate(oprec.getDate() + 1)
        oprec.setHours( 0,0,0,0 );
        countDown = oprec.getTime(),
        
        x = setInterval(function () {
            let now = new Date().getTime(),
            distance = countDown - now - diff;

            if(Math.floor((distance % day) / hour) >= 10){
            h = Math.floor((distance % day) / hour)
            }
            else{
            h = "0" + Math.floor((distance % day) / hour)
            }
            
            if(Math.floor((distance % hour) / minute) >= 10){
            m = Math.floor((distance % hour) / minute)
            }
            else{
            m = "0" + Math.floor((distance % hour) / minute)
            }
            
            if((Math.floor((distance % minute) / second)) >= 10){
            s = Math.floor((distance % minute) / second)
            }
            else{
            s = "0" + Math.floor((distance % minute) / second)
            }
            
            ($(".days").html(Math.floor(distance / day))),
            ($(".hours").html(h)),
            ($(".minutes").html(m)),
            ($(".seconds").html(s))

            //do something later when date is reached
            if (distance <= 1) {  
                clearInterval(x);
                location.reload();
            }
            //seconds
        }, 0);
    })();
  

</script>

<script>
    $("#submit-utopia").click(function() {
        var re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
        var valid_utopia = false;
        Swal.fire({
            title: 'Submit Link',
            html: `
            <form action="{{route('submitLink')}}" method="post" id="form-utopia">
                @csrf
                <input type="url" name="link" id="submitted-link-utopia" class="swal2-input" placeholder="Insert Link">
                <input type="number" value="1" name="type" style="display:none;">
                <input type="number" value="{{ $misiKe_N }}" name="misiKe_N" style="display:none;">
            </form>
        `,
            showCancelButton: false,
            confirmButtonText: 'Submit',
            focusConfirm: false,
            preConfirm: () => {
                const url = Swal.getPopup().querySelector('#submitted-link-utopia').value
                valid_utopia = true
                if (!url || !re.test(url)) {
                    Swal.showValidationMessage(`Harus menggunakan url yang valid`)
                    valid_utopia = false
                }
                return {
                    url: valid_utopia
                }
            }
        }).then((result) => {
            if (valid_utopia) {
                $("#form-utopia").submit()
            }
        })
    })

    $("#submit-rise").click(function() {
        var re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
        var valid_rise = false;
        Swal.fire({
            title: 'Submit Link',
            html: `
            <form action="{{route('submitLink')}}" method="post" id="form-rise">
                @csrf
                <input type="url" name="link" id="submitted-link-rise" class="swal2-input" placeholder="Insert Link">
                <input type="number" value="2" name="type" style="display:none;">
                <input type="number" value="{{ $misiKe_N }}" name="misiKe_N" style="display:none;">
            </form>
        `,
            showCancelButton: false,
            confirmButtonText: 'Submit',
            focusConfirm: false,
            preConfirm: () => {
                const url = Swal.getPopup().querySelector('#submitted-link-rise').value
                valid_rise = true
                if (!url || !re.test(url)) {
                    Swal.showValidationMessage(`Harus menggunakan url yang valid`)
                    valid_rise = false
                }
                return {
                    url: valid_rise
                }
            }
        }).then((result) => {
            if (valid_rise) {
                $("#form-rise").submit()
            }
        })
    })

    $("#submit-utile").click(function() {
        var re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
        var valid_utile = false;
        Swal.fire({
            title: 'Submit Link',
            html: `
            <form action="{{route('submitLink')}}" method="post" id="form-utile">
                @csrf
                <input type="text" name="link" id="submitted-link-utile" class="swal2-input" placeholder="Insert Link">
                <input type="number" value="3" name="type" style="display:none;">
                <input type="number" value="1" name="misiKe_N" style="display:none;">
            </form>
        `,
            showCancelButton: false,
            confirmButtonText: 'Submit',
            focusConfirm: false,
            preConfirm: () => {
                const url = Swal.getPopup().querySelector('#submitted-link-utile').value
                valid_utile = true
                if (!url || !re.test(url)) {
                    Swal.showValidationMessage(`Harus menggunakan url yang valid`)
                    valid_utile = false
                }
                return {
                    url: valid_utile
                }
            }
        }).then((result) => {
            if (valid_utile) {
                $("#form-utile").submit()
            }
        })
    })

    $("#submit-raconteur").click(function() {
        var re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
        var valid_raconteur = false;
        Swal.fire({
            title: 'Submit Link',
            html: `
            <form action="{{route('submitLink')}}" method="post" id="form-raconteur">
                @csrf
                <input type="text" name="link" id="submitted-link-raconteur" class="swal2-input" placeholder="Insert Link">
                <input type="number" value="4" name="type" style="display:none;">
                <input type="number" value="1" name="misiKe_N" style="display:none;">
            </form>
        `,
            showCancelButton: false,
            confirmButtonText: 'Submit',
            focusConfirm: false,
            preConfirm: () => {
                const url = Swal.getPopup().querySelector('#submitted-link-raconteur').value
                valid_raconteur = true
                if (!url || !re.test(url)) {
                    Swal.showValidationMessage(`Harus menggunakan url yang valid`)
                    valid_raconteur = false
                }
                return {
                    url: valid_raconteur
                }
            }
        }).then((result) => {
            if (valid_raconteur) {
                $("#form-raconteur").submit()
            }
        })
    })
</script>

<!-- SCRIPT FOR SPECIAL MISSION -->
@if($dateForSpecialMission >= 0 && $data->mystery_quest == 0)
<script>
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
                    <img src="{{ asset('images/utile.png') }}" />
                    <form action="{{ route('mysteryQuest') }}" method="post">
                        @csrf
                        <input type="number" value="1" name="mysteryQuest" style="display:none;">
                        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Utile</button>
                    </form>
                </div>
                <div class="raconteur-box">
                    <img src="{{ asset('images/raconteur.png') }}" />
                    <form action="{{ route('mysteryQuest') }}" method="post">
                        @csrf
                        <input type="number" value="2" name="mysteryQuest" style="display:none;">
                        <button type="submit" class="btn btn-primary" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Raconteur</button>
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