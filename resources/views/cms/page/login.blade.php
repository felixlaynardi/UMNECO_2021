<div class="container-fluid" style="background:red;">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="/images/login/Hydrant BG.png" class="BG">
            <img src="/images/login/Alas Hydrant.png" class="alas">
            <img src="/images/login/Hydrant.gif" class="hydrant">
        </div>
        <div class="col-md-6">
        <form action="{{route('login')}}" method="post">
            @csrf
            <input type="text" name="email" id="email" placeholder="email">
            @if($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
            @endif

            <input type="password" name="password" id="password" placeholder="password">
            @if($errors->has('password'))
            <div class="error">{{ $errors->first('password') }}</div>
            @endif

            <button type="submit" name="action" value="login" class="btn btn-primary">Login</button>
            <button type="submit" name="action" value="register" class="btn btn-primary">Register</button>
        </form>
        </div>
    </div>
</div>