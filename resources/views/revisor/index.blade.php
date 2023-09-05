<x-main>
    <x-slot:mainTitle>{{__('ui.announcementToReview')}}</x-slot>

        <div class="container">
            <div class="row revise-title--container">
                <h2 class="revise-title">
                    {{ $announcementToCheck ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h2>
                @if ($announcementToCheck)
            </div>
        </div>
        <div class="container">
            <div class="row revise-content--container">
                <div>
                    <div class="carousel slide" id="carousel" data-bs-ride="carousel">
                        @if ($announcementToCheck->images)
                        <div class="carousel-inner">
                            @foreach($announcementToCheck->images as $image)
                            <div class="carousel-item @if($loop->first)active @endif">
                                <img src="{{$image->getUrl(400,300)}}" alt="foto">
                                <div>
                                    <h5>Tags</h5>
                                    <div>
                                        @if($image->labels)
                                        @foreach($image->labels as $label)
                                        <p>{{$label}}</p>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h5>Revisione Immagini</h5>
                                        <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                        <p>Satira: <span class="{{$image->spoon}}"></span></p>
                                        <p>Medicina: <span class="{{$image->medicine}}"></span></p>
                                        <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                        <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                                    </div>
                                </div>
                            </div>


                            @endforeach
                        </div>
                        @else
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/200/300" alt="foto2">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                @endif
                <div class="content-container">
                    <div class="content-item">
                        {{__('ui.titlePlaceholder')}}:<h5 class="content-title"> {{ $announcementToCheck->title }}</h5>
                    </div>
                    <div class="content-item">
                        {{__('ui.category')}}:<h5 class="content-category"> {{ $announcementToCheck->category->name }}</h5>
                    </div>
                    <div class="content-item">
                        {{__('ui.description')}}:<h5 class="content-text"> {{ $announcementToCheck->description }}</h5>
                    </div>
                    <div class="content-item mb-4">
                        {{__('ui.publishedAt')}}:<h5 class="content-footer">
                            {{ $announcementToCheck->created_at->format('d/m/Y') }}
                        </h5>
                    </div>
                </div>

                <div class="check-container">
                    <form action="{{ route('accept_announcement', ['announcement' => $announcementToCheck]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success shadow">{{__('ui.accept')}}</button>
                    </form>

                    <form action="{{ route('reject_announcement', ['announcement' => $announcementToCheck]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger shadow">{{__('ui.reject')}}</button>
                    </form>
                </div>

            </div>
        </div>
        </div>
        @endif
</x-main>