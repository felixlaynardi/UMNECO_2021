@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/order.css') }}">
@endsection

@section('content')
    <header>
        <div class="col-md-6 col-10 mx-auto">
            <p>CHOOSE YOUR ORDER</p>
        </div>
    </header>

    <div class="container-fluid mx-auto mb-5">
        <div class="row">
            <img src="{{ asset('images/order/Ayam_1.png') }}" class="ayam">

            <div class="col-md-10 col-10 mid mx-auto">
                <form action="{{ route('greenateSC') }}" method="post">
                    @csrf
                    <h5 class="shoppingcart"><button type="submit" class="mx-auto" id="scBtn">My Shopping Cart </button><p class="Notif" id="cartNumber">0</p></h5>
                    <div class="main">

                        <div class="row justify-content-center" >
                            <div class="col-md-10 col-10 box1">
                                <div class="dineIn active" id="dineIn">
                                    <img src="{{ asset('images/order/Dine-In.png') }}" class="DineInLogo">
                                    <h3 class="judul">Dine-In</h3>
                                    <p class="dinein">Webinar: <br>Digital for Food Waste Management</p>
                                    <input type="checkbox" id="dineInOption" name="dineInOption" value="Dine-In" class="addToCartNumberCheckbox" style="display:none">
                                    <label for="dine-in" id="add" class="add">Add to cart</label><br><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 row greenate">
                            <img src="{{ asset('images/order/Greenate.png') }}">
                        </div>

                        <!------------------- Desktop --------------------------->

                        <div class="col-md-10 col-10 row monitor justify-content-center">
                            <div class="col-md-2 col-2 pilihan mx-auto" id="Tidbit">
                                <img src="{{ asset('images/order/Tidbit.png') }}" class="images">
                                <h3 class="takeaway">Tidbit</h3>
                                <p class="skkm" id="infoTidbit">1 SKKM Pengabdian</p>
                                <input type="checkbox" id="tidbitOption" name="tidbitOption" value="Tidbit" class="takeAwayOption" style="display:none;">
                                <label for="Tidbit" class="tombol" id="addTidbit"> Add to Cart</label><br>
                            </div>
                            <div class="col-md-2 col-2 pilihan mx-auto" id="Exhort">
                                <img src="{{ asset('images/order/Exhort.png') }}" class="images">    
                                <h3 class="takeaway">Exhort</h3>
                                <p class="skkm" id="infoExhort">1 SKKM Pengabdian</p>
                                <input type="checkbox" id="exhortOption" name="exhortOption" value="Exhort" class="takeAwayOption" style="display:none;">
                                <label for="Exhort" class="tombol" id="addExhort">Add to Cart</label><br>
                            </div>
                            <div class="col-md-2 col-2 pilihan mx-auto" id="Alter">
                                <img src="{{ asset('images/order/Alter.png') }}" class="images">
                                <h3 class="takeaway">Alter</h3>
                                <p class="skkm" id="infoAlter">1 SKKM Pengabdian</p>
                                <input type="checkbox" id="alterOption" name="alterOption" value="Alter" class="takeAwayOption" style="display:none;">
                                <label for="Alter" class="tombol" id="addAlter">Add to Cart</label><br>
                            </div>
                        </div>
                        

                        <!-- ------------------ Small device ------------------------ -->
                        <div class="col-12 small-device row justify-content-center">
                            <div class="col-12">
                                <div id="carouselExampleControls" class="carousel slide d-lg-none d-block" data-bs-ride="carousel">
                                    <div class="carousel-inner row">
                                        <div class="item carousel-item pilihan active box" id="TidbitSmall" data-bs-interval="1000000000">
                                            <div class="col-lg-10 col-sm-10 slide-logo">
                                                <img src="{{ asset('images/order/Tidbit.png') }}" class="logo w-100 pb-5" >
                                            </div>
                                            <div class="col-lg-10 col-sm-10 info mx-auto">
                                                <h3 class="title">Tidbit</h3>
                                                <p class="skkm" id="infoTidbitSm">1 SKKM Pengabdian</p>
                                                <label for="Tidbit" class="tombol" id="addTidbitSmall">Add to Cart</label><br>
                                            </div>
                                        </div>
                                        <div class="item carousel-item pilihan  box" data-bs-interval="1000000000" id="ExhortSmall">
                                            <div class="col-lg-10 col-sm-10 slide-logo">
                                                <img src="{{ asset('images/order/Exhort.png') }}" class="logo w-100 pb-5">
                                            </div>
                                            <div class="col-lg-10 col-sm-10 info mx-auto">
                                                <h3 class="title">Exhort</h3>
                                                <p class="skkm" id="infoExhortSm">1 SKKM Pengabdian</p>
                                                <label for="Exhort" class="tombol" id="addExhortSmall">Add to Cart</label><br>
                                            </div>
                                        </div>
                                        <div class="item carousel-item pilihan box" data-bs-interval="1000000000" id="AlterSmall">
                                            <div class="col-lg-10 col-sm-10 slide-logo">
                                                <img src="{{ asset('images/order/Alter.png') }}" class="logo w-100 pb-5">
                                            </div>
                                            <div class="col-lg-10 col-sm-10 info mx-auto">
                                                <h3 class="title">Alter</h3>
                                                <p class="skkm" id="infoAlterSm">1 SKKM Pengabdian</p>
                                                <label for="Alter" class="tombol" id="addAlterSmall">Add to Cart</label><br>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('images/order/Burger.png') }}" class="burger">
                        <img src="{{ asset('images/order/Kentang.png') }}" class="kentang">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('cms.template.footer')
@endsection

@section('custom-js')

<script>
    $(document).ready(function () {
        let num = parseInt($('#cartNumber').html());

        $("#alter").attr("disabled", false);
        $("#exhort").attr("disabled", false);
        $("#tidbit").attr("disabled", false);
        $("#alter").prop('checked', false);
        $("#exhort").prop('checked', false);
        $("#tidbit").prop('checked', false);
        $(".dineInOption").prop('checked', false);
        
        @if(session('OrderTotal') != null)
            $('#cartNumber').html('{{ session('OrderTotal') }}')
        @else
            $('#cartNumber').html('0')
        @endif
        @if(session('DineIn') != null && session('DineIn'))
            $("#dineInOption").attr('checked', true);
            $("#dineIn").toggleClass("styleDineIn");
            $('#cartNumber').text(++num);
        @endif
        @if(session('TakeAway') != null && session('TakeAway') != "none")
            @if(session('TakeAway') == "Alter")
                $('#cartNumber').text(++num);
                $("#alterOption").attr('checked', true);
                $("#exhortOption").attr("disabled", true);
                $("#tidbitOption").attr("disabled", true);

                //style toggle
                $("#Alter").toggleClass("styleTakeAway");
                $("#Exhort").toggleClass("styleDisableTakeAway");
                $("#Tidbit").toggleClass("styleDisableTakeAway");
                $("#AlterSmall").toggleClass("styleTakeAwaySmall");
                $("#ExhortSmall").toggleClass("styleDisableTakeAwaySmall");
                $("#TidbitSmall").toggleClass("styleDisableTakeAwaySmall");
            @elseif(session('TakeAway') == "Exhort")
                $("#cartNumber").text(++num);
                $("#exhortOption").attr('checked', true);
                $("#alterOption").attr("disabled", true);
                $("#tidbitOption").attr("disabled", true);

                //style toggle
                $("#Exhort").toggleClass("styleTakeAway");
                $("#Alter").toggleClass("styleDisableTakeAway");
                $("#Tidbit").toggleClass("styleDisableTakeAway");
                $("#ExhortSmall").toggleClass("styleTakeAwaySmall");
                $("#AlterSmall").toggleClass("styleDisableTakeAwaySmall");
                $("#TidbitSmall").toggleClass("styleDisableTakeAwaySmall");
            @elseif(session('TakeAway') == "Tidbit")
                $("#tidbitOption").attr('checked', true);
                $("#alterOption").attr("disabled", true);
                $("#exhortOption").attr("disabled", true);
                $('#cartNumber').text(++num);

                //style toggle
                $("#Tidbit").toggleClass("styleTakeAway");
                $("#Alter").toggleClass("styleDisableTakeAway");
                $("#Exhort").toggleClass("styleDisableTakeAway");
                $("#TidbitSmall").toggleClass("styleTakeAwaySmall");
                $("#AlterSmall").toggleClass("styleDisableTakeAwaySmall");
                $("#ExhortSmall").toggleClass("styleDisableTakeAwaySmall");
            @endif
        @endif
        
        if(num == 0){
            $("#scBtn").prop("disabled", true);
        }else{
            $("#scBtn").removeAttr("disabled");
        }

        $("#add").on('click', function () {
            if(!$("#dineInOption").prop('checked')) {
                $("#dineInOption").attr('checked', true);
                $("#cartNumber").text(++num);
                
                //style toggle
                $("#dineIn").toggleClass("styleDineIn");

                $("#scBtn").removeAttr("disabled");
            }else{
                $("#dineInOption").attr('checked', false);
                $("#cartNumber").text(--num);

                //style toggle
                $("#dineIn").toggleClass("styleDineIn");

                if(num == 0){
                    $("#scBtn").prop("disabled", true);
                }
            }
        })

        $("#addTidbit,#addTidbitSmall").on('click', function () {
            if(!$('#tidbitOption').is(':disabled')){
                if(!$("#tidbitOption").prop('checked')){
                    $("#cartNumber").text(++num);
                    $("#tidbitOption").attr('checked', true);
                    $("#alterOption").attr("disabled", true);
                    $("#exhortOption").attr("disabled", true);
                    $("#scBtn").removeAttr("disabled");

                    //style toggle
                    $("#Tidbit").toggleClass("styleTakeAway");
                    $("#Alter").toggleClass("styleDisableTakeAway");
                    $("#Exhort").toggleClass("styleDisableTakeAway");
                    $("#TidbitSmall").toggleClass("styleTakeAwaySmall");
                    $("#AlterSmall").toggleClass("styleDisableTakeAwaySmall");
                    $("#ExhortSmall").toggleClass("styleDisableTakeAwaySmall");
                }else{
                    $("#tidbitOption").attr('checked', false);
                    $("#cartNumber").text(--num);
                    $("#alterOption").attr("disabled", false);
                    $("#exhortOption").attr("disabled", false);

                    //style toggle
                    $("#Tidbit").toggleClass("styleTakeAway");
                    $("#Alter").toggleClass("styleDisableTakeAway");
                    $("#Exhort").toggleClass("styleDisableTakeAway");
                    $("#TidbitSmall").toggleClass("styleTakeAwaySmall");
                    $("#AlterSmall").toggleClass("styleDisableTakeAwaySmall");
                    $("#ExhortSmall").toggleClass("styleDisableTakeAwaySmall");

                    if(num == 0){
                        $("#scBtn").prop("disabled", true);
                    }
                }
            }
        })

        $("#addExhort,#addExhortSmall").on('click', function () {
            if(!$('#exhortOption').is(':disabled')){
                if(!$("#exhortOption").prop('checked')){
                    $("#cartNumber").text(++num);
                    $("#exhortOption").attr('checked', true);
                    $("#alterOption").attr("disabled", true);
                    $("#tidbitOption").attr("disabled", true);
                    $("#scBtn").removeAttr("disabled");

                    //style toggle
                    $("#Exhort").toggleClass("styleTakeAway");
                    $("#Alter").toggleClass("styleDisableTakeAway");
                    $("#Tidbit").toggleClass("styleDisableTakeAway");
                    $("#ExhortSmall").toggleClass("styleTakeAwaySmall");
                    $("#AlterSmall").toggleClass("styleDisableTakeAwaySmall");
                    $("#TidbitSmall").toggleClass("styleDisableTakeAwaySmall");
                }else{
                    $("#exhortOption").attr('checked', false);
                    $("#cartNumber").text(--num);
                    $("#alterOption").attr("disabled", false);
                    $("#tidbitOption").attr("disabled", false);

                    //style toggle
                    $("#Exhort").toggleClass("styleTakeAway");
                    $("#Alter").toggleClass("styleDisableTakeAway");
                    $("#Tidbit").toggleClass("styleDisableTakeAway");
                    $("#ExhortSmall").toggleClass("styleTakeAwaySmall");
                    $("#AlterSmall").toggleClass("styleDisableTakeAwaySmall");
                    $("#TidbitSmall").toggleClass("styleDisableTakeAwaySmall");

                    if(num == 0){
                        $("#scBtn").prop("disabled", true);
                    }
                }
            }
        })

        $("#addAlter,#addAlterSmall").on('click', function () {
            if(!$('#alterOption').is(':disabled')){
                if(!$("#alterOption").prop('checked')){
                    $("#cartNumber").text(++num);
                    $("#alterOption").attr('checked', true);
                    $("#exhortOption").attr("disabled", true);
                    $("#tidbitOption").attr("disabled", true);
                    $("#scBtn").removeAttr("disabled");

                    //style toggle
                    $("#Alter").toggleClass("styleTakeAway");
                    $("#Exhort").toggleClass("styleDisableTakeAway");
                    $("#Tidbit").toggleClass("styleDisableTakeAway");
                    $("#AlterSmall").toggleClass("styleTakeAwaySmall");
                    $("#ExhortSmall").toggleClass("styleDisableTakeAwaySmall");
                    $("#TidbitSmall").toggleClass("styleDisableTakeAwaySmall");
                }else{
                    $("#alterOption").attr('checked', false);
                    $("#cartNumber").text(--num);
                    $("#exhortOption").attr("disabled", false);
                    $("#tidbitOption").attr("disabled", false);

                    //style toggle
                    $("#Alter").toggleClass("styleTakeAway");
                    $("#Exhort").toggleClass("styleDisableTakeAway");
                    $("#Tidbit").toggleClass("styleDisableTakeAway");
                    $("#AlterSmall").toggleClass("styleTakeAwaySmall");
                    $("#ExhortSmall").toggleClass("styleDisableTakeAwaySmall");
                    $("#TidbitSmall").toggleClass("styleDisableTakeAwaySmall");

                    if(num == 0){
                        $("#scBtn").prop("disabled", true);
                    }
                }
            }
        })

    });
</script>
@endsection