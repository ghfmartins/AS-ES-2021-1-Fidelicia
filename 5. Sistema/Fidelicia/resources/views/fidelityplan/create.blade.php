@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('fidelityplans-store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col s12">
                    <h4>{{ __('Novo plano') }}</h4>
                </div>
            </div>

            <div class="row">
                <div class="col s12 input-field">
                    <label for="award">{{ __('Prêmio') }}</label>
                    <input id="award" type="text" class="@error('award') is-invalid @enderror" name="award" value="{{ old('award') }}" required autocomplete="odd" autofocus>

                    @error('award')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="restaurant_id" class="active">{{ __('Restaurante') }}</label>
                    <select name="restaurant_id" id="restaurant_id" class="select">
                        <option value="" disabled selected>Selecione o estabelecimento</option>
                        @foreach ($restaurants as $restaurant)
                            <option value="{{ $restaurant->id }}">{{ $restaurant->establishment_mane }}</option>
                        @endforeach
                    </select>

                    @error('restaurant_id')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="product">{{ __('Produto') }}</label>
                    <input id="product" type="text" class="@error('product') is-invalid @enderror" name="product" value="{{ old('product') }}" required autocomplete="odd" autofocus>

                    @error('product')
                        <span class="helper-text red-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col s12 input-field">
                    <label for="necessary_quantity">{{ __('Quantidade') }}</label>
                    <input id="necessary_quantity" type="text" class="@error('necessary_quantity') is-invalid @enderror" name="necessary_quantity" value="{{ old('necessary_quantity') }}" required autocomplete="odd" autofocus>

                    @error('necessary_quantity')
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
