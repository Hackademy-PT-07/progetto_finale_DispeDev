<nav class="navbar navbar-expand-lg bg-body-arancio">
    <div class="container-fluid">
        <a class="navbar-brand fc-bianco fs-2 fw-bold" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav fc-bianco">
                @if (auth()->user())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Nome User
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Esci</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link fc-bianco" aria-current="page" href="#">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fc-bianco" aria-current="page" href="#">Registrati</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
