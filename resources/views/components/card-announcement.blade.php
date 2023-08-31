<<<<<<< HEAD
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
=======
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
>>>>>>> 7d3f2d6c9e9b4cd21db364eefa1120252eed88e4
            </div>
>>>>>>> bd3b04d34f505cd4fe3a9cad7b13d1a1e5ef2b0e
        </div>
<<<<<<< HEAD
        
    </a>
    <a href="{{route('annunci.categoria', ['category' => $categoria])}}" class="category-a">{{ $category }}</a> -->
    
=======
    </div>
>>>>>>> 7d3f2d6c9e9b4cd21db364eefa1120252eed88e4
</div>
