@extends('layout')

@section('content')
    <body>
        <div class="kotak_register">
		<p class="tulisan_register"><strong>Sign Up</strong></p>
 
			<form action="/register" method="POST">
			@csrf
			<label>Name</label>
			<input type="text" name="name" class="form_login" placeholder="Enter name" required>
            <label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Enter email" required>
            <label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Enter username" required>
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Enter password" required>
 
			<input type="submit" class="tombol_login" value="REGISTER NOW">
			<!-- <button type="submit">REGISTER NOW</button> -->
		</form>

		{{ session('berhasil') }}
		
	</div> 
@endsection