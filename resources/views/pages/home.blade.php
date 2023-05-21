@extends('layouts.guest');
@Section('content')
<a class="btn btn-primary btn-lg" href="{{ route('login') }}">Login</a>
<a class="btn btn-primary btn-lg" href="{{ route('register') }}">Register</a>

@endsection