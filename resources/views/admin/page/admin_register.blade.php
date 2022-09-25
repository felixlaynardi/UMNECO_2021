<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ secure_asset('css/cms/base/fontawesome-5.15.2/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ secure_asset('css/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="{{ secure_asset('images/umn-eco-logo.png') }}" alt="" style="width:100%;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="{{ route('registerAdmin') }}" method="post" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name"
                                        placeholder="Name" value="{{ old('name') }}">
                                    @error('name')
                                        <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address" value="{{ old('email') }}">
                                    @error('email')
                                        <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password">
                                        @error('password')
                                            <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password_confirmation" name="password_confirmation" placeholder="Repeat Password">
                                        @error('password_confirmation')
                                            <div style="color:red; font-size:0.7em; margin-left:20px; margin-top:10px;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <div class="text-center">
                                <a class="small" href="{{ route('loginAdmin') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ secure_asset('js/cms/base/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ secure_asset('js/cms/base/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ secure_asset('js/cms/base/jquery/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ secure_asset('js/admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>