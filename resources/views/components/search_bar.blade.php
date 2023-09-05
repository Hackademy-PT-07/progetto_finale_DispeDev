<div class="container search-box">
    <form action="{{ route('annunci.ricerca') }}" method="GET">
        @csrf
        <div class="search-input">
            <label for="searched">{{ __('ui.searched') }}</label>
            <input type="text" name="searched" id="searched" placeholder="{{ __('ui.search') }}">
        </div>
        <div class="select-categories">
            <label for="category_id">{{ __('ui.wichCategories') }}</label>
            <select name="category_id" id="category_id">
                <option selected value="">{{ __('ui.selectCategories') }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="search-button">
            <button type='submit' class="search-button"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>
