@extends('layout')

@section('articles')

<div>
  <div class="content-container">
  <div class="article">
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <h2>Register</h2>

      <div class="form-input {{ $errors->has('email') ? ' has-error' : '' }}">
          <div>
              <input id="email" placeholder="E-Mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-input {{ $errors->has('password') ? ' has-error' : '' }}">
          <div>
              <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div>

        <div class="inline-block">
          <p><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</p>
          <p><a href="{{ route('password.request') }}">Forgot Your Password?</a></p>
          <p>Not registered? Click <a href="{{ route('register') }}">Here</a></p>
        </div>

        <div>
          <button type="submit" class="btn">Register</button>
        </div>

      </div>

    </form>
  </div>

@endsection
