<x-main>
    <x-slot:mainTitle>
        Crea il tuo annuncio
        </x-slot>

        <div class="container">
            {{-- <h1>Inserisci il tuo annuncio</h1> --}}

            <x-success />
            <div class="container mt-5">
                <div class="row">
                    <div class="col-5">
                        <livewire:create-announcement />
                    </div>
                    <div class="col-5">
                        <livewire:user-announcements-list />
                    </div>
                </div>
            </div>
            
           


        </div>

</x-main>
