@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/profile-greenate.css') }}">
@endsection

@section('content')

<div class="main">
    <div class="banner">
        <img src="{{ asset('images/profile-greenate/leaf.png') }}" class="leaf-1">
        <img src="{{ asset('images/profile-greenate/fries.png') }}" class="fries">
        <img src="{{ asset('images/profile-greenate/soda.png') }}" class="soda">

        <div class="banner-text">
            <h3>Hello ECO FRIEND,</h3>
            <h1>{{ $data->name }}</h1>
        </div>
        <a href="{{url('logout')}}" class="logout">
            <i class="fas fa-sign-out-alt" style="font-size: 40px;"></i>
            <p>LOG OUT</p>
        </a>
    </div>
    <div class="profile-container" style="min-height:100vh;">
        <!-- <div class="row" style="margin-top:25vh;">
            <div class="col-11 col-lg-10 mx-auto" id="day-count">
                <p class="day-title">We're still preparing your order</p>
                <p class="day-left" id="day-left">9 Days Left</p>
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
        </div> -->
        <!-- --------------------ORDER NOW------------------------------------------- -->
        @if($data->ordered == NULL || $data->ordered == FALSE)
        <div class="order-wrapper py-5">
            <img src="{{ asset('images/profile-greenate/leaf-2.png') }}" class="leaf-2">
            <img src="{{ asset('images/profile-greenate/leaf-2.png') }}" class="leaf-3">
            <div class="d-flex justify-content-center align-items-center container py-5">
                
                <div class="order-button d-flex text-center" id="orderNowBtn">
                    <div class="d-inline-block text-start m-auto">
                        <h2 class="">ORDER </br> NOW!</h2>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- ----------------------------------------- -->

        <!-- Ordered-------------------------------------------------------------------- -->
        @if($data->ordered != FALSE || $data->ordered != NULL)
        <div class="order-wrapper py-5">
            <img src="{{ asset('images/profile-greenate/leaf.png') }}" class="leaf-4 d-none d-sm-block">
            <img src="{{ asset('images/profile-greenate/cutting-board.png') }}" class="cutting-board d-none d-sm-block">
            <div class="order-content d-flex justify-content-center align-items-center container py-5">
                <div class="order-list row d-flex justify-content-center">
                    @if($data->dine_in == TRUE || $data->dine_in != NULL)
                    <div class="px-lg-5 px-1 py-4 col-lg-4 col-10 d-flex flex-column">
                        <div class="item-wrapper">
                            <div class="item px-4 py-5 d-flex justify-content-center">
                                <img src="{{ asset('images/about-greenate/dine-in.png') }}" alt="" width="50%">
                            </div>
                            <p>
                            Zoom Meetings</br>
                            13 September 2021</br>
                            </br>
                            ID:</br>
                            Pass:</br>
                            </p>
                        </div>
                    </div>
                    @endif
                    @if($data->takeaway_id != NULL || $data->takeaway_id != 0)
                        @if($data->takeaway_id == 1)
                            <div class="px-lg-5 px-1 py-4 col-lg-4 col-10 d-flex flex-column">
                                <div class="item-wrapper ">
                                    <div class="item px-4 py-5">
                                        <img src="{{ asset('images/about-greenate/exhort.png') }}" alt="" width="100%">
                                    </div>
                                    <p>Pada kegiatan ini, ECO Friends akan membuat video tentang tips bagaimana menyimpan makanan agar dapat bertahan lebih lama.</p>
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button class="submit-link">Submit</button></div>
                                    
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button id="exhortButton">Twibbon</button></div>
                                </div>
                            </div>
                        @elseif($data->takeaway_id == 2)
                            <div class="px-lg-5 px-1 py-4 col-lg-4 col-10 d-flex flex-column">
                                <div class="item-wrapper ">
                                    <div class="item px-4 py-5">
                                        <img src="{{ asset('images/about-greenate/alter.png') }}" alt="" width="100%">
                                    </div>
                                    <p>Pada kegiatan ini, ECO Friends akan membuat video tentang bagaimana cara mengolah kembali sisa makanan menjadi hidangan baru.</p>
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button class="submit-link">Submit</button></div>
                                    
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button id="alterButton">Twibbon</button></div>
                                </div>
                            </div>
                        @elseif($data->takeaway_id == 3)
                            <div class="px-lg-5 px-1 py-4 col-lg-4 col-10 d-flex flex-column">
                                <div class="item-wrapper ">
                                    <div class="item px-4 py-5">
                                        <img src="{{ asset('images/about-greenate/tidbit.png') }}" alt="" width="100%">
                                    </div>
                                    <p>Pada kegiatan ini, ECO Friends akan merekam diri saat sedang makan dan menghabisinya hingga tidak tersisa, tujuannya agar sampah makanan tidak terus bertambah.</p>
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button class="submit-link">Submit</button></div>
                                    
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"> <button id="tidbitButton">Twibbon</button></div>
                                </div>
                            </div>
                        @endif
                    @endif
                    
                </div>
            </div>
        </div>
        @endif
        <!-- ----------------------------------------- -->
        
    </div>

</div>

@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')
<script>
    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        var curr = new Date().getTime()

        var oprec = new Date();
        oprec.setDate(oprec.getDate() + 1)
        oprec.setHours(0, 0, 0, 0);
        countDown = oprec.getTime(),

            x = setInterval(function() {
                let now = new Date().getTime(),
                    distance = countDown - now ;

                if (Math.floor((distance % day) / hour) >= 10) {
                    h = Math.floor((distance % day) / hour)
                } else {
                    h = "0" + Math.floor((distance % day) / hour)
                }

                if (Math.floor((distance % hour) / minute) >= 10) {
                    m = Math.floor((distance % hour) / minute)
                } else {
                    m = "0" + Math.floor((distance % hour) / minute)
                }

                if ((Math.floor((distance % minute) / second)) >= 10) {
                    s = Math.floor((distance % minute) / second)
                } else {
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
    var maxHeight = 0;

    var divs = jQuery(".item-wrapper");
    jQuery.each(divs, function(){
        var height = jQuery(this).height();
        if(maxHeight<height)
            maxHeight = height;

    });
    $(window).load(function() {
        divs.height(maxHeight);
    });
</script>

<script>
    $(document).ready(function () {
        $("#orderNowBtn").on('click', function () {
            window.location.href="{{ route('greenateMenu') }}";
        })
        $("#exhortButton").on('click', function () {
            window.location.href="{{ route('twibbonExhort') }}";
        })
        $("#alterButton").on('click', function () {
            window.location.href="{{ route('twibbonAlter') }}";
        })
        $("#tidbitButton").on('click', function () {
            window.location.href="{{ route('twibbonTidbit') }}";
        })
    })
</script>

@if (session('status') == 'Success')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Welcome, {{$data->name}}',
            text: 'Hope these quests can be your new habit for a better Earth.',
        })
    </script>
@endif
@if (session('status') == 'Link Submitted')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Link submitted',
            text: 'Thank you for your contribution in this quest!',
        })
    </script>
@endif
@if (session('status') == 'Failed')
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Failed',
            text: 'You must input a valid link!',
        })
    </script>
@endif

<script>
    
    
    @if($data->task_link == NULL)
        $(".submit-link").click(function() {
            var re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
            var valid = false;
            Swal.fire({
                title: 'Submit Link',
                html: `
                <form action="{{ route('submitLink') }}" method="post" id="form-rise">
                    @csrf
                    <input type="url" name="link" id="task-link" class="swal2-input" placeholder="Insert Link">
                </form>
            `,
                showCancelButton: false,
                confirmButtonText: 'Submit',
                focusConfirm: false,
                preConfirm: () => {
                    const url = Swal.getPopup().querySelector('#task-link').value
                    valid = true
                    if (!url || !re.test(url)) {
                        Swal.showValidationMessage(`Harus menggunakan url yang valid`)
                        valid = false
                    }
                    return {
                        url: valid
                    }
                }
            }).then((result) => {
                if (valid) {
                    $("#form-rise").submit()
                }
            })
        })
    @else
        $(".submit-link").click(function() {
            Swal.fire({
                text: "You've already submitted a link! Have a nice day!",
                icon: 'info',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            })
        })
    @endif
</script>
@endsection