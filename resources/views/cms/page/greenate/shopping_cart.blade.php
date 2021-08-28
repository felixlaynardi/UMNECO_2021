{{-- {{ dd($orders[0]); }} --}}
@extends('cms.template.app')

@section('content')
    <div style="padding:100px;">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Menu Item</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $loop->index + 1; }}</th>
                        <td>{{ $order["MenuItem"]; }}</td>
                        <td>{{ $order["Quantity"]; }}</td>
                        <td>{{ $order["Subtotal"]; }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>        
            
    
            <form action="{{ route('orderSubmit') }}" method="post">
                @csrf
                @if($dineIn)
                    <input type="text" name="dineIn" value="True">
                @else
                    <input type="text" name="dineIn" value="False">
                @endif
                @if($takeAway != null)
                    <input type="text" name="takeAway" value="{{ $takeAway }}">
                @else
                    <input type="text" name="takeAway" value="none">
                @endif
                <input type="text" name="TotalOrdered" value="{{ session('OrderTotal') }}">
                <button type="submit" >ORDER NOW</button>
            </form>
    </div>

@endsection

@section('custom-js')
{{-- <script src="{{ asset('js/cms/page/order-page.js') }}"></script> --}}
@endsection