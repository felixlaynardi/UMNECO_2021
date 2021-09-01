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
                                <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button>Submit</button></div>
                                
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
                                <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button>Submit</button></div>
                                
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
                                <div class="py-2 px-1 d-flex text-center justify-content-center submit-twibbon-button"><button>Submit</button></div>
                                
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

@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')

<script>
    var maxHeight = 0;

    var divs = jQuery(".item-wrapper");
    jQuery.each(divs, function(){
        var height = jQuery(this).height();
        if(maxHeight<height)
            maxHeight = height;

    });
    divs.height(maxHeight);
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
@endsection