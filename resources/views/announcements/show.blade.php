<x-main>
    <x-slot:mainTitle>{{$announcement->title}}</x-slot>
    <div class="container mt-announce">
        <div class="row">
            <button class="btn-add back-button"><i class="bi bi-chevron-left"></i><a href="{{ route('annunci.index') }}"> indietro</a>
            </button>
        </div>
        <div class="row show-announcement">
            <div class="col-7 img-carousel">
            @if ($announcement->images)
                        <div class="carousel-inner">
                            @foreach($announcement->images as $image)
                            <div class="carousel-item @if($loop->first)active @endif">
                                <img src="{{$image->getUrl(400,300)}}" alt="foto">
                                </div>
                        
                            @endforeach
                            </div>
                            @else
                            <div class="carousel-item">
                                <img src="https://picsum.photos/200/300" alt="foto2">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
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
                <div class="col-5 announcement-desc">
                    <div class="desc-1">
                        <span class="last-update">Annuncio creato il
                            {{ $announcement->created_at->format('d/m/Y') }}</span>
                        <h1 class="title-announcement">{{ $announcement->title }}</h1>
                        <p class="price">€ {{ $announcement->price }}</p>
                        <p>Categoria: <a href="" class="category">{{ $announcement->category->name }}</a></p>
                    </div>
                    <div class="desc-2">
                        <h4>Descrizione del prodotto</h4>
                        <p>{{ $announcement->description }}</p>
                    </div>
                </div>
            </div>
        </div>
</x-main>
