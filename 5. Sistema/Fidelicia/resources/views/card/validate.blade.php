@extends('layouts.app')

@section('content')
    <br>
    <div class="row">
        <div class="col s12">
            @foreach ($fidelityCards as $fidelityCard)
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $fidelityCard->establishment_mane }}</span>
                            <small>Prêmio: {{ $fidelityCard->award }}</small><br>
                            <small>Quantidade de pontos: {{ $fidelityCard->consumed_quantity }}</small>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col s12">
                                    <form action="{{ route('card-request-post') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn blue">Selecionar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
