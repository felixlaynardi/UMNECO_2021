    @extends('cms.template.app')

    @section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/login.css') }}">
    @endsection

    @section('content')
    <header></header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 left-content" style="background:url('{{ asset('images/login/Hydrant BG.png')}}')">
                <img id="image-left" src="{{ asset('images/login/Alas Hydrant.png')}}" class="hydrant-shadow">
                <img id="image-left" src="{{ asset('images/login/Hydrant.gif')}}" class="hydrant">
            </div>
            <div class="col-md-6 col-12 form form-group my-auto" id="form">
                <div class="right-content mx-5">
                    <div class="login-title">
                        ENTER RED
                    </div>
                    <form action="{{route('login')}}" id="form-login" method="post">
                        @csrf
                        <div class="form-group mb-2">
                            <label>Email</label>
                            <input type="text" name="email" id="email" placeholder="eco@umn.ac.id" class="form-control">
                            @if($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                            <br>
                        </div>
                        <div class="form-group mb-2">
                            <label>Password</label>
                            <input type="password" name="password" id="password" placeholder="*********" class="form-control">
                            @if($errors->has('password'))
                            <div class="error">{{ $errors->first('password') }}</div>
                            @endif
                            <br><br>
                        </div>
                        <button class="button p-2" id="btn-login" type="submit" name="action" value="login">Login</button>
                        <a class="button p-2 btn-register" type="submit" href="{{ route('registration' )}}" value="register">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
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