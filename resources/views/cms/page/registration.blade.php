@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/registration.css') }}">
@endsection

@section('content')
<script>
    var student_id_list = [
        @foreach($ecofriends as $e)
        '{{ $e->student_id }}',
        @endforeach
    ]
    var email_list = [
        @foreach($ecofriends as $e)
        '{{ $e->email }}',
        @endforeach
    ]
    var instagram_list = [
        @foreach($ecofriends as $e)
        '{{ $e->instagram_account }}',
        @endforeach
    ]
    var line_list = [
        @foreach($ecofriends as $e)
        '{{ $e->line_id }}',
        @endforeach
    ]
    var phone_list = [
        @foreach($ecofriends as $e)
        '{{ $e->phone_number }}',
        @endforeach
    ]
</script>
@if ($errors->any())
<script>
    window.onload = function(){
        Swal.fire("Mohon periksa kembali data yang di input", "Data yang di input tidak valid", "error");
        $('.step-1-internal').removeClass('active');
        $('.step-1-external').removeClass('active');
        $('.step-2').addClass('active');
        $('.form-internal').hide();
        $('.form-external').hide();
        if(old('is_internal')){
            $('.form-internal').show();
            $('$is_internal').val("1");
        }else if(!old('is_internal')){
            $('.form-external').show();
            $('$is_internal').val("0");
        }
    }
</script>
@else
<script>
    window.onload = function(){
        $('.step-1-internal').addClass('active');
        $('.step-1-external').addClass('active');
        $('.form-internal').removeClass('active');
        $('.form-external').removeClass('active');
        $('.step-2').removeClass('active');
        Swal.fire({
            title: 'Apakah kamu mahasiswa UMN?',
            showCancelButton: true,
            confirmButtonText: `Iya`,
            cancelButtonText: `Tidak`,
            allowOutsideClick: false,
            allowEscapeKey: false,
            confirmButtonColor: "#ffc600",
            cancelButtonColor: "#ffc600",   
            
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $('.step-1-external').removeClass('active');
                $('.step-1-internal').addClass('active');
                $('#is_internal').val('1');
            } else{
                $('.step-1-internal').removeClass('active');
                $('.step-1-external').addClass('active');
                $('#is_internal').val('0');
            }
        })
    }
</script>
@endif
<header>
    <div class="col-md-6 col-10 mx-auto">
        <div class="header-font">
            <p>BLUE</p>
            <p>REGISTRATION</p>
        </div>

        <img class="image-shell" src="{{ asset('images/regis/Kerang_2.png')}}">
        <img class="image-coral" src="{{ asset('images/regis/Terumbu_1.png')}}">

    </div>
</header>
<div class="form col-md-6 col-10 mx-auto" id="form-page">
    <form class="Persetujuan">
        <div class="row">
            <!-- Regulasi Internal -->
            <div class="step step-1-internal active">
                <object class="regulation-obj mb-2 old" data="{{ asset('files/REGULASI_GREENATE_INTERNAL.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf">
                    <div class="regulasiBlue">
                        <a href="{{ asset('files/REGULASI_GREENATE_INTERNAL.pdf') }}" class="p-3" download>Regulasi Greenate Internal</a>
                    </div>
                </object>
                <div class="regulation-obj mb-2 new">
                    <div class="regulasiBlue">
                        <a href="{{ asset('files/REGULASI_GREENATE_INTERNAL.pdf') }}" class="p-3" download>Regulasi Greenate Internal</a>
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" id="regulation-internal" name="regulation-internal" value="1" value="{{ old('regulation-internal') }}">
                    <label class="check mt-3 col-11" for="regulation-internal">I have read and agreed to the regulation</label>
                </div>
                <div class="next-button" style="text-align:center;">
                    <button class="button p-2" type="button" id="next-btn-internal" type="submit" onclick="regulasiClick()">Go to Registration</button>
                </div>
            </div>
            <!-- Regulasi External -->
            <div class="step step-1-external active">
                <object class="regulation-obj mb-2 old" data="{{ asset('files/REGULASI_GREENATE_EKSTERNAL.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf">
                    <div class="regulasiBlue">
                        <a href="{{ asset('files/REGULASI_GREENATE_EKSTERNAL.pdf') }}" class="p-3" download>Regulasi Greenate Eksternal</a>
                    </div>
                </object>
                <div class="regulation-obj mb-2 new">
                    <div class="regulasiBlue">
                        <a href="{{ asset('files/REGULASI_GREENATE_EKSTERNAL.pdf') }}" class="p-3" download>Regulasi Greenate Eksternal</a>
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" id="regulation-external" name="regulation-external" value="1" value="{{ old('regulation-external') }}">
                    <label class="check mt-3 col-11" for="regulation-external">I have read and agreed to the regulation</label>
                </div>
                <div class="next-button" style="text-align:center;">
                    <button class="button p-2" type="button" id="next-btn-external" type="submit" onclick="regulasiClick()">Go to Registration</button>
                </div>
            </div>
        </div>
    </form>
    <div class="step step-2 registerform">
        <form action="{{route('registration')}}" method="post" class="mb-2" id="form-register">
            @csrf
            <div class="form-group mb-3">
                <label for="Full_name" class="label">Nama Lengkap</label>
                <input type="text" name="Full_name" id="Full_name" placeholder="ECO Family" value="{{ old('Full_name') }}" class="form-control mb-2" required>
                @if($errors->has('Full_name'))
                <div class="error error-message">{{ $errors->first('Full_name') }}</div>
                @endif
            </div>
            <div class="form-group mb-3 form-internal">
                <label for="Email" class="label">Email Student</label>
                <input type="text" name="Email" id="Email" placeholder="eco@umn.ac.id" value="{{ old('Email') }}" class="form-control mb-2" required>
                @if($errors->has('Email'))
                <div class="error error-message">{{ $errors->first('Email') }}</div>
                @endif
            </div>
            <div class="form-group mb-3 form-external">
                <label for="Email_external" class="label">Email</label>
                <input type="text" name="Email_external" id="Email_external" placeholder="eco@umn.ac.id" value="{{ old('Email') }}" class="form-control mb-2" required>
                @if($errors->has('Email'))
                <div class="error error-message">{{ $errors->first('Email') }}</div>
                @endif
            </div>
            <div class="form-group mb-3 form-internal">
                <label for="Student_id" class="label">NIM</label>
                <input type="text" name="Student_id" id="Student_id" placeholder="00000012345" value="{{ old('Student_id') }}" class="form-control mb-2" required onkeypress='validateNIM(event)'>
                @if($errors->has('Student_id'))
                <div class="error error-message">{{ $errors->first('Student_id') }}</div>
                @endif
            </div>
            <div class="form-group mb-3 form-internal">
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
            <div class="form-group mb-3 form-internal">
                <label for="Generation" class="label">Angkatan</label>
                <select id="Generation" name="Generation" value="{{ old('Generation') }}" class="form-control mb-2" required>

                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
                @if($errors->has('Generation'))
                <div class="error error-message">{{ $errors->first('Generation') }}</div>
                @endif
            </div>
            <div class="form-group mb-3 form-external">
                <label for="Institution" class="label">Institusi</label>
                <input type="text" name="Institution" id="Institution" placeholder="Universitas Multimedia Nusantara" value="{{ old('Institusi') }}" class="form-control mb-2" required>
                @if($errors->has('Institution'))
                <div class="error error-message">{{ $errors->first('Institution') }}</div>
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
                <label class="check check-2 mt-3 col-11" for="Availability" >I have read and agreed to the regulation</label>
                @if($errors->has('Availability'))
                <div class="error error-message">{{ $errors->first('Availability') }}</div>
                @endif
            </div>

            
            <div class="tombol mt-2">
                <input type="hidden" id="is_internal" name="is_internal" value="1">
                <button type="submit" class="button p-2" onclick="checkValid()" id="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</div>

@include('cms.template.footer')

@endsection

@section('custom-js')
<script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
<script src="{{ asset('js/cms/page/jquery.validate.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('js/cms/page/registration.js') }}"></script>

<script>

    function checkValid() { 
        if ($('#form-register').valid()) {   
            $('#submit-btn').prop('disabled', 'disabled');
            $('#form-register').submit();
        } else {
            $('#submit-btn').prop('disabled', false);
        }
    };

    $("#next-btn-internal").click(function() {
        var checkBox = document.getElementById("regulation-internal");
        
        if (checkBox.checked == true) {
            $('.step-1-internal').removeClass('active');
            $('.step-2').addClass('active');
            $('.form-external').hide();
        } else {
            Swal.fire({
                text: "Kamu perlu menyetujui ketentuan yang berlaku!",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            })
        }
    });

    $("#next-btn-external").click(function() {
        var checkBox = document.getElementById("regulation-external");
        
        if (checkBox.checked == true) {
            $('.step-1-external').removeClass('active');
            $('.form-internal').hide();
            $('.step-2').addClass('active');
        } else {
            Swal.fire({
                text: "Kamu perlu menyetujui ketentuan yang berlaku!",
                icon: 'warning',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            })
        }
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
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
@endsection