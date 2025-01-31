@extends('layouts.user')

@section('content')
<form>
    @csrf

    <div class="form-group">
        <label for="username">Username</label>
        <input type="username" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter a Username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
