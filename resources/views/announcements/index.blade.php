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
                <x-card-announcement>
                    <x-slot:title>{{$announcement->title}}</x-slot>
                    <x-slot:category>{{$announcement->category_id}}</x-slot>
                    <x-slot:url_image>{{$announcement->url_image}}</x-slot>
                    <x-slot:price>{{$announcement->price}}</x-slot>
                    <x-slot:description>{{$announcement->description}}</x-slot>
                </x-card-announcement>
            @endforeach
                </div>
            </div>

</x-main>