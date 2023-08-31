<x-main>
    <x-slot:mainTitle>
        {{ __('ui.pageTitle') }}
    </x-slot>
    <div class="container">
        <x-success />
        <div class="container mt-5">
            <div class="row">
                <div class="col-5 d-flex card-create">
                    <livewire:create-announcement />
                    <livewire:user-announcements-list />
                </div>
                {{--                 <div class="col-5">

                </div> --}}
            </div>
        </div>
    </div>
</x-main>
