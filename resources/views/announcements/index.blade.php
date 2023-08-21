<x-main>
    <x-slot:mainTitle>
        Annunci
        </x-slot>

        <div class="container">
            <form action="{{route('annunci.categoria')}}" method="POST" class="d-flex justify-content-between">
                @csrf
                <div>
                    <label for="keyword-search" id="keyword-search">Cosa cerchi?</label>
                    <div class="d-flex">
                        <i class="bi bi-search"></i>
                    </div>
                    <input type="search" id="keyword-search" name="keyword-search" placeholder="Vespa, iPhone, Bilocale" autocomplete="off" value="">
                </div>

                <div>
                    <label for="category_id">Scegli una categoria</label>
                    <div class="d-flex">
                        <i class="bi bi-archive"></i>
                    </div>
                    <select name="category_id" id="category_id">
                        <option selected>Seleziona</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>

            <h1>Annunci</h1>
            <p>{{$announcements->count()}} Annunci trovati</p>
            <div class="container">
            @foreach($announcements as $announcement)
                <div class="container my-5">
                    <div class="d-flex">
                        <a href="{{route('annunci.show', $announcement)}}">
                            <div class="card-box">
                                <div class="card-img-box">
                                    <img class="card-img" src="{{$announcement->url_image}}" alt="{{$announcement->title}}">
                                </div>
                                <div class="card-text-box">
                                    <h3>{{$announcement->title}}</h3>
                                    <span class="price">€{{$announcement->price}}</span>
                                </div>
                                <p>{{$announcement->description}}</p>
                                <p>{{$announcement->updated_at}}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                


            </div>

</x-main>