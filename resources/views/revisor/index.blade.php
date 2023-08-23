<x-main>
<x-slot:mainTitle> Annunci da revisionare </x-slot>

<h1>{{$announcementToCheck ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
@if($announcementToCheck)
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="carousel slide" id="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/200/300" alt="foto">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/200/300" alt="foto2">
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
            <h5 class="card-title">Titolo:{{$announcementToCheck->title}}</h5>
            <p class="card-text">Descrizione: {{$announcementToCheck->description}}</p>
            <p class="card-footer">Pubblicato il : {{$announcementToCheck->created_at->format('d/m/Y')}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{route('accept_announcement', ['announcement'=> $announcementToCheck])}}" method="POST" >
            @csrf 
            @method('PATCH')
            <button type="submit" class="btn btn-success shadow">Accetta</button>
            </form>
        </div>
        <div class="col-12 col-md-6">
            <form action="{{route('reject_announcement', ['announcement'=> $announcementToCheck])}}" method="POST" >
            @csrf 
            @method('PATCH')
            <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
            </form>
        </div>
    </div>


</div>
@endif


</x-main>