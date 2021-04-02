<!--Ganti error message didalem div yang classnya error, if nya sesuain cari error gara2 apa -->

<div class="container-fluid">
    <img src="/images/regis/Header.png">
</div>
<form action="{{route('register')}}" method="post" class="form">
    @csrf
    <input type="text" name="name" id="name" placeholder="name">
    @if($errors->has('name'))
    <div class="error">{{ $errors->first('name') }}</div>
    @endif
    <input type="text" name="student_id" id="student_id" placeholder="NIM">
    @if($errors->has('student_id'))
    <div class="error">{{ $errors->first('student_id') }}</div>
    @endif
    <input type="text" name="email" id="email" placeholder="email">
    @if($errors->has('email'))
    <div class="error">{{ $errors->first('email') }}</div>
    @endif
    <select id="major" name="major">
        <option value="Informatika">Informatika</option>
        <option value="Film & Animasi">Film & Animasi</option>
        <option value="Strategic Communication">Strategic Communication</option>
        <option value="Akuntansi">Akuntansi</option>
    </select>
    @if($errors->has('major'))
    <div class="error">{{ $errors->first('major') }}</div>
    @endif
    <select id="generation" name="generation">
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
    </select>
    @if($errors->has('generation'))
    <div class="error">{{ $errors->first('generation') }}</div>
    @endif
    <input type="text" name="instagram_account" id="instagram_account" placeholder="instagram_account">
    @if($errors->has('instagram_account'))
    <div class="error">{{ $errors->first('instagram_account') }}</div>
    @endif
    <input type="text" name="line_id" id="line_id" placeholder="line_id">
    @if($errors->has('line_id'))
    <div class="error">{{ $errors->first('line_id') }}</div>
    @endif
    <input type="text" name="phone_number" id="phone_number" placeholder="phone_number">
    @if($errors->has('phone_number'))
    <div class="error">{{ $errors->first('phone_number') }}</div>
    @endif
    <input type="password" name="password" id="password" placeholder="password">
    @if($errors->has('password'))
    <div class="error">{{ $errors->first('password') }}</div>
    @endif
    <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm_password">
    @if($errors->has('confirm_password'))
    <div class="error">{{ $errors->first('confirm_password') }}</div>
    @endif
    <input type="checkbox" id="availability" name="availability" value="1">
    <label for="availability"> Bersedia menjalankan kegiatan Real Emergency Dailylife selama 12 hari </label><br>
    @if($errors->has('availability'))
    <div class="error">{{ $errors->first('availability') }}</div>
    @endif


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<footer>
<img src="/images/login/Footer.png">
<img src="/images/login/Logo Footer.png">
</footer>
</header>