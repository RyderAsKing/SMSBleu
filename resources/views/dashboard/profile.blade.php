@extends('layout.app')
@section('content')
<div class="container">
    <h3 style="text-align: center; margin-top: 15px;">{{ __('text.app.edit') }} {{ __('text.app.profile') }}</h3>
    <p style="text-align: center;">{{ __('text.app.blank') }}</p>
    <form action={{ route('dashboard.profile') }} method="post">
        @csrf
        <div class="mb-3">
            <label for="name">{{ __('text.app.update') }} {{ __('text.auth.label.name') }}</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"
                value={{ old('name') }}>
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">{{ __('text.app.update') }} {{ __('text.auth.label.name') }}</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"
                value={{ old('email') }}>
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">{{ __('text.app.update') }} {{ __('text.auth.label.password') }}</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password"
                value={{ old('password') }}>
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <select class="form-select form-select-sm" aria-label=".form-select-lg" name="language">
                <option value="null">{{ __('text.app.update') }} {{ __('text.app.language') }}</option>
                <option value="en">English</option>
                <option value="fr">French</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('text.app.update') }}</button>
    </form>
</div>
@endsection