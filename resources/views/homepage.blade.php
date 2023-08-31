<x-main>
    <x-slot:mainTitle> presto.it </x-slot>
    <!-- searchbar -->
    <div class="container">
        <x-search_bar />
        @if (session('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @foreach ($announcements as $announcement)
            <img src="{{ Storage::url($announcement->url_image) }}" alt="">
        @endforeach
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

    <h2 class="style-title">{{ __('ui.lastAnnouncements') }}</h2>
    <!-- card annunci in primo piano -->
    @foreach ($announcements as $announcement)
        <x-card-announcement>
            <x-slot:id>{{ $announcement->id }}</x-slot>
            <x-slot:title>{{ $announcement->title }}</x-slot>
            <x-slot:category>{{ $announcement->category->name }}</x-slot>
            <x-slot:url_image>{{ $announcement->url_image }}</x-slot>
            <x-slot:price>{{ $announcement->price }}</x-slot>
            <x-slot:categoria>{{ $announcement->category->id }}</x-slot:categoria>
            <x-slot:description>{{ $announcement->description }}</x-slot>
            <x-slot:updated>{{ $announcement->updated_at->format('d/m/Y') }}</x-slot>
        </x-card-announcement>
    @endforeach


    </div>
</x-main>
