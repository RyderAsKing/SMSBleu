@extends('layout.app')
@section('content')
<div class="container">
    <h3 style="text-align: center; margin-top: 15px;">Dashboard</h3>
    <div class="row" style="margin-top: 2%;">

        <div class="col-sm-12 col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Quick send</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="number">To</label>
                            <input type="number" class="form-control" id="number" name="tel"
                                placeholder="Include country code">
                        </div>
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="text" class="form-control" id="from" placeholder="Sander" name="from">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="3" name="message"
                                placeholder="Hey you look cute!"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" style="margin-top: 5px"><i
                                class="fas fa-paper-plane"></i> Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="alert alert-info">Make sure you read our <a href="#">terms of service</a>, all SMS must comply
                with applicable laws and
                regulations.<br>All URLs must
                be approved. To have your URL whitelisted, <a href="#">contact us</a>.</div>
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Profile</div>
                <div class="card-body">
                    <h5 class="card-title">Hey, welcome back <strong>{{ $user->name }}</strong> ({{ $user->email }})
                    </h5>
                    <p class="card-text">Here's some quick information regarding your account.</p>
                    <h4 class="card-text"><i class="fas fa-coins"></i> Credits: {{ $user->balance }}<br><i
                            class="fas fa-envelope"></i>
                        Messages Sent: {{ $user->sent }}</h4>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="alert alert-warning"><code>{{ $pricing }}</code> credit per message</div>
        </div>
        <div class="col-12">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Logs</div>
                <div class="card-body">
                    @if($logs->count() > 0)
                    <div class="row">
                        <div class="col-3"><strong>From</strong></div>
                        <div class="col-3"><strong>To</strong></div>
                        <div class="col-3"><strong>Content</strong></div>
                        <div class="col-3"><strong>Created at</strong></div>
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
                    <div class="alert alert-warning">No logs available</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection