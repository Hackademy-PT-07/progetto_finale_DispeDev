<div class="card-announcement">
    <div class="card-img-box">
        <img class="card-announcement-img" src="{{ $url_image }}" alt="{{ $title }}">
    </div>
    <div class="card-announcement-text-box">
        <h3>{{ $title }}</h3>
        <span>€{{ $price }}</span>
        <p>{{ $description }}</p>
        <div class="d-flex justify-content-end mt-4">
            <a href="" class="category-a">{{ $category }}</a>
            <p class="last-update">Ultima modifica: {{ $updated }}</p>
        </div>
    </div>
</div>
