@extends('layouts.app')

@section('content')
    <br>
    <div class="row">
        <div class="col s12">
            @if (empty($restaurants))
                <span class="center-align">Você não possui nenhum restaurante cadastrado</span>
            @else
                @foreach ($restaurants as $restaurant)
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">{{ $restaurant->establishment_mane }}</span>
                                <small>{{ $restaurant->business_mane }}</small>
                                <small>{{ $restaurant->cnpj }}</small>
                            </div>
                            <div class="card-action">
                                <span>{{ $restaurant->address }} · {{ $restaurant->number }}</span>
                                <span>{{ $restaurant->city }} · {{ $restaurant->state }} · {{ $restaurant->cep }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="fixed-action-btn">
        <a href="{{ route('restaurant-create') }}" class="btn-floating btn-large blue">
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endsection
