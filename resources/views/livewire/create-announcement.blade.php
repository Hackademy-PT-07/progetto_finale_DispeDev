<div class="container {{-- mt-announce --}}">
    <div class="row">
        <x-success />
        <div class="card-container">
            @if ($announcement->id)
                <h3 class="card-create--title">{{ __('ui.editAnnouncement') }}</h3>
            @else
                <h3 class="card-create--title">{{ __('ui.createAnnouncement') }}</h3>
            @endif
            <form wire:submit.prevent="store" enctype="multipart/form-data"
                class="d-flex flex-column justify-content-center">
                @csrf
                {{-- First Section --}}
                <div class="section-text mb-3">
                    <input type="text" name="title" class="form-control" id="title" wire:model="title"
                        value="{{ old('title') }}" placeholder="{{ __('ui.titlePlaceholder') }}">
                    @error('title')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Second Section --}}
                <div class="section-text mb-3">
                    <input type="number" name="price" class="form-control" id="price" wire:model="price"
                        value="{{ old('price') }}" placeholder="{{ __('ui.pricePlaceholder') }}">
                    @error('price')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Third Section --}}
                <div class="section-text mb-3">
                    <select class="form-select" wire:model="category_id" name="category_id"
                        aria-label="Default select example">
                        <option selected>{{ __('ui.selectCategories') }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Image Section --}}
                <div class="mb-3">
                    <input wire:model="temporary_images" type="file" name="images" multiple
                        class="form-control shadow @error('temporary_images.*') is-invalid @enderror"
                        placeholder="Img" />
                    @error('temporary_images.*')
                        <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Image empty Section --}}
                @if (!empty($images) || !empty($dbimages))
                    <div class="section-text mb-3">
                        <p>Photo preview:</p>
                        <div class="row border border-4 border-info rounded shadow py-2 preview-container">
                            @if ($images != null)
                                @foreach ($images as $key => $image)
                                    <div class="img-container">
                                        <div class="img-preview shadow rounded"
                                            style="background-image:url({{ $image->temporaryUrl() }});">
                                        </div>
                                        <div class="img-btn--container">
                                            <button type="button"
                                                class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                                wire:click="removeImage({{ $key }})">Cancella</button>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            @if (isset($dbImages) && !$dbimages->isEmpty())
                                @foreach ($dbimages as $key => $image)
                                    <div class="img-container col my-3">
                                        <div class="img-preview mx-auto shadow rounded"
                                            style="background-image:url({{ asset('storage/' . $image->path) }});">
                                        </div>
                                        <button type="button"
                                            class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                            wire:click="removeImage({{ $key }})">Cancella</button>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endif
                {{-- Description Section --}}
                <div class="section-text mb-3">
                    <textarea name="description" wire:model="description" id="description" rows="10"
                        placeholder="{{ __('ui.descriptionPlaceholder') }}" class="form form-control">{{ old('decription') }}</textarea>
                    @error('description')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="mt-3 mb-4 large" type="submit">{{ __('ui.button') }}</button>
            </form>
        </div>
    </div>
</div>
