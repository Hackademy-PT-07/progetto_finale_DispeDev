<div class="container search-box">
    <form action="{{ route('annunci.ricerca') }}" method="GET">
        @csrf
        <div class="search-input">
            <label for="searched">Cosa cerchi?</label>
            <input type="text" name="searched" placeholder="Cerca...">
        </div>
        <div class="search-input">
            <label for="category_id">In quale categoria?</label>
            <div class="select-categories">
                <select name="category_id" id="category_id">
                    <option selected>Segli una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="search-input">
            <button type='submit' class="search-button"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>
