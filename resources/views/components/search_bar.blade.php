<div class="search-box">
    <form action="{{ route('annunci.ricerca') }}" method="GET">
        @csrf
        <div class="search-input">
            <label for="searched">Cosa cerchi?</label>
            <input type="text" name="searched" id="searched" placeholder="Cerca...">
        </div>
        <div class="search-input">
            <div class="select-categories">
            <label for="category_id">In quale categoria?</label>
                <select name="category_id" id="category_id">
                    <option selected value="">Segli una categoria</option>
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
