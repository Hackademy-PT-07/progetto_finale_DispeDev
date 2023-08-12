    <div class="container">
        <div class="row">
            <x-success />
            <div class="card-create col-4">
                <div class="mt-4">
                    <h2 class="fw-medium clr-text-blu">Inserisci il tuo annuncio</h2>
                </div>
                <form wire:submit.prevent="store" enctype="multipart/form-data"
                    class="d-flex flex-column justify-content-center">
                    @csrf
                    <div class="mb-4 section-split">

                        <input type="text" name="title" class="form-control" id="title" wire:model="title"
                            value="{{ old('title') }}" placeholder="Titolo">
                        @error('title')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 section-split">

                        <input type="number" name="price" class="form-control" id="price" wire:model="price"
                            value="{{ old('price') }}" placeholder="Prezzo">
                        @error('price')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 section-split">
                        <div>

                            <select class="form-select" wire:model="category_id" name="category_id"
                                aria-label="Default select example">
                                <option selected>Scegli la categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 section-split">

                        <input type="file" wire:model="url_image" name="url_image" id="url_image"
                            class="form form-control" placeholder="inserisci delle immagini">

                    </div>
                    <div class="mb-4 section-split">

                        <textarea name="description" wire:model="description" id="description" placeholder="Inserisci una descrizione"
                            class="form form-control" placeholder="inserisci una descrizione">{{ old('decription') }}</textarea>
                        @error('description')
                            <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="mt-3 mb-4 large" type="submit">Inserisci annuncio</button>
                </form>
            </div>

            <div class="col-8 ms-4 card-announcements">
                <div class="card bg-body-panna my-4" style="width: 45rem;">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="text-body-tertiary mb-0">categoria</h6>
                        <span class="text-body-tertiary">data publicazione</span>
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <div class="text-container">
                            <h5 class="card-title">TITOLO ANNUNCIO</h5>
                            <p class="card-text small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
                                excepturi, fuga maiores autem id recusandae quos repellendus natus, ullam, ea eaque
                                delectus. Dolores aut id consectetur quis, accusantium aperiam? Ea!</p>
                        </div>
                        <div class="btn-container">
                            <button class="btn btn-warning mb-2">Modifica</button>
                            <button class="btn btn-danger">Cancella</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
