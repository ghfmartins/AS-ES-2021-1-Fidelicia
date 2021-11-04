@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('restaurant-store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col s12">
                    <h4>{{ __('Novo restaurante') }}</h4>
                </div>
            </div>

            <div class="row">
                <div class="col s12 input-field">
                    <label for="establishment_mane">{{ __('Nome do estabelecimento') }}</label>
                    <input id="establishment_mane" type="text" class="@error('establishment_mane') is-invalid @enderror" name="establishment_mane" value="{{ old('establishment_mane') }}" required autocomplete="odd" autofocus>

                    @error('establishment_mane')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="business_mane">{{ __('Nome do negócio') }}</label>
                    <input id="business_mane" type="text" class="@error('business_mane') is-invalid @enderror" name="business_mane" value="{{ old('business_mane') }}" required autocomplete="odd" autofocus>

                    @error('business_mane')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="cnpj">{{ __('CNPJ') }}</label>
                    <input id="cnpj" type="text" class="@error('cnpj') is-invalid @enderror" name="cnpj" value="{{ old('cnpj') }}" required autocomplete="odd" autofocus>

                    @error('cnpj')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="address">{{ __('Endereço') }}</label>
                    <input id="address" type="text" class="@error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="odd" autofocus>

                    @error('address')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="number">{{ __('Número') }}</label>
                    <input id="number" type="text" class="@error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="odd" autofocus>

                    @error('number')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="city">{{ __('Cidade') }}</label>
                    <input id="city" type="text" class="@error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="odd" autofocus>

                    @error('city')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="state">{{ __('Estado') }}</label>
                    <input id="state" type="text" class="@error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="odd" autofocus>

                    @error('state')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="cep">{{ __('CEP') }}</label>
                    <input id="cep" type="text" class="@error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="odd" autofocus>

                    @error('cep')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="btn">
                            {{ __('Salvar') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
