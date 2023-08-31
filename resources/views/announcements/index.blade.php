<x-main>
    <x-slot:mainTitle>{{ __('ui.titleIndex') }}</x-slot>
        <div class="container">
            <x-search_bar />
            <h1 class="style-title">{{ $totalAnnouncements }} Annunci trovati</h1>

            <div class="container">
                @forelse ($announcements as $announcement)

                <a href="{{ route('annunci.show', $announcement->id) }}">
                    <div class="card-announcement">
                        <div class="card-img-box">
                            <img class="card-announcement-img" src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200/300' }}" alt="{{ $announcement->title }}">
                        </div>
                        <div class="card-announcement-text-box">
                            <a href="{{route('annunci.categoria', ['category' => $announcement->category_id])}}" class="category-a">{{ $announcement->category->name }}</a>
                            <h3>{{ $announcement->title }}</h3>
                            <span>€{{ $announcement->price }}</span>
                            <p>{{ $announcement-> description }}</p>
                            <div class="d-flex justify-content-end mt-4">
                                <p class="last-update">Ultima modifica: {{ $announcement->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </a>


                @empty
                <p>Non ci sono annunci da visualizzare</p>
                @endforelse
            </div>
        </div>
</x-main>