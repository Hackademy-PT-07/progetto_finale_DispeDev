{{-- <div class="container my-5">
        <div class="d-flex">
            <div class="card-box">
                <div class="card-img-box">
                    <img class="card-img" src="{{$url_image}}" alt="{{$title}}">
                </div>
                <div class="card-text-box">
                    <h3>{{$title}}</h3>
                    <span class="price">€{{$price}}</span>
                </div>
                <p>{{$description}}</p>
            </div>
        </div>
</div> --}}


<div class="mt-5 mx-auto card card-radius mb-3" style="max-width: 600px;">
    <div class="row g-0">
        <div class="col-md-6">
            <img src="{{ $url_image }}" class="img-fluid full-size" alt="{{ $title }}">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $title }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Category</h6>
                <p class="card-text">{{ $description }}</p>
                <span class="price">€{{ $price }}</span>
                <p class="card-text card-posted"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
