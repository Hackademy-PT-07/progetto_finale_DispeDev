<div class="container">
    <div class="row">
        I tuoi annunci
        @foreach ($announcements as $announcement)
            <div class="card my-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-body-tertiary mb-0">{{ $announcement->category->name }}</h6>
                    <span class="text-body-tertiary">Ultima modifica:
                        {{ $announcement->updated_at->format('d/m/Y') }}</span>
                </div>
                <div class="card-body d-flex justify-content-between">
                    <div class="text-container">
                        <h5 class="card-title" wire:model='title'>{{ $announcement->title }}</h5>
                        <img class="img-fluid" src="{{ $announcement->url_image }}" alt="{{ $announcement->title }}">
                        <div>
                            <p class="card-text small">{{ $announcement->description }}</p>
                        </div>

                    </div>
                    <div class="btn-container">
                        <button class="btn btn-warning text-white bottom"
                            wire:click="editAnnouncementUser({{ $announcement->id }})">Modifica<i
                                class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-danger" wire:click="deleteAnnouncement({{ $announcement->id }})"><i
                                class="bi bi-trash-fill">Elimina</i></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
