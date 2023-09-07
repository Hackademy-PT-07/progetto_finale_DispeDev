<x-main>
    <x-slot:mainTitle>{{ __('ui.yourAnnouncements') }}</x-slot>
    <div class="container mt-announce">

        <h1 class="style-title">{{ $totalAnnouncements }} {{ __('ui.findendAnnouncements') }}</h1>

        <div class="container">
            @forelse ($announcements as $announcement)
                <a href="{{ route('annunci.show', $announcement->id) }}">
                    <div class="card-announcement card-mobile">
                        <div class="card-img-box img-mobile--container">
                            <img class="card-announcement-img img-mobile"
                                src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200/300' }}"
                                alt="{{ $announcement->title }}">
                        </div>
                        <div class="card-announcement-text-box card-mobile--text">
                            <a href="{{ route('annunci.filter', ['category' => $announcement->category_id]) }}"
                                class="category-a">{{ $announcement->category->name }}</a>
                            <h3>{{ $announcement->title }}</h3>
                            <span>€{{ $announcement->price }}</span>
                            <p>{{ $announcement->description }}</p>
                            <div class="d-flex justify-content-end mt-4">
                                <p class="last-update">{{ __('ui.lastUpdate') }}:
                                    {{ $announcement->updated_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <p>{{ __('ui.empty') }}</p>
            @endforelse
            {{ $announcements->links() }}
        </div>
    </div>
</x-main>
