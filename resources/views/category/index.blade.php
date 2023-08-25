<x-main>
    <x-slot:mainTitle>Annunci</x-slot:mainTitle>
    <p>{{$categories->announcements()->count()}} Annunci trovati</p>
    <div class="container">
        @if($categories->announcements->isNotEmpty())
            @foreach($categories->announcements->where('is_accepted', true) as $announcement)
            <x-card-announcement>
                <x-slot:category>{{$announcement->category->name}}</x-slot:category>
                <x-slot:categoria>{{$announcement->category->id}}</x-slot:categoria>
                <x-slot:url_image>{{$announcement}}</x-slot:url_image>
                <x-slot:categoria>{{$announcement->category->id}}</x-slot:categoria>
                <x-slot:title>{{$announcement->title}}</x-slot:title>
                <x-slot:price>{{$announcement->price}}</x-slot:price>
                <x-slot:description>{{$announcement->description}}</x-slot:description>
            </x-card-announcement>
            @endforeach
            @endif
    </div>
</x-main>