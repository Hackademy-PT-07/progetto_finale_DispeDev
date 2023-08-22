<x-main>
    <x-slot:mainTitle>{{$announcement->title}}</x-slot>
    <div class="container mt-announce">
        <div class="row">
            <button class="btn-add back-button"><i class="bi bi-chevron-left"></i><a href="{{ route('annunci.index') }}"> indietro</a>
            </button>
        </div>
        <div class="row">
            <div class="col-7 img-carousel">
                <!-- carousel -->
                <div id="carouselExample" class="carousel slide bg-shadow">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{$announcement->url_image}}" class="d-block w-100" alt="{{$announcement->title}}">
                        </div>
                        <div class="carousel-item">
                        <img src="{{$announcement->url_image}}" class="d-block w-100" alt="{{$announcement->title}}">
                        </div>
                        <div class="carousel-item">
                        <img src="{{$announcement->url_image}}" class="d-block w-100" alt="{{$announcement->title}}">
                        </div>
                    </div>
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
            <div class="col-5">
                <span class="last-update">Pubblicato il ....</span>
                <h1 class="title-announcement">{{$announcement->title}}</h1>
                <p class="price">€ {{$announcement->price}}</p>
                <p>Categoria: <a href="" class="category">{{$announcement->category->name}}</a></p>
                <hr>
                <h4>Descrizione del prodotto</h4>
                <p>{{$announcement->description}}</p>
            </div>
        </div>
    </div>
</x-main>