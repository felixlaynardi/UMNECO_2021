@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/registration-blue.css') }}">
@endsection

@section('content')

<header>
    <div class="col-md-6 col-10 mx-auto">
        <h5>Greenate</h5>
        <h1>REGISTRATION</h1>
        <div class="header-deco">
            <img class="image-leaf1" src="{{ asset('images/regis/Daun 3.png')}}">
            <img class="image-leaf2" src="{{ asset('images/regis/Daun 3.png')}}">
            <img class="image-header" src="{{ asset('images/regis/Ayam_1.png')}}">
        </div>
    </div>
</header>
<div class="form col-md-6 col-10 mx-auto" id="form-page">
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
                <label class="check check-2 mt-3 col-11" for="Availability">I agree to participate in “BLUE” Event and  abide to the given regulations.</label>
                @if($errors->has('Availability'))
                <div class="error error-message">{{ $errors->first('Availability') }}</div>
                @endif
            </div>

            
            <div class="text-center py-2">
                <button type="submit" class="submit-blue-btn p-2" onclick="checkValid()" id="submit-btn">Submit</button>
            </div>
        </form>
    </div>
</div>

@include('cms.template.footer')

@endsection

@section('custom-js')

@endsection