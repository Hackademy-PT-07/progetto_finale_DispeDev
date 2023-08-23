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
                    <!-- <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li> -->
                    <div class="row mx-3">
                        <button class="btn-add">
                            <a href="{{ route('annuncio.create') }}"><i class="bi bi-plus-square pe-2"></i>Inserisci
                                annuncio</a>
                        </button>
                    </div>
                    @if(Auth::user()->is_revisor)
                    <li>
                        <a href="{{route('revisor.index')}}" aria-current ="page">Zona revisore <span>{{ App\Models\Announcement::toBeRevisionedCount() }} <span>Unread messages</span> </span></a>
                        
                    </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light" href="{{ route('annunci.index') }}">Annunci</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu text-light">
                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="btn text-black" type="submit">Esci</button>
                                </form>

                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-light fw-3" aria-current="page" href="/login">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-3" aria-current="page" href="/register">Registrati</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
