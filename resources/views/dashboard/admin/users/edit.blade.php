@extends('layout.app')
@section('content')
<div class="container">
    <h3 style="text-align: center; margin-top: 15px;">Editing user ID: {{ $user->id }}</h3>
    <div class="row" style="margin-top: 2%;">
        <div class="col-lg-6 col-md-12" style="text-align: center">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Editing User: <strong>{{ $user->name }} ({{ $user->email }})</strong></div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12" style="text-align: center">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">User Credits: <strong>{{ $user->balance }}</strong></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h5>Manage user</h5>
                    <form action={{ route('dashboard.admin.users.edit', $user->id) }} method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"
                                value={{ $user->name }}>
                            @error('name')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"
                                value={{ $user->email }}>
                            @error('email')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h5>Manage user credits</h5>
                    <form action={{ route('dashboard.admin.users.edit.credits', $user->id) }} method="post">
                        @csrf
                        <div class="mb-3">
                            <select class="form-select" name="action" id="action">
                                <option value="none">Select type of action</option>
                                <option value="0">Add</option>
                                <option value="1">Remove</option>
                            </select>
                            @error('action')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="amount">Amount of credits</label>
                            <input type="number" name="amount" class="form-control" id="amount"
                                placeholder="Enter amount" min="0" value={{ old('amount') }}>
                            @error('amount')
                            <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="margin-top: 2%">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">User Logs</div>
                <div class="card-body">
                    @if($logs->count() > 0)
                    <div class="row">
                        <div class="col-2"><strong>From</strong></div>
                        <div class="col-2"><strong>To</strong></div>
                        <div class="col-4"><strong>Content</strong></div>
                        <div class="col-2"><strong>Created at</strong></div>
                    </div>
                    <div class="row">
                        @foreach ($logs as $log)
                        <hr>
                        <div class="col-2">{{ $log->from }}</div>
                        <div class="col-2">{{ $log->to }}</div>
                        <div class="col-4">{{ $log->message }}</div>
                        <div class="col-2">{{ $log->created_at->diffForHumans() }}</div>
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