<<<<<<< HEAD
{{-- <a class="a-card" href="{{ route('annunci.show', $id) }}">

</a> --}}

<div class="card-announcement">
    <div class="card-img-box">
        <img class="card-announcement-img" src="{{ $url_image }}" alt="{{ $title }}">
    </div>
    <div class="card-announcement-text-box">
        <a href="{{ route('annunci.categoria', ['category' => $categoria]) }}" class="category-a">{{ $category }}</a>
        <h3>{{ $title }}</h3>
        <span>€{{ $price }}</span>
        <p>{{ $description }}</p>
        <div class="d-flex justify-content-end">
            <p class="last-update">Ultima modifica: {{ $updated }}</p>
=======
<!--<a href="{{ route('annunci.show', $id) }}">
    <div class="card-announcement">
        <div class="card-img-box">
            <img class="card-announcement-img" src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/200/300' }}" alt="{{ $title }}">
        </div>
        <div class="card-announcement-text-box">
            <a href="{{route('annunci.categoria', ['category' => $categoria])}}" class="category-a">{{ $category }}</a>
            <h3>{{ $title }}</h3>
            <span>€{{ $price }}</span>
            <p>{{ $description }}</p>
            <div class="d-flex justify-content-end">
                <p class="last-update">Ultima modifica: {{ $updated }}</p>
            </div>
>>>>>>> bd3b04d34f505cd4fe3a9cad7b13d1a1e5ef2b0e
        </div>
    </div>
</div>
