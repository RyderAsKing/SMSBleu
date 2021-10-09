@extends('layout.app')
@section('content')
<div class="container">
    <h3 style="text-align: center; margin-top: 15px;">{{ __('text.app.edit') }} {{ __('text.app.profile') }}</h3>
    <form action={{ route('dashboard.profile') }} method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Update Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"
                value={{ old('name') }}>
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Update Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"
                value={{ old('email') }}>
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">Update Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password"
                value={{ old('password') }}>
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <select class="form-select form-select-sm" aria-label=".form-select-lg" name="language">
                <option value="null">Change Language</option>
                <option value="en">English</option>
                <option value="fr">French</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection