@extends('layout')


@section('articles')

<div>
  <div class="content-container">
    <div class="article">
        <h2>Register</h2>

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-input {{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="form-input">
                        <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-input {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="form-input">
                        <input id="email" placeholder="E-mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-input {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="form-input">
                        <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-input">
                    <div class="form-input">
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-input">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>

            </form>
        </div>
    </div>
  </div>
@endsection
