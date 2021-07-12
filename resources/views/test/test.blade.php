@foreach ($tests as $user)
<h1>{{$user->nama}}</h1>
@endforeach

<h2>{{$minval}}</h2>
<label for="file">Downloading progress:</label>
<progress id="file" value="{{$minval}}" max="{{$maxval}}"> </progress>