@extends('layouts.app')
@section('content')
    <login url="{{ url('/register' )}}" method="POST" title="Register">
        <form-input>Name</form-input>
        <email>Email</email>
        <password>Password</password>
        <password>Confirm Password</password>
        <submit>Register</submit>
    </login>
@endsection
