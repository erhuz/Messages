@extends('layouts.user')

@section('content')
<form>
    @csrf

    <div class="form-group">
        <label for="username">Username</label>
        <input type="username" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter a Username">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password2">Confirm Password</label>
        <input type="password" class="form-control" id="password2" placeholder="Confirm Password">
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection
