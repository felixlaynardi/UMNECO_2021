{{-- {{ dd($orders[0]); }} --}}
@extends('cms.template.app')

@section('content')


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
                {{-- <tr>
                    <th >1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th >1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th >1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th >1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr> --}}
            </tbody>
        </table>        


        <form action="{{ route('orderSubmit') }}" method="post">
            @csrf
            <input type="text" name="dine_in" value="{{ $dine_id }}">
            <input type="text" name="takeaway_id" value="{{ $takeaway_id }}">
            <input type="text" name="ordered" value="1">
            <button type="submit" >ORDER NOW</button>
        </form>

@endsection

@section('custom-js')
{{-- <script src="{{ asset('js/cms/page/order-page.js') }}"></script> --}}

@endsection