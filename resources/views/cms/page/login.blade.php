@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/login.css') }}">
@endsection

@section('content')
<header></header>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 left-content" >
        <!-- style="background:url('{{ asset('images/login/Hydrant BG.png')}}')" -->
            <img id="image-left" src="{{ asset('images/login/Sendok Kayu.png')}}" class="sendok1">
            <img id="image-left" src="{{ asset('images/login/Sendok Kayu.png')}}" class="sendok2">
            <img id="image-left" src="{{ asset('images/login/Alas Hydrant.png')}}" class="hydrant-shadow">
            <img id="image-left" src="{{ asset('images/login/Greenate-Logo.gif')}}" class="greenate">

        </div>
        <div class="col-md-6 col-12 form form-group my-auto" id="form">
            <div class="right-content mx-5">
                <div class="login-title">
                    Welcome!
                </div>
                <form action="{{route('login')}}" id="form-login" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label>EMAIL</label>
                        <input type="text" name="email" id="email" placeholder="eco@umn.ac.id" class="form-control">
                        @if($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                        <br>
                    </div>
                    <div class="form-group mb-2">
                        <label>PASSWORD</label>
                        <input type="password" name="password" id="password" placeholder="*********" class="form-control">
                        @if($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                        @endif                           
                    </div>
                    <p style="color: #008c15"> If you are having trouble logging in, please contact us through our official LINE account.</p>
                    <br><br>
                    <button class="button p-2" id="btn-login" type="submit" name="action" value="login">LOGIN</button>
                    <a class="button p-2" id="btn-register" type="submit"  value="register" onclick="registerClick()">REGISTER</a>
                    
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<script>
    const registerClick = () => {
        Swal.fire({
            title: 'Kamu adalah...',
            showCancelButton: true,
            confirmButtonText: `Internal<br>(UMN)`,
            cancelButtonText: `Eksternal<br>(Non UMN)`,

            confirmButtonColor: "#ffc600",
            cancelButtonColor: "#ffc600",   
            
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.href = "{{ route('registration')}}";
            } else{
                window.location.href = "{{ route('registration_external')}}";
            }
        })
        
    }
</script>
@include('cms.template.footer') 
<!-- <footer id="footer">
    <img src="{{ asset('images/regis/Logo Footer.png')}}" class="logo mx-auto">
    <h6 class="foot mx-auto">© UMN ECO</h6>
</footer> -->

@endsection

@section('custom-js')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
<script src="{{ asset('js/cms/page/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/cms/page/login.js') }}"></script>
@if($errors->has('login'))
<script>
    Swal.fire("Login gagal", "Username atau Password salah, silahkan coba lagi.", "error");
</script>
@endif



@endsection