@extends('layout')
@section('content')

<style>
    .dashboard{
        background-image: url({{'assets/img/cc.png'}})
    }
</style>
<form action="/create">
    @if (Session::get('addTodo'))
        <div class="alert alert-success">
            {{ Session::get('addTodo') }}
        </div>
    @endif
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="dashboard">
    <h2>welcome to the dashboard page</h2>
    <br>
    <button type="submit" class="btn" >Make Todo</button>
    <br>
    <br>
@if(session('isGuest'))
<h2>
    <b>
        <i>
            <p style="color: rgb(61, 164, 243);">{{ session('isGuest') }}</p>
        </i>
    </b>
</h2>
@endif

</div>
</div>
</div>
</form>

@endsection