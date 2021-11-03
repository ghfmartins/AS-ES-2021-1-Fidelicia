@if (auth()->check())
    <li><a href="{{ route('home') }}">Cartões</a></li>
    <li><a href="{{ route('home') }}">Validar cartão</a></li>
    <li><a href="javascript:logout();">Logout</a></li>
    <form id="form-logout" method="POST" action="{{ route('logout') }}">
        @csrf
    </form>
@else
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@endif
