<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Fidelícia</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
            <i class="fas fa-bars"></i>
        </a>
        <ul class="right hide-on-med-and-down">
            @include('layouts.menu-items')
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    @include('layouts.menu-items')
</ul>
