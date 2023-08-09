<div>
    
    <form wire:submit.prevent="store" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" wire:mode="title" value="{{old('title')}}">
                        @error('title') <span class="small text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" name="price" class="form-control" id="price" wire:mode="price" value="{{old('price')}}">
                        @error('price') <span class="small text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <div>
                        <label for="categories">Scegli categoria</label>
                            <select class="form-select" wire:mode="categories" name="categories" aria-label="Default select example">
                                <option selected>Seleziona</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('categories') <span class="small text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image">Inserisci delle immagini</label>
                        <input type="file" wire:mode="image" name="image" id="image" class="form form-control">

                    </div>
                    <div class="mb-3">
                        <label for="decription" class="form-label">Descrivi il tuo articolo</label>
                        <textarea name="decription" wire:mode="description"  id="decription" placeholder="Inserisci una descrizione" class="form form-control">{{old('decription')}}</textarea>
                    </div>
                    <button type="submit">Inserisci annuncio</button>
            </div>
            </div>
            </div>
            </form>




</div>
