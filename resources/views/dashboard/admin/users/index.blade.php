@extends('layout.app')
@section('content')
<div class="container">
    <h3 style="text-align: center; margin-top: 15px;">Managing Users</h3>
    <div class="row">
        <div class="col-sm-12">
            <table id="users" class="table " style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>User Email</th>
                        <th>User Type</th>
                        <th>Credits</th>
                        <th>Messages Sent</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type == 1 ? 'Admin' : 'User' }}</td>
                        <td>{{ $user->balance }}</td>
                        <td>{{ $user->sent }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('dashboard.admin.users.edit', $user->id) }}"><button
                                    class="btn btn-primary">Edit</button></a>
                            <a href="{{ route('dashboard.admin.users.edit.delete', $user->id) }}"><button
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <script>
                $(document).ready(() => {
                    $('#users').DataTable();
                });
            </script>
        </div>
    </div>
</div>
</div>
@endsection