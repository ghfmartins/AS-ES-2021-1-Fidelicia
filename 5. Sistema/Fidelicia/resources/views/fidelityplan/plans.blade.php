@extends('layouts.app')

@section('content')
    <br>
    <div class="row">
        <div class="col s12">
            @foreach ($plans as $plan)
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $plan->award }}</span>
                            <small>Peoduto: {{ $plan->product }}</small><br>
                            <small>Quantidade de pontos: {{ $plan->necessary_quantity }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="fixed-action-btn">
        <a href="{{ route('fidelityplans-create') }}" class="btn-floating btn-large blue">
            <i class="fas fa-plus"></i>
        </a>
    </div>
@endsection
