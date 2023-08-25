<nav class="navbar navbar-expand-lg bg-body-arancio bg-shadow fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand fc-bianco fs-2 fw-bold" href="/">
            <img class="img-logo" src="{{ asset('img/logo-presto-bianco.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav fc-bianco">
                @if (auth()->user())
                    <div class="row mx-3">
                        <button class="btn-add">
                            <a href="{{ route('annuncio.create') }}"><i class="bi bi-plus-square pe-2"></i>Inserisci
                                annuncio</a>
                        </button>
                    </div>

                    @if (Auth::user()->is_revisor)
                        <li class="nav-item revisor-icon">
                            <a href="{{ route('revisor.index') }}" class="nav-text " aria-current="page"><i
                                    class="bi bi-bell-fill"></i>
                            </a>
                            <span>{{ App\Models\Announcement::toBeRevisionedCount() }}</span>
                        </li>
                        <li class="nav-item revisor-text">
                            <a href="{{ route('revisor.index') }}" class="nav-text " aria-current="page">Àrea Revisore
                            </a>
                            <span>{{ App\Models\Announcement::toBeRevisionedCount() }}</span>
                        </li>
                    @endif

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-text" href="{{ route('annunci.index') }}">Annunci</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-text" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <div>
                                    <a href="{{route('i.tuoi.annunci')}}">i tuoi annunci</a>
                                </div>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="btn text-black nav-text" type="submit">Esci</button>
                                </form>

                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-3 nav-text" aria-current="page" href="/login">Accedi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-3 nav-text" aria-current="page" href="/register">Registrati</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
