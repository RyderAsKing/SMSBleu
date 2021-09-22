@extends('layout.app')
@section('content')
<div class="container">
    <h3 style="text-align: center; margin-top: 15px;">Users</h3>
    <div class="row" style="margin-top: 2%;">
        <div class="col-sm-12">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">All Users</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2"><strong>Name</strong></div>
                        <div class="col-2"><strong>User Email</strong></div>
                        <div class="col-2"><strong>Credits</strong></div>
                        <div class="col-2"><strong>Messages Sent</strong></div>
                        <div class="col-2"><strong>Created at</strong></div>
                        <div class="col-2"><strong>Actions</strong></div>
                    </div>
                    @if($users->count() > 0)
                    <div class="row">
                        @foreach ($users as $user)
                        <hr>
                        <div class="col-2">{{ $user->email }}
                        </div>
                        <div class="col-2">{{ $user->name }}
                            (<strong>{{ $user->type == 1 ? 'Admin' : 'User' }}</strong>)
                        </div>
                        <div class="col-2">{{ $user->balance }}</div>
                        <div class="col-2">{{ $user->sent }}</div>
                        <div class="col-2">{{ $user->created_at->diffForHumans() }}</div>
                        <div class="col-2">
                            <a style="color: white" href={{ route('dashboard.admin.users.edit', $user->id) }}><button
                                    class="btn btn-success" style="margin-bottom: 5px">Edit</button></a>
                            <a href="{{ route('dashboard.admin.users.delete', $user->id) }}"><button
                                    class="btn btn-danger" style="margin-bottom: 5px">Delete</button></a>
                        </div>
                        @endforeach
                    </div>

                    {{ $users->links() }}
                    @else
                    <div class="alert alert-warning">No logs available</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection