@extends('cms.template.app')

@section('custom-css')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cms/page/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/page/profile.css') }}">
@endsection

@section('content')
<div id="main" class="main-container pt-5">
    <div class="profile-header" style="padding-top:10rem;padding-bottom:10rem;background-image:url({{ asset('images/profile/Header@2x.png') }});">
        <div class="profile-eco-friend">
            Hello ECO Friend,
        </div>
        <div class="profile-name">
            NIKOLAS
        </div>
        </div>
        <div class="profile-data">
            ECO Friend Profile
        </div>
        <div class="profile-data-eco-friend">
            <div class="profile-name-eco-friend">
                Name:
            </div>
            <div class="profile-nim-eco-friend">    
                NIM:
            </div>
            <div class="profile-email-eco-friend">
                Student Email:
            </div>
        </div>
    </div>
@endsection