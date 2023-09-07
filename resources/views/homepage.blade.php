<x-main>
    <x-slot:mainTitle> presto.it </x-slot>
    <!-- searchbar -->
    <div class="container">

        <x-search_bar />


        @if (session('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif

        {{-- @forelse ($announcements as $announcement)
                <img src="{{ Storage::url($announcement->url_image) }}" alt="">
            @endforelse --}}
        <!-- categories box -->
        <x-categories />
    </div>
    <div class="freatures-container">
        <div class="freatures-title">
            <h1>{{ __('ui.selectPrestoIt') }}</h1>
            <h4>{{ __('ui.slogan') }}</h4>
        </div>
        <div class="container freatures-content">
            <div class="freatures-card">
                <img class="freatures-img" src="{{ asset('img/sell-online.png') }}" alt="Vendi online">
                <h4 class="freature-desc">
                    {{ __('ui.first_one') }}<strong>{{ __('ui.second_one') }}</strong>{{ __('ui.thirtd_one') }}<strong>{{ __('ui.fourth_one') }}</strong>
                </h4>
                <a href="{{ route('annuncio.create') }}"><button class="card-btn">{{ __('ui.earn1') }}</button></a>
            </div>
            <div class="freatures-card">
                <img class="freatures-img" src="{{ asset('img/buy-online.png') }}" alt="Compra online">
                <h4 class="freature-desc">
                    {{ __('ui.first_two') }}<strong>{{ __('ui.second_two') }}</strong>{{ __('ui.thirtd_two') }}</h4>
                <a href="{{ route('annunci.index') }}"><button class="card-btn">{{ __('ui.buyOnline') }}</button></a>
            </div>
            <div class="freatures-card">
                <img class="freatures-img" src="{{ asset('img/work-with-us.png') }}" alt="Lavora con Noi">
                <h4 class="freature-desc">{{ __('ui.first_three') }}<strong>{{ __('ui.second_three') }}</strong></h4>
                <a href="{{ route('diventa.revisore') }}"><button
                        class="card-btn">{{ __('ui.workWithUs') }}</button></a>
            </div>
        </div>
    </div>
    <div class="container">


        <h2 class="style-title">{{ __('ui.lastAnnouncements') }}</h2>
        <!-- card annunci in primo piano -->
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


    </div>
</x-main>
