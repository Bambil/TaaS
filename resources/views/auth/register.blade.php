@extends('layouts.app')

@section('content')
<login>
    {{ csrf_field() }}
    <email>
        E-Mail Address
        @if ($errors->has('email'))
                <error slot="errors">{{ $errors->first('email') }}</error>
        @endif
    </email>
    <password>
        Password
        @if ($errors->has('password'))
                <error slot="errors">{{ $errors->first('password') }}</error>
        @endif
    </password>
    <checkbox>
        Remember me
     </checkbox>
    <submit>Login</submit>
</login>
@endsection
