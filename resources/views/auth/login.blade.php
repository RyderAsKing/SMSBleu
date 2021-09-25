@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 5%">
    <h3>{{ __('text.auth.heading.login') }}</h3>
    <form action={{ route('login') }} method="post">
        @csrf
        <div class="mb-3">
            <label for="email">{{ __('text.auth.label.email') }}</label>
            <input type="email" name="email" class="form-control" id="email"
                placeholder="{{ __('text.auth.placeholder.email') }}" value={{ old('email') }}>
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
            <input type="checkbox" name="remember_me" class="form-check-input" id="remember_me">
            <label class="form-check-label" for="remember_me">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('text.app.submit') }}</button>
    </form>
</div>
@endsection