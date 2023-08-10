<x-main>
    <x-slot:mainTitle>{{$announcement->title}}</x-slot>
    <div class="container my-5">
                    <div class="d-flex">
                        
                            <div class="card-box">
                                <div class="card-img-box">
                                    <img class="card-img" src="{{$announcement->url_image}}" alt="{{$announcement->title}}">
                                </div>
                                <div class="card-text-box">
                                    <h3>{{$announcement->title}}</h3>
                                    <span class="price">€{{$announcement->price}}</span>
                                </div>
                                <p>{{$announcement->description}}</p>
                            </div>
                        </a>
                    </div>
</x-main>