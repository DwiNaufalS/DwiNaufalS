@extends('layout')

@section('content')
    <div class="kotak_login">
        <p class="tulisan_login"><strong>Sign In</strong></p>

        @if(Session('successRegister'))
            <p class="alert alert-success text-center rounded-3">{{ Session('successRegister') }}</p>
        @endif


        @if(Session('error'))
        <p class="alert alert-danger text-center rounded-3">{{ Session('error') }}</p>
        @endif

        @if(Session('logout'))
        <p class="alert alert-success text-center rounded-3">{{ Session('logout') }}</p>
        @endif

            <form action="{{ route('login-baru') }}" method="POST">
            @csrf
            Email <input type="email" name="email" class="form_login"  placeholder="Masukan Email" required>
            <br> 
            Password <input type="password" name="password" class="form_login" placeholder="Masukan Password" required>
            <br>
            <button type="submit" class="tombol_login">Login</button>
            <br>
            <br>
            <p>don't have an account yet, <a href="register">sign up here !</a></p>
@endsection