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
            <h1>ECOFRIEND</h1>
        </div>
    </div>
    <!-- --------------------ORDER NOW------------------------------------------- -->
    <div class="order-wrapper py-5">
        <img src="{{ asset('images/profile-greenate/leaf-2.png') }}" class="leaf-2">
        <img src="{{ asset('images/profile-greenate/leaf-2.png') }}" class="leaf-3">
        <div class="d-flex justify-content-center align-items-center container py-5">
            
            <div class="order-button d-flex text-center">
                <div class="d-inline-block text-start m-auto">
                    <h2 class="">ORDER </br> NOW!</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------- -->

    <!-- Ordered-------------------------------------------------------------------- -->
    <div class="order-wrapper py-5">
        <img src="{{ asset('images/profile-greenate/leaf.png') }}" class="leaf-4 d-none d-sm-block">
        <img src="{{ asset('images/profile-greenate/cutting-board.png') }}" class="cutting-board d-none d-sm-block">
        <div class="order-content d-flex justify-content-center align-items-center container py-5">
            <div class="order-list row d-flex justify-content-around">
                <div class="px-lg-5 px-3 py-4 col-lg-6 col-12 d-flex flex-column">
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
                <div class="px-lg-5 px-3 py-4 col-lg-6 col-12 d-flex flex-column">
                    <div class="item-wrapper ">
                        <div class="item px-4 py-5">
                            <img src="{{ asset('images/about-greenate/exhort.png') }}" alt="" width="100%">
                        </div>
                        <p>Pada kegiatan ini, ECO Friends akan membuat video tentang tips bagaimana menyimpan makanan agar dapat bertahan lebih lama.</p>
                        <div class="py-2 px-5 d-flex text-center justify-content-center submit-twibbon-button"><button>Submit</button></div>
                        
                        <div class="py-2 px-5 d-flex text-center justify-content-center submit-twibbon-button"><button>Twibbon</button></div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
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

@endsection