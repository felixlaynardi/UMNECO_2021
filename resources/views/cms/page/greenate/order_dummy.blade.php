@extends('cms.template.app')

@section('content')
    <div style="padding:100px;">
        <form action="{{ route('dummyShoppingCart') }}" method="post">
        @csrf
            
        <h5><button type="submit" id="scBtn">My Shopping Cart</button> <p id="cartNumber">0</p> </h5>

            <div class="dineIn">
                <p>Select Dine-In:</p>
                <input type="checkbox" id="dineIn" name="dineIn" value="Dine-In" class="dineInOption">
                <label for="dineIn"> Dine-In</label><br><br><br>
            </div>

            <div>
                <p>Select TakeAway:</p>

                <input type="checkbox" id="tidbit" name="Tidbit" value="Tidbit" class="takeAwayOption">
                <label for="Tidbit"> Tidbit</label><br>
                <input type="checkbox" id="exhort" name="Exhort" value="Exhort" class="takeAwayOption">
                <label for="Exhort"> Exhort</label><br>
                <input type="checkbox" id="alter" name="Alter" value="Alter" class="takeAwayOption">
                <label for="Alter"> ALter</label><br>
            </div>
        </form>

    </div>
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
            $(".dineInOption").prop('checked', true);
            $('#cartNumber').text(++num);
        @endif
        @if(session('TakeAway') != null && session('TakeAway') != "none")
            @if(session('TakeAway') == "Alter")
                $("#tidbit").attr("disabled", true);
                $("#exhort").attr("disabled", true);
                $("#alter").prop('checked', true);
                $('#cartNumber').text(++num);
            @elseif(session('TakeAway') == "Exhort")
                $("#alter").attr("disabled", true);
                $("#tidbit").attr("disabled", true);
                $("#exhort").prop('checked', true);
                $('#cartNumber').text(++num);
            @elseif(session('TakeAway') == "Tidbit")
                $("#alter").attr("disabled", true);
                $("#exhort").attr("disabled", true);
                $("#tidbit").prop('checked', true);
                $('#cartNumber').text(++num);
            @endif
        @endif
        
        if(num == 0){
            $("#scBtn").prop("disabled", true);
        }else{
            $("#scBtn").removeAttr("disabled");
        }

        //this jquery for increment and decrement add to cart text number for dine-in
        $(".dineInOption").on('click', function () {
            if($(".dineInOption:checked").is(':checked')) {
                $("#cartNumber").text(++num);
                $("#scBtn").removeAttr("disabled");
            }else{
                $("#cartNumber").text(--num);
                if(num == 0){
                    $("#scBtn").prop("disabled", true);
                }
            }
        })
        
        
        $(".takeAwayOption").on('click', function () {
            if(this.id == "tidbit"){
                if($("#tidbit:checked").is(':checked')){
                    $("#cartNumber").text(++num);
                    $("#alter").attr("disabled", true);
                    $("#exhort").attr("disabled", true);
                    $("#scBtn").removeAttr("disabled");
                }else{
                    $("#cartNumber").text(--num);
                    $("#alter").attr("disabled", false);
                    $("#exhort").attr("disabled", false);
                    console.log(num);
                    if(num == 0){
                        $("#scBtn").prop("disabled", true);
                    }
                }
            }else if(this.id == "alter"){
                if($("#alter:checked").is(':checked')){
                    $("#cartNumber").text(++num);
                    $("#tidbit").attr("disabled", true);
                    $("#exhort").attr("disabled", true);
                    $("#scBtn").removeAttr("disabled");
                }else{
                    $("#cartNumber").text(--num);
                    $("#tidbit").attr("disabled", false);
                    $("#exhort").attr("disabled", false);
                    console.log(num);
                    if(num == 0){
                        $("#scBtn").prop("disabled", true);
                    }
                }
            }else if(this.id == "exhort"){
                if($("#exhort:checked").is(':checked')){
                    $("#cartNumber").text(++num);
                    $("#alter").attr("disabled", true);
                    $("#tidbit").attr("disabled", true);
                    $("#scBtn").removeAttr("disabled");
                }else{
                    $("#cartNumber").text(--num);
                    $("#alter").attr("disabled", false);
                    $("#tidbit").attr("disabled", false);
                    console.log(num);
                    if(num == 0){
                        $("#scBtn").prop("disabled", true);
                    }
                }
            }
        })

    });
</script>

@endsection