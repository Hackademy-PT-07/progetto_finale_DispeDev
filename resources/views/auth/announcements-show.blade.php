<x-main>
    <x-slot:mainTitle>{{ __('ui.yourAnnouncements') }}</x-slot>
    <div class="container mt-announce">

        <h1 class="style-title">{{ $totalAnnouncements }} {{ __('ui.findendAnnouncements') }}</h1>

        <div class="container">
            @forelse ($announcements as $announcement)
            <a class="a1-card bg-success" href="{{ route('annunci.show', $announcement->id) }}">
                    <div class="card-announcement ">
                        <div class="card-img-box">
                            <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(400, 300): 'https://picsum.photos/200/300' }}" alt="{{ $announcement->title }}">
                        </div>
                        <div class="card-announcement-text-box">
                            <span href="{{ route('annunci.filter', ['category' => $announcement->category_id]) }}"
                                class="announcement-category">{{$announcement->category->name }}
                            </span>
                            <h3 class="announcement-title">{{ $announcement->title }}</h3>
                            <span class="announcement-price">€{{ $announcement->price }}</span>
                            <p class="announcement-descr">{{ $announcement->description }}</p>
                            <div class="d-flex justify-content-end mt-4">
                                <p class="last-update">{{ __('ui.lastUpdate') }}:
                                    {{ $announcement->updated_at->format('d/m/Y') }}
                                </p>
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
