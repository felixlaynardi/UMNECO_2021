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
                            ID: <b style="overflow-wrap: break-word;">TBA</b></br>
                            Pass: <b style="overflow-wrap: break-word;">TBA</b></br>
                            </p>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                    @endif
                    @if($data->takeaway_id != NULL || $data->takeaway_id != 4)
                        @if($data->takeaway_id == 1)
                            <div class="px-lg-5 px-1 py-4 col-lg-4 col-10 d-flex flex-column">
                                <div class="item-wrapper ">
                                    <div class="item px-4 py-5">
                                        <img src="{{ asset('images/about-greenate/exhort.png') }}" alt="" width="100%">
                                    </div>
                                    <p>Pada kegiatan ini, ECO Friends akan membuat video tentang tips bagaimana menyimpan makanan agar dapat bertahan lebih lama.</p>
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button class="submit-link disabled" disabled>Submit</button></div>
                                    
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
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button class="submit-link disabled" disabled>Submit</button></div>
                                    
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
                                    <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button class="submit-link disabled" disabled>Submit</button></div>
                                    
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
    function matchHeight(){
        var maxHeight = 0;

        var divs = jQuery(".item-wrapper");
        jQuery.each(divs, function(){
            var height = jQuery(this).height();
            if(maxHeight<height)
                maxHeight = height;

        });
        divs.height(maxHeight);
    }
    $(window).on('load', function() {
        matchHeight();
    });
</script>
<script>
    Swal.queue([
        {
            title: '',
            html: `
            <div class="container">
            <h2>THANK YOU, ECO FRIENDS!</h2>
                <div class="background">
                    <div class="sweet-alert-container">
                        <div class="dinein-box">
                            <img src="{{ asset('images/closegreenate/Dine In Logo.png') }}" />
                        </div>
                        <div class="takeaway-box">
                            <img src="{{ asset('images/closegreenate/Takeaway.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="sweet-container">
                    <div class="Exhort-box">
                                <img src="{{ asset('images/closegreenate/Exhort.png') }}" />
                    </div>
                    <div class="Alter-box">
                                <img src="{{ asset('images/closegreenate/Alter.png') }}" />
                    </div>
                    <div class="Tidbit-box">
                                <img src="{{ asset('images/closegreenate/Tidbit.png') }}" />
                    </div>
                </div>
                <h6>Your participation in RED have brought a great amount of positive impacts for our Earth</h6>

            </div>
            
            `,
            confirmButtonText: 'Continue',
            showCancelButton: false,
        }
    ])
<script>
    Swal.fire({
        title: 'THANK YOU, ECO FRIENDS!',
        text: 'We hope your participation in GREENATE will be a start in contributing to fight food waste on Earth',
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
            text: "Let's save the Earth by being responsible with your food!",
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
    @if($eventStatus)
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
    @endif
</script>
@endsection