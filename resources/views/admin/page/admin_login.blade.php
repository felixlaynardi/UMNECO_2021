<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ECO LOGIN</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ asset('css/cms/base/fontawesome-5.15.2/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                @if (session('status'))
                                    <div style="color:red; font-size:0.7em; margin:auto; text-align:center; margin-bottom:5px;">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route('loginAdmin') }}" method="post" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="email" name="email" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                        @error('email')
                                            <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                        @error('password')
                                            <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                            <label class="custom-control-label" for="remember">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/cms/base/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/cms/base/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/cms/base/jquery/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>