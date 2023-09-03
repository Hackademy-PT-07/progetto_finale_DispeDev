<x-main>
    <x-slot:mainTitle>
        {{ __('ui.pageTitle') }}
    </x-slot>
    <div class="container">
        <x-success />
        <div class="container mt-5">
            <div class="row">
                <div class="create-card--container">
                    <livewire:create-announcement />
                </div>
                <div class="user-announcements--container">
                    <livewire:user-announcements-list />
                </div>
            </div>
        </div>
    </div>
</x-main>
