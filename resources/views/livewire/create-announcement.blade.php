<div>
    <x-success/>
    <form wire:submit.prevent="store" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" wire:model="title" value="{{old('title')}}">
                        @error('title') <span class="small text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" name="price" class="form-control" id="price" wire:model="price" value="{{old('price')}}">
                        @error('price') <span class="small text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <div>
                        <label for="categories">Scegli categoria</label>
                            <select class="form-select" wire:model="category_id" name="category_id" aria-label="Default select example">
                                <option selected>Seleziona</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id') <span class="small text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="url_image">Inserisci delle immagini</label>
                        <input type="file" wire:model="url_image" name="url_image" id="url_image" class="form form-control">

                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrivi il tuo articolo</label>
                        <textarea name="description" wire:model="description"  id="description" placeholder="Inserisci una descrizione" class="form form-control">{{old('decription')}}</textarea>
                        @error('description') <span class="small text-danger">{{$message}}</span> @enderror
                    </div>
                    <button type="submit">Inserisci annuncio</button>
            </div>
            </div>
            </div>
            </form>




</div>
