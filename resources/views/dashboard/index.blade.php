@extends('layout.app')
@section('content')
<div class="container">
    <h3 style="text-align: center; margin-top: 15px;">{{ __('text.app.dashboard') }}</h3>
    <div class="row" style="margin-top: 2%;">

        <div class="col-sm-12 col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">{{ __('text.app.quicksend') }}</div>
                <div class="card-body">
                    <form action="{{ route('dashboard.message') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="number">{{ __('text.app.to') }}</label>
                            <input type="number" class="form-control" id="number" name="tel"
                                placeholder="Include country code" value={{ old('tel') }}>
                            @error('tel')
                            <p style="color: yellow">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="from">{{ __('text.app.from') }}</label>
                            <input type="text" class="form-control" id="from" placeholder="{{ __('text.app.from') }}"
                                name="from" value={{ old('from') }}>
                            @error('from')
                            <p style="color: yellow">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">{{ __('text.app.message') }}</label>
                            <textarea class="form-control" id="message" rows="3" name="message"
                                placeholder="{{ __('text.app.message') }}" value={{ old('message') }}></textarea>
                            @error('message')
                            <p style="color: yellow">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success" style="margin-top: 5px"><i
                                class="fas fa-paper-plane"></i> {{ __('text.app.send') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="alert alert-info">{{ __('text.dashboard.tos') }}</div>
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">{{ __('text.app.profile') }}</div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ __('text.dashboard.welcome', ['name' => $user->name, 'email' => $user->email]) }}</h5>
                    </h5>
                    <p class="card-text">{{ __('text.dashboard.information') }}</p>
                    <h4 class="card-text"><i class="fas fa-coins"></i> {{ __('text.app.credits') }}:
                        {{ $user->balance }}<br><i class="fas fa-envelope"></i>
                        {{ __('text.app.messages_sent') }}: {{ $user->sent }}</h4>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="alert alert-warning"><code>{{ $pricing }}</code> {{ __('text.app.credits_per_message') }}</div>
        </div>
        <div class="col-12">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">{{ __('text.app.logs') }}</div>
                <div class="card-body">
                    @if($logs->count() > 0)
                    <div class="row">
                        <div class="col-3"><strong>{{ __('text.app.from') }}</strong></div>
                        <div class="col-3"><strong>{{ __('text.app.to') }}</strong></div>
                        <div class="col-3"><strong>{{ __('text.app.message') }}</strong></div>
                        <div class="col-3"><strong>{{ __('text.app.created_at') }}</strong></div>
                    </div>
                    <div class="row">
                        @foreach ($logs as $log)
                        <hr>
                        <div class="col-3">{{ $log->from }}</div>
                        <div class="col-3">{{ $log->to }}</div>
                        <div class="col-3">{{ $log->message }}</div>
                        <div class="col-3">{{ $log->created_at->diffForHumans() }}</div>
                        @endforeach
                    </div>
                    {{ $logs->links() }}
                    @else
                    <div class="alert alert-warning">{{ __('text.error.no_logs') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection