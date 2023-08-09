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
    <x-categories />
    


    <!-- card annunci in primo piano -->
    <x-card-announcement />
    

    

</x-main>
