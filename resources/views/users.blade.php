@extends('layouts.app', ['title' => 'User Accounts'])

@section('content')
<section class="panel">
    <h1>User Accounts</h1>
    <p>User records are temporarily provided by a static PHP array in <code>UserController</code>.</p>
    <table>
        <thead><tr><th>ID</th><th>Username</th><th>Role</th><th>Status</th></tr></thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['username'] }}</td>
                <td>{{ $user['role'] }}</td>
                <td><span class="badge {{ $user['status'] === 'Inactive' ? 'inactive' : '' }}">{{ $user['status'] }}</span></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>
@endsection
