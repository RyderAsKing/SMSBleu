@extends('layout.app')
@section('content')
<div class="container">
    <h3 style="text-align: center; margin-top: 15px;">{{ __('text.app.dashboard.admin') }}</h3>
    <div class="row" style="margin-top: 2%;">
        <div class="col-sm-12 col-md-6" style="text-align: center">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">{{ __('text.dashboard.admin.users_registered') }}</div>
                <div class="card-body">
                    <h3>{{ $users_registered }}</h3>
                    <a href="{{ route('dashboard.admin.users')}}"><button
                            class="btn btn-outline-dark text-white">{{ __('text.dashboard.admin.manage_users') }}</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6" style="text-align: center">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">{{ __('text.dashboard.admin.total_credits') }}</div>
                <div class="card-body">
                    <h3>{{ $total_credits }}</h3>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">{{ __('text.dashboard.admin.all_logs') }}</div>
                <div class="card-body">
                    @if($logs->count() > 0)
                    <div class="row">
                        <div class="col-2"><strong>User Email</strong></div>
                        <div class="col-2"><strong>{{ __('text.app.from') }}</strong></div>
                        <div class="col-2"><strong>{{ __('text.app.to') }}</strong></div>
                        <div class="col-4"><strong>{{ __('text.app.message') }}</strong></div>
                        <div class="col-2"><strong>{{ __('text.app.created_at') }}</strong></div>
                    </div>
                    <div class="row">
                        @foreach ($logs as $log)
                        <hr>
                        <div class="col-2"><a style="color: white"
                                href={{ route('dashboard.admin.users.edit', $log->user->id) }}>{{ $log->user->email }}</a>
                        </div>
                        <div class="col-2">{{ $log->from }}</div>
                        <div class="col-2">{{ $log->to }}</div>
                        <div class="col-4">{{ $log->message }}</div>
                        <div class="col-2">{{ $log->created_at->diffForHumans() }}</div>
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