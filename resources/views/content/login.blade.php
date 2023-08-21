@extends('master')

@section('title', 'Content CRUD')

@section('content')

    <h1 class="mx-3">Login</h1>

    <form action="{{ url('login') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="mail_input">Email address</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">

            @error('email')
                <div class="invalid-feedback d-block">{{ $errors->first('email') }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="passwd_input">Password</label>
            <input type="password" class="form-control" id="pasword" name="password">

            @error('password')
                <div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-sm btn-primary">Login</button>
    </form>
@endsection
