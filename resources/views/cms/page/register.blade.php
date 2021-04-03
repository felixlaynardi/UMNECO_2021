<!--Ganti error message didalem div yang classnya error, if nya sesuain cari error gara2 apa -->
@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cms/page/regis.css') }}">
@endsection

@section('content')
<header>
<h5>Real Emergency Daily life</h5>
<h1>REGISTRATION</h1>
</header>
<div class="form">
<form action="{{route('register')}}" method="post" class="form-">
    @csrf
    <label>Nama Lengkap</label>
    <input type="text" name="name" id="name" placeholder="UMN ECO" class="form-control"><br>
    @if($errors->has('name'))
    <div class="error">{{ $errors->first('name') }}</div>
    @endif
    <label>NIM</label>
    <input type="text" name="student_id" id="student_id" placeholder="0000001234" class="form-control"><br>
    @if($errors->has('student_id'))
    <div class="error">{{ $errors->first('student_id') }}</div>
    @endif
    <label>Email</label>
    <input type="text" name="email" id="email" placeholder="eco@umn.ac.id" class="form-control"><br>
    @if($errors->has('email'))
    <div class="error">{{ $errors->first('email') }}</div>
    @endif
    <label>jurusan</label>
    <select id="major" name="major" class="form-control"><br>
        <option value="Informatika">Informatika</option>
        <option value="Film & Animasi">Film & Animasi</option>
        <option value="Strategic Communication">Strategic Communication</option>
        <option value="Akuntansi">Akuntansi</option>
    </select><br>
    @if($errors->has('major'))
    <div class="error">{{ $errors->first('major') }}</div>
    @endif
    <label>Angkatan</label>
    <select id="generation" name="generation" class="form-control">
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
    </select><br>
    @if($errors->has('generation'))
    <div class="error">{{ $errors->first('generation') }}</div>
    @endif
    <label>Username IG (tidak di-private)</label>
    <input type="text" name="instagram_account" id="instagram_account" placeholder="umn_eco" class="form-control"><br>
    @if($errors->has('instagram_account'))
    <div class="error">{{ $errors->first('instagram_account') }}</div>
    @endif
    <label>ID Line</label>
    <input type="text" name="line_id" id="line_id" placeholder="line_id" class="form-control"><br>
    @if($errors->has('line_id'))
    <div class="error">{{ $errors->first('line_id') }}</div>
    @endif
    <label>Nomor Telepon</label>
    <input type="text" name="phone_number" id="phone_number" placeholder="081235678910" class="form-control"><Br>
    @if($errors->has('phone_number'))
    <div class="error">{{ $errors->first('phone_number') }}</div>
    @endif
    <label>Password</label>
    <input type="password" name="password" id="password" placeholder="password" class="form-control"><br>
    @if($errors->has('password'))
    <div class="error">{{ $errors->first('password') }}</div>
    @endif
    <label>Konfirmasi Password</label>
    <input type="password" name="confirm_password" id="confirm password" placeholder="confirm_password" class="form-control">
    @if($errors->has('confirm_password'))
    <div class="error">{{ $errors->first('confirm_password') }}</div>
    @endif
    <input type="checkbox" id="availability" name="availability" value="1">
    <label for="availability" class="checkbox"> Bersedia menjalankan kegiatan Real Emergency Dailylife selama 12 hari </label><br>
    @if($errors->has('availability'))
    <div class="error">{{ $errors->first('availability') }}</div>
    @endif

    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<footer>
<img src="{{ asset('images/regis/Logo Footer.png')}}" class="logo">
</footer>
</header>

@endsection

@section('custom-js')
    <script src="{{ asset('js/cms/page/home.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection