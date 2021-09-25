@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 5%">
    <h3>{{ __('text.auth.heading.register') }}</h3>
    <form action={{ route('register') }} method="post">
        @csrf
        <div class="mb-3">
            <label for="name">{{ __('text.auth.label.name') }}</label>
            <input type="name" name="name" class="form-control" id="name"
                placeholder="{{ __('text.auth.placeholder.name') }}" value={{ old('name') }}>
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">{{ __('text.auth.label.email') }}</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="{{ __('text.auth.placeholder.email') }}" value={{ old('email') }}>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">{{ __('text.auth.label.password') }}</label>
            <input type="password" name="password" class="form-control" id="password"
                placeholder="{{ __('text.auth.placeholder.password') }}">
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
        <button type="submit" class="btn btn-primary">{{ __('text.app.submit') }}</button>
    </form>
</div>
@endsection