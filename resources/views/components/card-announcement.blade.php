<div class="container-principal">
    <a href="{{ route('annunci.show', $id) }}">
        <div class="card-announcement">
            <div class="card-img-box">
                    <img src="{{ $url_image }}" alt="{{ $title }}">
            </div>
            <div class="card-announcement-text-box">
                <span class="annuncement-category">{{$category}}</span>
                <h3 class="annuncement-title">{{ $title }}</h3>
                <span class="annuncement-price">€{{ $price }}</span>
                <p class="annuncement-descr">{{ $description }}</p>
                <div class="d-flex justify-content-end">
                    <p class="last-update">Ultima modifica: {{ $updated }}</p>
                </div>
            </div>
        </div>
        
    </a>
    <!-- <a href="{{route('annunci.categoria', ['category' => $categoria])}}" class="category-a">{{ $category }}</a> -->
    
</div>
