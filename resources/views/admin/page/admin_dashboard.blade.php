@extends('admin.template.admin')

@section('content')
<div class="container-fluid">
    <h1>Hello , {{ auth()->user()->name }}</h1>
</div>
@endsection