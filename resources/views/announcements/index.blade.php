<x-main>
    <x-slot:mainTitle>
        Annunci
        </x-slot>

        <div class="container">
            <form action="" method="GET" class="d-flex justify-content-between">

                <div>
                    <label for="keyword-search" id="keyword-search">Cosa cerchi?</label>
                    <div class="d-flex">
                    <i class="bi bi-search"></i>
                    </div>
                    <input type="search" id="keyword-search" name="keyword-search" placeholder="Vespa, iPhone, Bilocale" autocomplete="off" value="">
                </div>

                <div>
                    <label for="category-search" id="category-search">Scegli una categoria</label>
                    <div class="d-flex">
                    <i class="bi bi-archive"></i>
                    </div>
                    <select name="category-search" id="category-search">
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


        </div>

</x-main>