@if (auth()->check())
    <li><span class="grey-text">Cliente</span></li>
    <li><a href="{{ route('home') }}">Meus cartões</a></li>
    <li><a href="{{ route('card-request') }}">Solicitar cartão</a></li>
    <li><a href="{{ route('card-validate') }}">Validar cartão</a></li>

    <li>
        <div class="divider"></div>
    </li>

    <li><span class="grey-text">Restaurante</span></li>
    <li><a href="{{ route('restaurants') }}">Meus restaurantes</a></li>
    <li><a href="{{ route('fidelityplans') }}">Planos de fidelidade</a></li>
    <li><a href="{{ route('home') }}">Solicitações de validação</a></li>

    <li>
        <div class="divider"></div>
    </li>

    <li><a href="javascript:logout();">Logout</a></li>
    <form id="form-logout" method="POST" action="{{ route('logout') }}">
        @csrf
    </form>
@else
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@endif
