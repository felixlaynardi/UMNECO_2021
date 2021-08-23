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
    <h5 class="shoppingcart"><button type="submit" href="" class="mx-auto">My Shopping Cart </button><p class="Notif" id="cartNumber">0</p></h5>
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
            <div class="row">
                <div class="col-md-1 col-1">
                </div>
                <div class="col-md-10 col-10 box1">
                    <div class="dineIn">
                        <img src="{{ asset('images/order/Dine-In.png') }}" class="DineInLogo">
                        <h3 class="judul">Dine-In</h3>
                        <p class="dinein">Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit,<br> sed do eiusmod</p>
                        <input type="checkbox" id="dine-in" name="Dinein_choice" value="1" class="addToCartNumberCheckbox" hidden>
                        <label for="dine-in" class="hidden">Add to cart</label><br><br><br>
                    </div>
                </div>
                <div class="col-md-1 col-1">
                </div>
            </div>
            <div class="col-md-12 col-12 row greenate">
                <img src="{{ asset('images/order/Greenate.png') }}">
            </div>
            <div class="row">
                <div class="col-md-1 col-1">
                </div>
                <div class="col-md-10 col-10">
                    <div class="row">
                    <p></p>
                    @foreach ($Takeaways_Result as $res)
                        <div class="col-md-2 col-2 pilihan mx-auto">
                        <h4 class="takeaway">{{ $res->name }} </h4>
                        <p class="skkm">1 SKKM Pengabdian</p>
                        <input type="radio" id="{{ $res->name }}" name="Takeaway_choice" value="{{ $res->id }}" class="addToCartNumberRadio" hidden>
                        <label for="{{ $res->name }}" id="addToCartNumber" class="tombol">Add to cart</label><br>
                        </div>
                    @endforeach
                    </div>
                </div>
                </form>
                <div class="col-md-1 col-1">
                </div>
            </div>
            </div>
    </div>
    <div class="col-md-1 col-1">
    <img src="{{ asset('images/order/Burger.png') }}" class="burger">
    </div>
    <img src="{{ asset('images/order/Kentang.png') }}" class="kentang">
    </div>
@endsection

@section('custom-js')
<script src="{{ asset('js/cms/page/order-page.js') }}"></script>
@endsection