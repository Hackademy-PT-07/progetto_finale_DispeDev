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
            <h1>{{__('ui.selectPrestoIt')}}</h1>
            <h4>{{__('ui.slogan')}}</h4>
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












    {{--         <div class="buy-sell">
            <div class="row justify-content-center align-items-center">
                <div class="col-4 box-buy-sell me-4">
                    <div>
                        <h2>Scegli presto.it</h2>
                    </div>
                    <div>
                        <span>Compra e vendi in piena libertà.</span>
                    </div>
                </div>
                <div class="col-4 box-buy-sell mx-2 text-center">
                    <div>
                        <img class="img-fluid" src="{{ asset('img/vendi_gratis.png') }}" alt="Vendi gratis">
                    </div>
                    <div>
                        <a href="{{ route('annuncio.create') }}"><button>Vendi gratis</button></a>
                    </div>
                </div>

                <div class="col-4 box-buy-sell ms-4 text-center">
                    <div>
                        <img class="img-fluid" src="{{ asset('img/compra_online.png') }}" alt="Compra onlin">
                    </div>
                    <div>
                        <a href="{{ route('annunci.index') }}"><button>Compra online!</button></a>
                    </div>
                </div>
            </div>
        </div> --}}









    {{-- Card Work With us --}}

    {{-- @if (session('access.denied'))
            <div class="alert alert-danger text-center"><a href="#"></a>{{ session('access.denied') }}</div>
        @endif

        <div class="work-container mb-5">
            <div class="row flex-row justify-content-evenly work-content">
                <div class="text-container d-flex flex-column justify-content-center">

                    <h2 class="work-title">
                        Diventa un Revisore Presto.it
                    </h2>
                    <p class="work-description mt-2">Vorresti poter collaborare con il nostro Team ?
                        <strong> Scopri come </strong> avere un'entrata extra con noi !!
                    </p>
                </div>

                <div class="work-img--container ">
                    <img src="{{ asset('img/work-with-us.png') }}" alt="">
                    <a href="{{ route('diventa.revisore') }}"
                        class="d-flex justify-content-evenly btn-revisor mb-3"><button>Diventa
                            Revisore</button></a>
                </div>
            </div>
        </div> --}}


    <h2 class="style-title">{{__('ui.lastAnnouncements')}}</h2>
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
