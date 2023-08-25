<a href="{{ route('annunci.show', $id) }}">
    <div class="card-announcement">
        <div class="card-img-box">
            <img class="card-announcement-img" src="{{ $url_image }}" alt="{{ $title }}">
        </div>
        <div class="card-announcement-text-box">
            <a href="{{route('annunci.categoria', ['category' => $categoria])}}" class="category-a">{{ $category }}</a>
            <h3>{{ $title }}</h3>
            <span>€{{ $price }}</span>
            <p>{{ $description }}</p>
            <div class="d-flex justify-content-end mt-4">
                <p class="last-update">Ultima modifica: {{ $updated }}</p>
            </div>
        </div>
    </div>
</a>
