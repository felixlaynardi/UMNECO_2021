@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/about-red.css') }}">
@endsection

@section('content')
<div class="main">
    <img src="{{ asset('images/about-red/cloud.png') }}" class="cloud">
    
    
    
    <div class="container section-1">
        <div class="row">
            <div class="col-lg-6 col-sm-12 red-content logo"> <img src="{{ asset('images/about-red/logo-red.png') }}" class="logo-red"></div>
            <div class="col-lg-6 col-sm-12 red-content text"> 
                <h1>WHAT IS RED?</h1> 
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            
        </div>
    </div>
    <div class="section-2">
        <img src="{{ asset('images/about-red/city.png') }}" class="city"> 

    </div>
    <img src="{{ asset('images/about-red/circle.png') }}" class="circle d-block d-lg-block d-sm-none" > 
</div>


@endsection