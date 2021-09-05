{{-- {{ dd($orders[0]); }} --}}
@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/receipt.css') }}">
@endsection

@section('content')
    <div class="content">    
        <div class="header" style="background-image: url({{ asset('images/shoppingcart/Daun.png')}});">
            <h1>Your Shopping Cart</h1>
            
        </div>

        <div class="main">
            <div class="recipe-table">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th scope="col" class="menu-item">Menu Item</th>
                            <th scope="col" class="common">Qty</th>
                            <th scope="col" class="common">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order["MenuItem"] }}</td>
                                <td>1</td>
                                <td>{{ $order["Subtotal"] }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <form action="{{ route('greenateOS') }}" method="post" class="form" >
                    <h2>ORDER SUBTOTAL</h2>
                    <h1>{{ $orderTotal }}</h1>
                    @csrf
                    @if($dineIn)
                        <input type="hidden" name="dineIn" value="True">
                    @else
                        <input type="hidden" name="dineIn" value="False">
                    @endif
                    @if($takeAway != null)
                        <input type="hidden" name="takeAway" value="{{ $takeAway }}">
                    @else
                        <input type="hidden" name="takeAway" value="none">
                    @endif
                    <input type="hidden" name="TotalOrdered" value="{{ session('OrderTotal') }}">
                    <button type="submit" class="btn btn-warning" id="orderSubmitBtn">Order Now</button>
                </form>

            </div>
            <div class="backLinkContainer">
                <a href="{{ route('greenateMenu') }}" class="backLink backLinkStyle">Back to Menu</a>
            </div>

        </div>
    </div>
    @include('cms.template.footer')
@endsection

@section('custom-js')
    <script>
        var counterBtn = 0;
        $(document).ready(function () {
            $("#orderSubmitBtn").click(function() {
                if(counterBtn != 0){
                    ("#orderSubmitBtn").prop('disabled','disabled');
                }
                $counterBtn++;
            })
        })
    </script>
@endsection