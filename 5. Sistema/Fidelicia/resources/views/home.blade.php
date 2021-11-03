@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                {{ session('status') }}
                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
@endsection
