@extends('layouts.app', ['title' => 'Customer Accounts'])

@section('content')
<section class="panel">
    <h1>Customer Accounts</h1>
    <p>Customer records are temporarily provided by a static PHP array in <code>CustomerController</code>.</p>
    <table>
        <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer['id'] }}</td>
                <td>{{ $customer['name'] }}</td>
                <td>{{ $customer['email'] }}</td>
                <td>{{ $customer['phone'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>
@endsection
