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
                        <div class="card-action">
                            <div class="row">
                                <div class="col s12">
                                    <span>{{ $plan->address }} · {{ $plan->number }}</span><br>
                                    <span>{{ $plan->city }} · {{ $plan->state }} · {{ $plan->cep }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <form action="{{ route('card-request-post') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="fidelity_plan_id" value="{{ $plan->fidelity_plan_id }}">
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
