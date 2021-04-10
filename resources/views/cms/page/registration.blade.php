@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/registration.css') }}">
@endsection

@section('content')
<script>
    var student_id_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->student_id }}',
        @endforeach
    ]
    var email_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->email }}',
        @endforeach
    ]
    var instagram_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->instagram_account }}',
        @endforeach
    ]
    var line_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->line_id }}',
        @endforeach
    ]
    var phone_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->phone_number }}',
        @endforeach
    ]
</script>
<header class="py-5">
    <div class="col-md-6 col-10 mx-auto">
        <h5>Real Emergency Daily life</h5>
        <h1>REGISTRATION</h1>
    </div>
</header>
<div class="form col-md-6 col-10 mx-auto">
    <form class="Persetujuan">
        <div class="row">
            <div class="step step-1 active">
                <object class="regulation-obj mb-2" data="{{ asset('files/REGULASI_RED.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" style="width:100%; height:650px">
                </object>
                <button class="button p-2" type="button" id="next-btn">Menuju Registrasi</button>
            </div>
        </div>
    </form>
    <div class="step step-2 registerform">
        <form action="{{route('registration')}}" method="post" class="mb-2" id="form-register">
            @csrf
            <div class="form-group mb-3">
                <label for="Firstname" class="label">Nama Depan</label>
                <input type="text" name="Firstname" id="Firstname" placeholder="ECO Family" value="{{ old('Firstname') }}" class="form-control mb-2" required>
                @if($errors->has('Firstname'))
                <div class="error error-message">{{ $errors->first('Firstname') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Lastname" class="label">Nama Belakang</label>
                <input type="text" name="Lastname" id="Lastname" placeholder="ECO Family" value="{{ old('Lastname') }}" class="form-control mb-2">
                @if($errors->has('Lastname'))
                <div class="error error-message">{{ $errors->first('Lastname') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Student_id" class="label">NIM</label>
                <input type="text" name="Student_id" id="Student_id" placeholder="00000012345" value="{{ old('Student_id') }}" class="form-control mb-2" required onkeypress='validateNIM(event)'>
                @if($errors->has('Student_id'))
                <div class="error error-message">{{ $errors->first('Student_id') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Email" class="label">Email</label>
                <input type="text" name="Email" id="Email" placeholder="eco@umn.ac.id" value="{{ old('Email') }}" class="form-control mb-2" required>
                @if($errors->has('Email'))
                <div class="error error-message">{{ $errors->first('Email') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Major" class="label">Jurusan</label>
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

                    <option value="Bukan Mahasiswa">Bukan Mahasiswa</option>
                </select>
                @if($errors->has('major'))
                <div class="error error-message">{{ $errors->first('major') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Generation" class="label">Angkatan</label>
                <select id="Generation" name="Generation" value="{{ old('Generation') }}" class="form-control mb-2" required>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="Bukan Mahasiswa">Bukan Mahasiswa</option>
                </select>
                @if($errors->has('Generation'))
                <div class="error error-message">{{ $errors->first('Generation') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Instagram_account" class="label">Username IG (Tidak di private) </label>
                <input type="text" name="Instagram_account" id="Instagram_account" placeholder="umn_eco" value="{{ old('Instagram_account') }}" class="form-control mb-2" required>
                @if($errors->has('Instagram_account'))
                <div class="error error-message">{{ $errors->first('Instagram_account') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Generation" class="label">ID Line</label>
                <input type="text" name="Line_id" id="Line_id" placeholder="umn_eco" value="{{ old('Line_id') }}" class="form-control mb-2" required>
                @if($errors->has('Line_id'))
                <div class="error error-message">{{ $errors->first('Line_id') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Phone_number" class="label">Nomor Telepon</label>
                <input type="text" name="Phone_number" id="Phone_number" placeholder="08123456789" value="{{ old('Phone_number') }}" class="form-control mb-2" required onkeypress='validateNIM(event)'>
                @if($errors->has('Phone_number'))
                <div class="error error-message">{{ $errors->first('Phone_number') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Password" class="label">Password</label>
                <input type="password" name="Password" id="Password" placeholder="*********" class="form-control mb-2" required>
                @if($errors->has('Password'))
                <div class="error error-message">{{ $errors->first('Password') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Password_Confirmation" class="label">Konfirmasi Password</label>
                <input type="password" name="Password_confirmation" id="Password_confirmation" placeholder="*********" class="form-control mb-2" required>
                @if($errors->has('Password_confirmation'))
                <div class="error error-message">{{ $errors->first('Password_confirmation') }}</div>
                @endif
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" id="Availability" name="Availability" value="1" value="{{ old('Availability') }}">
                <label class="check mt-3 col-11" for="Availability">Bersedia menjalankan kegiatan Real Emergency Daily life selama 12 hari</label>
                @if($errors->has('Availability'))
                <div class="error error-message">{{ $errors->first('Availability') }}</div>
                @endif
            </div>

            <br>
            <div class="tombol mt-5">
                <button type="submit" class="button p-2">Submit</button>
            </div>
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
<script src="{{ asset('js/cms/page/jquery.validate.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('js/cms/page/registration.js') }}"></script>

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
    function validateNIM(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
@endsection