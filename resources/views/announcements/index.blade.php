<x-main>
    <x-slot:mainTitle>{{ __('ui.titleIndex') }}</x-slot>
    <div class="container">
        <x-search_bar />
        <h1 class="style-title">{{ $totalAnnouncements }} Annunci trovati</h1>

        <div class="container">
            @forelse($announcementsSearch as $announcement)
                <x-card-announcement>
                    <x-slot:id>{{ $announcement->id }}</x-slot>
                    <x-slot:title>{{ $announcement->title }}</x-slot>
                    <x-slot:category>{{ $announcement->category->name }}</x-slot>
                    <x-slot:categoria>{{ $announcement->category->id }}</x-slot:categoria>
                    <x-slot:url_image>{{ $announcement->url_image }}</x-slot>
                    <x-slot:price>{{ $announcement->price }}</x-slot>
                    <x-slot:description>{{ $announcement->description }}</x-slot>
                    <x-slot:updated>{{ $announcement->updated_at->format('d/m/Y') }}</x-slot>
                </x-card-announcement>
            @empty
                <p>Non ci sono annunci per questa categoria</p>
            @endforelse
        </div>
    </div>
</x-main>
