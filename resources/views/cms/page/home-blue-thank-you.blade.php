@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/home-blue-thank-you.css') }}">

@endsection

@section('content')

<div class="container">
    <img src="{{ asset('images/about-blue/bubbles.png') }}" alt="" class="bubbles-2 d-sm-block d-none">

    <div class="thank-you-section my-auto">
        <div class="row justify-content-around my-auto py-4">
            <div class="col-12 order-1 thank-you-image">
                <img src="{{ asset('images/about-blue/SubmittedOverlay.jpg') }}" alt="" class="w-100">
            </div>
            <div class="col-12 order-2 py-4 thank-you-text">
                <h1 class="thank-you-text-title">Terima kasih telah membantu Lulu, ECO Friends!</h1>
                <p class="thank-you-text-content">Semoga apa yang dilakukan pada kegiatan BLUE dapat kamu terapkan di kehidupan sehari-hari sehingga kebersihan laut terus terjaga ya!</p>
            </div>
        </div>
    </div>

    </div>
</div>

@include('cms.template.footer')
@endsection


<!-- Javascript -->
@section('custom-js')
<script>
    $( document ).ready(function() {
        $(".thank-you-image").fadeIn(2000);
        $('.thank-you-text-content').fadeIn(3000);
        $('.thank-you-text-title').fadeIn(4000);
    });
</script>
@endsection
