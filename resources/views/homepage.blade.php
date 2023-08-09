<x-main>
    <x-slot:mainTitle> Homepage </x-slot>


    <!-- searchbar -->
    <div class="container">
        <!-- @auth
        <button>
            <a href="{{route('annuncio.create')}}">Inserisci annuncio</a>
        </button>
        @endauth  -->

        <div class="search-box">
            <input type="text" placeholder="Cerca" class="px-2">
            <a href=""><i class="bi bi-search"></i></a>
        </div>
    </div>

    <!-- categories box -->
    
    <div class="container-fluid categories-home">
            <div class="d-flex categories-box">
                <button class="categories-items item-1 mx-3">
                    <a href=""><i class="bi bi-car-front-fill"></i>Motori</a>
                </button>
                <button class="categories-items item-2 mx-3">
                    <a href=""><i class="bi bi-shop"></i></i>Market</a>
                </button>
                <button class="categories-items item-3 mx-3">
                    <a href=""><i class="bi bi-house-fill"></i></i>Immobili</a>
                </button>
                <button class="categories-items item-4 mx-3">
                    <a href=""><i class="bi bi-briefcase-fill"></i></i>Lavoro</a>
                </button>
            </div>
    </div>


    <!-- card annunci in primo piano -->
    <x-card-announcement />
    

    

</x-main>
