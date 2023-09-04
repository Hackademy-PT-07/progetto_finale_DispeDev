<x-main>
    <x-slot:mainTitle> presto.it </x-slot>
        <!-- searchbar -->
        <div class="container">

            <x-search_bar />


            @if(session('message'))
            <div class="alert alert-success text-center">{{session('message')}}</div>
            @endif

            {{-- @forelse ($announcements as $announcement)
                <img src="{{ Storage::url($announcement->url_image) }}" alt="">
            @endforelse --}}
            <!-- categories box -->
            <x-categories />
        </div>
        <div class="freatures-container">
            <div class="freatures-title">
                <h1>{{__('ui.selectPrestoIt') }}</h1>
                <h4>{{__('ui.slogan') }}</h4>
            </div>
            <div class="container freatures-content">
                <div class="freatures-card">
                    <img class="freatures-img" src="{{ asset('img/sell-online.png') }}" alt="Vendi online">
                    <h4 class="freature-desc">{{__('ui.first_one')}}<strong>{{__('ui.second_one')}}</strong>{{__('ui.thirtd_one')}}<strong>{{__('ui.fourth_one')}}</strong></h4>
                    <a href="{{ route('annuncio.create') }}"><button class="card-btn">{{__('ui.earn1')}}</button></a>
                </div>
                <div class="freatures-card">
                    <img class="freatures-img" src="{{ asset('img/buy-online.png') }}" alt="Compra online">
                    <h4 class="freature-desc">{{__('ui.first_two')}}<strong>{{__('ui.second_two')}}</strong>{{__('ui.thirtd_two')}}</h4>
                    <a href="{{ route('annunci.index') }}"><button class="card-btn">{{__('ui.buyOnline')}}</button></a>
                </div>
                <div class="freatures-card">
                    <img class="freatures-img" src="{{ asset('img/work-with-us.png') }}" alt="Lavora con Noi">
                    <h4 class="freature-desc">{{__('ui.first_three')}}<strong>{{__('ui.second_three')}}</strong></h4>
                    <a href="{{route('diventa.revisore')}}"><button class="card-btn">{{__('ui.workWithUs')}}</button></a>
                </div>
            </div>
        </div>
        <div class="container">


            <h2 class="style-title">{{__('ui.lastAnnouncements')}}</h2>
            <!-- card annunci in primo piano -->
            @forelse ($announcements as $announcement)

            
                <div class="card-announcement">
                <a href="{{ route('annunci.show', $announcement->id) }}">
                    <div class="card-img-box">
                        <img class="card-announcement-img" src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200/300' }}" alt="{{ $announcement->title }}">
                    </div>
                    <div class="card-announcement-text-box">
                    <a href="{{route('annunci.filter', ['category' => $announcement->category_id])}}" class="category-a">{{ $announcement->category->name }}</a>
                        <h3>{{ $announcement->title }}</h3>
                        <span>€{{ $announcement->price }}</span>
                        <p>{{ $announcement-> description }}</p>
                        <div class="d-flex justify-content-end mt-4">
                            <p class="last-update">Ultima modifica: {{ $announcement->updated_at }}</p>
                        </div>
                    </div>
                    </a>
                </div>
            


            @empty
            <p>{{__('ui.empty')}}</p>
            @endforelse


        </div>
</x-main>