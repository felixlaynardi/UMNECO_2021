@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/early-oprec.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1 id="headline">Coming Soon!</h1>
        <div id="countdown">
            <ul>
            <li><span id="days"></span>days</li>
            <li><span id="hours"></span>Hours</li>
            <li><span id="minutes"></span>Minutes</li>
            <li><span id="seconds"></span>Seconds</li>
            </ul>
        </div>
    </div>
    
@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/early-oprec.js') }}"></script>
@endsection

