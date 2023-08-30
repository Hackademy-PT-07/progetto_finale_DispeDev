<div class="container categories-home">
    <div class="row">
        <div class="col-12 text-center">

            <a href="{{ route('annunci.filter', 1) }}">
                <button class="categories-items item-1 mx-3">
                    <i class="bi bi-car-front-fill"></i>{{__('ui.car')}}
                </button>
            </a>

            <a href="{{ route('annunci.filter', 2) }}">
                <button class="categories-items item-2 mx-3">
                    <i class="bi bi-bicycle"></i>{{__('ui.motorcycle')}}
                </button>
            </a>

            <a href="{{ route('annunci.filter', 4) }}">
                <button class="categories-items item-3 mx-3">
                    <i class="bi bi-cpu-fill"></i>{{__('ui.electronics')}}
                </button>
            </a>

            <a href="{{ route('annunci.filter', 5) }}">
                <button class="categories-items item-4 mx-3">
                    <i class="bi bi-house-heart-fill"></i>{{__('ui.household')}}
                </button>
            </a>

        </div>
    </div>
</div>