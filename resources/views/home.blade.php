@extends('layouts.app', ['title' => 'Home'])

@section('content')
<section class="hero">
    <div class="signal">System online · Local environment</div>
    <h1>Point of Sale Management</h1>
    <p>Welcome to the POS Security Console. This Laravel application demonstrates a clean MVC structure while presenting customer and user account records through a focused cybersecurity interface.</p>
    <a class="button" href="{{ route('customers') }}">View Customer Accounts</a>
</section>
@endsection
