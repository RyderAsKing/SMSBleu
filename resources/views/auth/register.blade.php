@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 5%">
    <h3>Register an account</h3>
    <form action={{ route('register') }} method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Enter name">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember_me">
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection