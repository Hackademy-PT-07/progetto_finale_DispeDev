<x-main>
    <x-slot:mainTitle>
        Crea il tuo annuncio
        </x-slot>

        <div class="container">
            <h1>Inserisci il tuo annuncio</h1>
            
            <x-success />

            <form action="{{route('announcements.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                    @error('title') <span class="small text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" name="price" class="form-control" id="price" value="{{old('price')}}">
                    @error('price') <span class="small text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <div>
                    <label for="image">Scegli categoria</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleziona</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    @error('categories') <span class="small text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Inserisci delle immagini</label>
                    <input type="file" name="image" id="image" class="form form-control">

                </div>
                <div class="mb-3">
                    <label for="decription" class="form-label">Descrivi il tuo articolo</label>
                    <textarea name="decription" id="decription" placeholder="Inserisci una descrizione" class="form form-control">{{old('decription')}}</textarea>
                </div>
                <button type="submit">Inserisci annuncio</button>
        </div>
        </div>
        </div>
        </form>
        </div>

</x-main>