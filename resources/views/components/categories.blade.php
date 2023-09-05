<div class="container">
    <div class="row">
        <div class="container categories-home">
            <div class="container categories-container">
                <a href="{{ route('annunci.filter', 1) }}">
                    <button class="categories-items item-1 mx-3">
                        <i class="bi bi-car-front-fill icon-category"></i> <span>{{ __('ui.car') }}</span>
                    </button>
                </a>
                <a href="{{ route('annunci.filter', 2) }}">
                    <button class="categories-items item-2 mx-3">
                        <i class="bi bi-bicycle icon-category"></i> <span>{{ __('ui.motorcycle') }}</span>
                    </button>
                </a>
                <a href="{{ route('annunci.filter', 4) }}">
                    <button class="categories-items item-3 mx-3">
                        <i class="bi bi-cpu-fill icon-category"></i> <span>{{ __('ui.electronics') }}</span>
                    </button>
                </a>
                <a href="{{ route('annunci.filter', 5) }}">
                    <button class="categories-items item-4 mx-3">
                        <i class="bi bi-house-heart-fill icon-category"></i> <span>{{ __('ui.household') }}</span>
                    </button>
                </a>
                <a href="{{ route('annunci.filter', 3) }}">
                    <button class="categories-items item-5 mx-3">
                        <i class="fa-solid fa-sailboat icon-category"></i></i> <span>{{ __('ui.nautical') }}</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
