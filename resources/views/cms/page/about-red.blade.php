@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-red.css') }}">
@endsection

@section('content')
<div class="main">
    <img src="{{ asset('images/about-red/Awan.png') }}" class="awan">
    <img src="{{ asset('images/about-red/Lingkaran.png') }}" class="lingkaran"> 
    <div class="container section-1">
        <div class="row">
            <div class="col-6"> <h1>hello</h1> </div>
            <div class="col-6"> <h1>WHAT IS RED?</h1> </div>
        </div>
    </div>
    
</div>


@endsection