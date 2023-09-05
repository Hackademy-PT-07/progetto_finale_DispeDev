<div class="container">
    <div class="row card-container">
        <h3 class="card-list--title">I tuoi Annunci</h3>
        @foreach ($this->getAnnouncements() as $announcement)
            <div class="announcement-container">
                <div class="card-category--container">
                    <h6 class="category-title">{{ $announcement->category->name }}</h6>
                    <h6 class="last-update">Ultima modifica:
                        {{ $announcement->updated_at->format('d/m/Y') }}</h6>
                </div>
                <div class="card-body">
                    <div class="card-img--container">
                        <img class="img-announcement" src="{{ $announcement->url_image }}"
                            alt="{{ $announcement->title }}">
                    </div>
                    <div class="card-description--container">
                        <h5 class="card-title" wire:model='title'>{{ $announcement->title }}</h5>
                        <p class="card-text small">{{ $announcement->description }}</p>
                    </div>
                    <div class="btn-container">
                        <button class="btn btn-warning text-white"
                            wire:click="editAnnouncementUser({{ $announcement->id }})"><i
                                class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-danger" wire:click="deleteAnnouncement({{ $announcement->id }})"><i
                                class="bi bi-trash-fill"></i></button>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $this->getAnnouncementsLinks() }}
    </div>
</div>
