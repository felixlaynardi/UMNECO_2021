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
    <form>
        <div class="row">
            <div class="step step-1 active">
                <object class="regulation-obj mb-2" data="{{ asset('files/PDF_REGULASI_RED.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" style="width:100%; height:650px">
                </object>
                <button class="button" type="button" id="next-btn">Menuju Registrasi</button>
            </div>
        </div>
    </form>
    <div class="step step-2">
        <form action="{{route('register')}}" method="post" class="form-">
            @csrf
            <label for="Firstname">Nama Depan</label>
            <input type="text" name="Firstname" id="Firstname" placeholder="Umn" value="{{ old('Firstname') }}" class="form-control mb-2" required>
            @if($errors->has('Firstname'))
            <div class=" error">{{ $errors->first('Firstname') }}</div>
            @endif
            <label for="Lastname">Nama Belakang</label>
            <input type="text" name="Lastname" id="Lastname" placeholder="Eco" value="{{ old('Lastname') }}" class="form-control mb-2">
            @if($errors->has('Lastname'))
            <div class=" error">{{ $errors->first('Lastname') }}</div>
            @endif
            <label for="Student_id">NIM</label>
            <input type="text" name="Student_id" id="Student_id" placeholder="0000001234" value="{{ old('Student_id') }}" class="form-control mb-2" required>
            @if($errors->has('Student_id'))
            <div class="error">{{ $errors->first('Student_id') }}</div>
            @endif
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email" placeholder="eco@umn.ac.id" value="{{ old('Email') }}" class="form-control mb-2" required>
            @if($errors->has('Email'))
            <div class="error">{{ $errors->first('Email') }}</div>
            @endif
            <label for="Major">Jurusan</label>
            <select id="Major" name="Major" value="{{ old('Major') }}" class="form-control mb-2" required>
                <option value="Informatika">Informatika</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Fisika">Teknik Fisika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>

                <option value="Akuntansi">Akuntansi</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Perhotelan">Perhotelan</option>

                <option value="Komunikasi Strategis">Komunikasi Strategis</option>
                <option value="Jurnalistik">Jurnalistik</option>

                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Film & Animasi">Film & Animasi</option>
            </select>
            @if($errors->has('major'))
            <div class="error">{{ $errors->first('major') }}</div>
            @endif
            <label for="Generation">Angkatan</label>
            <select id="Generation" name="Generation" value="{{ old('Generation') }}" class="form-control mb-2" required>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select>
            @if($errors->has('Generation'))
            <div class="error">{{ $errors->first('Generation') }}</div>
            @endif
            <label for="Instagram_account">Username IG (Tidak di private) </label>
            <input type="text" name="Instagram_account" id="Instagram_account" placeholder="umn_eco" value="{{ old('Instagram_account') }}" class="form-control mb-2" required>
            @if($errors->has('Instagram_account'))
            <div class="error">{{ $errors->first('Instagram_account') }}</div>
            @endif
            <label for="Generation">ID Line</label>
            <input type="text" name="Line_id" id="Line_id" placeholder="line id" value="{{ old('Line_id') }}" class="form-control mb-2" required>
            @if($errors->has('Line_id'))
            <div class="error">{{ $errors->first('Line_id') }}</div>
            @endif
            <label for="Phone_number">Nomor Telepon</label>
            <input type="text" name="Phone_number" id="Phone_number" placeholder="08123456789" value="{{ old('Phone_number') }}" class="form-control mb-2" required>
            @if($errors->has('Phone_number'))
            <div class="error">{{ $errors->first('Phone_number') }}</div>
            @endif
            <label for="Password">Password</label>
            <input type="password" name="Password" id="Password" placeholder="password" class="form-control mb-2" required>
            @if($errors->has('Password'))
            <div class="error">{{ $errors->first('Password') }}</div>
            @endif
            <label for="Password_Confirmation">Konfirmasi Password</label>
            <input type="password" name="Password_confirmation" id="Password_confirmation" placeholder="Confirm Password" class="form-control mb-2" required><br>
            @if($errors->has('Password_confirmation'))
            <div class="error">{{ $errors->first('Password_confirmation') }}</div>>
            @endif
            <input type="checkbox" id="Availability" name="Availability" value="1" value="{{ old('Availability') }}">
            <label class="check" for="availability"> Bersedia menjalankan kegiatan Real Emergency Dailylife selama 12 hari </label><br>
            @if($errors->has('Availability'))
            <div class="error">{{ $errors->first('Availability') }}</div>
            @endif

            <br>
            <button type="submit" class="button btn btn-primary mx-auto">Submit</button>
        </form>
    </div>


</div>
<footer id="footer">
    <img src="{{ asset('images/regis/Logo Footer.png')}}" class="logo mx-auto">
    <h6 class="foot mx-auto">© UMN ECO</h6>
</footer>
</header>

@endsection

@section('custom-js')
<!-- <script src="{{ asset('js/cms/page/home.js') }}"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>

@if ($errors->any())
<script>
    Swal.fire("Selamat datang", "Data yang di input tidak valid", "error");
</script>
@endif
<script>
    $("#next-btn").click(function() {
        $('.step-1').removeClass('active');
        $('.step-2').addClass('active');
    });
</script>
@endsection