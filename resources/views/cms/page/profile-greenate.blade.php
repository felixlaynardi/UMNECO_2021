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
    <div class="profile-container mt-5 pb-5">
        <div class="order-wrapper py-5" style="min-height:100vh;">
            <img src="{{ asset('images/profile-greenate/leaf.png') }}" class="leaf-4 d-none d-sm-block">
            <img src="{{ asset('images/profile-greenate/cutting-board.png') }}" class="cutting-board d-none d-sm-block">
            <div class="profile-content-container col-10 col-md-6 mx-auto">
                <div class="profile-logo-container">
                    <div class="profile-logo col-10 col-md-6 mx-auto">
                        <img src="{{ asset('images/about-greenate/greenate-logo.png') }}" alt="" style="max-width:100%;">
                    </div>
                </div>
                <div class="profile-title mt-3">
                    GREENATE has already closed!
                </div>
                <div class="profile-subtitle mx-auto mt-5">
                    We hope you had a great experience and a new eating habit for the betterment of our Earth. Further information regarding GREENATE will be announced on our Instagram.
                </div>
                <div class="profile-footer mx-auto mt-5">
                    Thank you for your participation!
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->
        
    </div>

</div>

@include('cms.template.footer')

@endsection


<!-- Javascript -->
@section('custom-js')
<script>
    function matchHeight(){
        var maxHeight = 0;

        var divs = jQuery(".item-wrapper");
        jQuery.each(divs, function(){
            var height = jQuery(this).height();
            if(maxHeight<height)
                maxHeight = height;

        });
        divs.height(maxHeight);
    }
    $(window).on('load', function() {
        matchHeight();
    });
</script>
<script>
    Swal.queue([
        {
            title: '',
            html: `
            <div class="container">
            <h2 style="font-family: 'Neufreit Extra Bold';">THANK YOU, ECO FRIENDS!</h2>
                <div class="background">
                    <div class="sweet-alert-container">
                        <div class="dinein-box">
                            <img src="{{ asset('images/closegreenate/Dine In Logo.png') }}" />
                        </div>
                        <div class="takeaway-box">
                            <img src="{{ asset('images/closegreenate/Takeaway.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="sweet-container">
                    <div class="Exhort-box">
                                <img src="{{ asset('images/closegreenate/Exhort.png') }}" />
                    </div>
                    <div class="Alter-box">
                                <img src="{{ asset('images/closegreenate/Alter.png') }}" />
                    </div>
                    <div class="Tidbit-box">
                                <img src="{{ asset('images/closegreenate/Tidbit.png') }}" />
                    </div>
                </div>
                <h6 style="font-family: 'Neufreit Extra Bold';">Your participation in RED have brought a great amount of positive impacts for our Earth</h6>

            </div>
            
            `,
            confirmButtonText: 'Continue',
            showCancelButton: false,
        }
    ])
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

<script>
    @if($eventStatus)
        @if($data->task_link == NULL)
            $(".submit-link").click(function() {
                var re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
                var valid = false;
                Swal.fire({
                    title: 'Submit Link',
                    html: `
                    <form action="{{ route('submitLink') }}" method="post" id="form-rise">
                        @csrf
                        <input type="url" name="link" id="task-link" class="swal2-input" placeholder="Insert Link">
                    </form>
                `,
                    showCancelButton: false,
                    confirmButtonText: 'Submit',
                    focusConfirm: false,
                    preConfirm: () => {
                        const url = Swal.getPopup().querySelector('#task-link').value
                        valid = true
                        if (!url || !re.test(url)) {
                            Swal.showValidationMessage(`Harus menggunakan url yang valid`)
                            valid = false
                        }
                        return {
                            url: valid
                        }
                    }
                }).then((result) => {
                    if (valid) {
                        $("#form-rise").submit()
                    }
                })
            })
        @else
            $(".submit-link").click(function() {
                Swal.fire({
                    text: "You've already submitted a link! Have a nice day!",
                    icon: 'info',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                })
            })
        @endif
    @endif
</script>
@endsection