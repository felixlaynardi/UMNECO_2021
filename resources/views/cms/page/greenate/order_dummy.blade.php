@extends('cms.template.app')

@section('content')
    <h1>Ceritanya Order Page</h1>
    {{-- <form action="" method="post">
        <ul>
            @foreach ($Takeaways_Result as $res)
                <li>{{ $res->name }} <button type="button" name="takeaway" value="{{ $res->id }}" >Add to Cart</button></li>
            @endforeach
        </ul>
    </form> --}}

    <form action="{{ route('dummyShoppingCart') }}" method="post">
    @csrf
        
    <h5><button type="submit" href="">My Shopping Cart</button> <p id="cartNumber">0</p> </h5>



        <div class="dineIn">
            <p>Select Dine-In:</p>
            <input type="checkbox" id="dine-in" name="Dinein_choice" value="1" class="addToCartNumberCheckbox">
            <label for="dine-in"> Dine-In</label><br><br><br>
        </div>

        <div>
            <p>Select TakeAway:</p>
            @foreach ($Takeaways_Result as $res)
                <input type="radio" id="{{ $res->name }}" name="Takeaway_choice" value="{{ $res->id }}" class="addToCartNumberRadio">
                <label for="{{ $res->name }}" id="addToCartNumber" >{{ $res->name }}</label><br>
            @endforeach
        </div>
    </form>


@endsection

@section('custom-js')
<script src="{{ asset('js/cms/page/order-page.js') }}"></script>

@endsection