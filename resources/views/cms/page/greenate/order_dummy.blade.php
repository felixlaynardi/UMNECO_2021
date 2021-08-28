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
    <div class="container-fluid mx-auto">
    <div class="row">
    <img src="{{ asset('images/order/Ayam_1.png') }}" class="ayam">
        
    <div class="col-md-1 col-1">
    </div>

    <div class="col-md-10 col-10 mid">
    <h5 class="shoppingcart"><button type="submit" class="mx-auto">My Shopping Cart </button><p class="Notif" id="cartNumber">0</p></h5>    
        <div class="main">
            {{-- <form action="" method="post">
                <ul class="Add">
                    @foreach ($Takeaways_Result as $res)
                        <li>{{ $res->name }} <button type="button" class="tombol" name="takeaway" value="{{ $res->id }}" >Add to Cart</button></li>
                    @endforeach
                </ul>
            </form> --}}

            <form action="{{ route('dummyShoppingCart') }}" method="post">
            @csrf
            <div class="row justify-content-center" >
                <div class="col-md-10 col-10 box1">
                    <div class="dineIn active" id="dineIn">
                        <img src="{{ asset('images/order/Dine-In.png') }}" class="DineInLogo">
                        <h3 class="judul">Dine-In</h3>
                        <p class="dinein">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit,<br> sed do eiusmod</p>
                        <input type="checkbox" id="dine-in" name="Dinein_choice" value="1" class="addToCartNumberCheckbox" hidden>
                        <label for="dine-in" onclick="change()" id="add" class="add">Add to cart</label><br><br><br>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-12 row greenate">
                <img src="{{ asset('images/order/Greenate.png') }}">
            </div>

            <!------------------- Monitor --------------------------->

            <div class="col-md-10 col-10 row monitor justify-content-center">
                <div class="col-md-2 col-2 pilihan mx-auto" id="Tidbit">
                    <img src="{{ asset('images/order/Tidbit.png') }}" class="images">
                    <h3 class="takeaway">Tidbit</h3>
                    <p class="skkm" id="infoTidbit">1 SKKM Pengabdian</p>
                    <input type="checkbox" id="tidbit" class="" hidden name="Tidbit" value="Tidbit" class="takeAwayOption">
                    <label for="Tidbit" class="tombol" id="addTidbit" onclick="one()"> Add to Cart</label><br>
                </div>
                <div class="col-md-2 col-2 pilihan mx-auto" id="Exhort">
                    <img src="{{ asset('images/order/Exhort.png') }}" class="images">    
                    <h3 class="takeaway">Exhort</h3>
                    <p class="skkm" id="infoExhort">1 SKKM Pengabdian</p>
                    <input type="checkbox" id="exhort" class="" hidden name="Exhort" value="Exhort" class="takeAwayOption">
                    <label for="Exhort" class="tombol" onclick="two()" id="addExhort">Add to Cart</label><br>
                </div>
                <div class="col-md-2 col-2 pilihan mx-auto" id="Alter">
                    <img src="{{ asset('images/order/Alter.png') }}" class="images">
                    <h3 class="takeaway">Alter</h3>
                    <p class="skkm" id="infoAlter">1 SKKM Pengabdian</p>
                    <input type="checkbox" id="alter" class="" hidden name="Alter" value="Alter" class="takeAwayOption">
                    <label for="Alter" class="tombol" onclick="three()" id="addAlter">Add to Cart</label><br>
                </div>
                </form>
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
                                <div class="col-lg-10 col-sm-10 info">
                                <h3 class="title">Tidbit</h3>
                                <p class="skkm" id="infoTidbitSm">1 SKKM Pengabdian</p>
                                <input type="checkbox" id="tidbit" class="tombol" hidden name="Tidbit" value="Tidbit" class="takeAwayOption">
                                <label for="Tidbit" class="tombol " onclick="one()" id="addTidbitSmall">Add to Cart</label><br>
                                </div>
                            </div>
                            <div class="item carousel-item pilihan  box" data-bs-interval="1000000000" id="ExhortSmall">
                                <div class="col-lg-10 col-sm-10 slide-logo">
                                    <img src="{{ asset('images/order/Exhort.png') }}" class="logo w-100 pb-5">
                                </div>
                                <div class="col-lg-10 col-sm-10 info">
                                    <h3 class="title">Exhort</h3>
                                    <p class="skkm" id="infoExhortSm">1 SKKM Pengabdian</p>
                                    <input type="checkbox" id="exhort" class="" hidden name="Exhort" value="Exhort" class="takeAwayOption">
                                    <label for="Exhort" class="tombol " onclick="two()" id="addExhortSmall">Add to Cart</label><br>
                                </div>
                            </div>
                            <div class="item carousel-item pilihan box" data-bs-interval="1000000000" id="AlterSmall">
                                <div class="col-lg-10 col-sm-10 slide-logo">
                                    <img src="{{ asset('images/order/Alter.png') }}" class="logo w-100 pb-5">
                                </div>
                                <div class="col-lg-10 col-sm-10 info">
                                    <h3 class="title">Alter</h3>
                                    <p class="skkm" id="infoAlterSm">1 SKKM Pengabdian</p>
                                    <input type="checkbox" id="alter" class="" hidden name="Alter" value="Alter" class="takeAwayOption">
                                    <label for="Alter" class="tombol " onclick="three()" id="addAlterSmall">Add to Cart</label><br>
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
    <div class="col-md-1 col-1 kanan">
    <img src="{{ asset('images/order/Burger.png') }}" class="burger">
    <img src="{{ asset('images/order/Kentang.png') }}" class="kentang">
    </div>
    </div>
@endsection

@section('custom-js')
<script src="{{ asset('js/cms/page/order-page.js') }}"></script>

<script>
function change() {
    var element = document.getElementById("dineIn");
    element.classList.toggle("style");

    var element = document.getElementById("add");
    element.classList.toggle("bttn");
}
function one() {
    var element = document.getElementById("Tidbit");
    element.classList.toggle("styleTakeAway");

    var element = document.getElementById("infoTidbit");
    element.classList.toggle("information");

    var element = document.getElementById("addTidbit");
    element.classList.toggle("bttn");

    var element = document.getElementById("TidbitSmall");
    element.classList.toggle("styleTakeAway");

    var element = document.getElementById("infoTidbitSm");
    element.classList.toggle("information");

    var element = document.getElementById("addTidbitSmall");
    element.classList.toggle("bttn");
    }
function two() {
    var element = document.getElementById("Exhort");
    element.classList.toggle("styleTakeAway");

    var element = document.getElementById("infoExhort");
    element.classList.toggle("information");

    var element = document.getElementById("addExhort");
    element.classList.toggle("bttn");

    var element = document.getElementById("ExhortSmall");
    element.classList.toggle("styleTakeAway");

    var element = document.getElementById("infoExhortSm");
    element.classList.toggle("information");

    var element = document.getElementById("addExhortSmall");
    element.classList.toggle("bttn");
}
function three() {
    var element = document.getElementById("Alter");
    element.classList.toggle("styleTakeAway");

    var element = document.getElementById("infoAlter");
    element.classList.toggle("information");

    var element = document.getElementById("addAlter");
    element.classList.toggle("bttn");

    var element = document.getElementById("AlterSmall");
    element.classList.toggle("styleTakeAway");

    var element = document.getElementById("infoAlterSm");
    element.classList.toggle("information");

    var element = document.getElementById("addAlterSmall");
    element.classList.toggle("bttn");
}
</script>
@endsection