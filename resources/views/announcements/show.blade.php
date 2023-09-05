<x-main>
    <x-slot:mainTitle>{{$announcement->title}}</x-slot>
    <div class="container mt-announce">
        <div class="row">
            <button class="btn-add back-button"><i class="bi bi-chevron-left"></i><a href="{{ route('annunci.index') }}"> indietro</a>
            </button>
        </div>
        <div class="row show-announcement">
            <div class="col-7 colImgCustom">
                <div id="carouselExample" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                        @if ($announcement->images)
                            @foreach($announcement->images as $image)
                                <div class="carousel-item @if($loop->first)active @endif">
                                    <img src="{{$image->getUrl(400,300)}}" alt="foto">
                                </div>
                            @endforeach
                                @else
                                    <div class="carousel-item">
                                        <img src="https://picsum.photos/200/300" alt="foto2">
                                    </div>
                            
                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                    
            </div>
                <div class="col-5 announcement-desc">
                    <div class="desc-1">
                        <span class="last-update">{{__('ui.lastUpdate')}}
                            {{ $announcement->created_at->format('d/m/Y') }}</span>
                        <h1 class="title-announcement">{{ $announcement->title }}</h1>
                        <p class="price">€ {{ $announcement->price }}</p>
                        <p>{{__('ui.category')}}: <a href="{{ route('annunci.filter', ['category' => $announcement->category_id]) }}" class="category">{{ $announcement->category->name }}</a></p>
                    </div>
                    <div class="desc-2">
                        <h4>{{__('ui.description')}}</h4>
                        <p>{{ $announcement->description }}</p>
                    </div>
                </div>
            </div>
        </div>
</x-main>
