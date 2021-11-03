@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">
                        <div class="col s12">
                            <h4>{{ __('Register') }}</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 input-field">
                            <label for="name">{{ __('Nome') }}</label>
                            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="helper-text red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col s12 input-field">
                            <label for="email">{{ __('E-Mail') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="helper-text red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col s12 input-field">
                            <label for="cpf">{{ __('CPF') }}</label>
                            <input id="cpf" type="text" class="@error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">

                            @error('cpf')
                                <span class="helper-text red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col s12 input-field">
                            <label for="password">{{ __('Senha') }}</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="helper-text red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col s12 input-field">
                            <label for="password-confirm">{{ __('Confirmação da senha') }}</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="btn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
