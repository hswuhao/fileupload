@extends('master')


@section('content')
    
    <form method="POST" action="login">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                    <label class="control-label" for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block"> {{ $errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                    <label class="control-label" for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <span class="help-block"> {{ $errors->first('password')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember"> Remember me
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">Login</button>
                    <a href="register" class="btn btn-default">Don't have an account?</a>
                </div>
            </form>

@endsection