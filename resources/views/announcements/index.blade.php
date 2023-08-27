<x-main>
    <x-slot:mainTitle>Annunci</x-slot>
        <div class="container">
            <x-search_bar />
            <h1>Annunci</h1>
            <p>{{ $announcements->count() }} Annunci trovati</p>
            <div class="container">
                @forelse($announcements as $announcement)
                    <x-card-announcement>
                        <x-slot:id>{{ $announcement->id }}</x-slot>
                            <x-slot:title>{{ $announcement->title }}</x-slot>
                                <x-slot:category>{{ $announcement->category->name }}</x-slot>
                                    <x-slot:url_image>{{ $announcement->url_image }}</x-slot>
                                        <x-slot:price>{{ $announcement->price }}</x-slot>
                                            <x-slot:description>{{ $announcement->description }}</x-slot>
                                                <x-slot:updated>{{ $announcement->updated_at->format('d/m/Y') }}</x-slot>
                    </x-card-announcement>
                @empty
                    <div class="col-12">
                        <div class="alert alert-warning py-3 shadow">
                            <p class="lead">Non ci sono annunci per questa ricerca. Prova a cambiare</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
</x-main>
