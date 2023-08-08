<x-main>
    <x-slot:mainTitle> Homepage </x-slot>

    @auth
    <button>
        <a href="{{route('announcement.create')}}">Inserisci annuncio</a>
    </button>
    @endauth 

</x-main>
