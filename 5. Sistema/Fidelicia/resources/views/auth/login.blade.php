@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row">
                        <div class="col s12">
                            <h4>{{ __('Login') }}</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 input-field">
                            <label for="email">{{ __('E-Mail') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="helper-text red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col s12 input-field">
                            <label for="password">{{ __('Senha') }}</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="helper-text red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col s12 input-field">
                            <p>
                                <label>
                                    <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} />
                                    <span>{{ __('Permanecer conectado') }}</span>
                                </label>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="btn">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
