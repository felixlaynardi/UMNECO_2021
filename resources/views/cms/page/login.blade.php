@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/login.css') }}">
@endsection

@section('content')
<div class="container-fluid" style="background:red;">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img id="image-left" src="{{ asset('images/login/Hydrant BG.png')}}" class="BG">
            <img id="image-left" src="{{ asset('images/login/Alas Hydrant.png')}}" class="alas">
            <img id="image-left" src="{{ asset('images/login/Hydrant.gif')}}" class="hydrant">
        </div>
        <div class="col-md-6 form form-group" id="form">
            <h1>ENTER RED</h1><br>
            <form action="{{route('login')}}" method="post">
                @csrf
                <label>Email</label>
                <input type="text" name="email" id="email" placeholder="email" class="form-control">
                @if($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
                @endif
                <br>
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="password" class="form-control">
                @if($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
                @endif
                <br><br>
                <button type="submit" name="action" value="login" class="btn btn-primary">Login</button>
                <button type="submit" name="action" value="register" class="btn btn-primary register">Register</button>
            </form>
        </div>
    </div>
</div>

</div>
</div>

@endsection

@section('custom-js')
<script src="{{ asset('js/cms/page/home.js') }}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
@if($errors->has('login'))
<script>
    Swal.fire("Login gagal", "Username atau Password salah, silahkan coba lagi.", "error");
</script>
@endif
@endsection