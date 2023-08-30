<div class="container my-auto">
    <div class="row d-flex mt-announce">
        <x-success />
        <div class="card-create col-4 ">
            <div class="mt-4">

                @if($announcement->id)
                    <h3>{{__('ui.editAnnouncement')}}</h1>
                @else
                    <h3>{{__('ui.createAnnouncement')}}</h1>
                @endif

            </div>
            <form wire:submit.prevent="store" enctype="multipart/form-data" class="d-flex flex-column justify-content-center">
                @csrf
                <div class="mb-4 section-split">

                    <input type="text" name="title" class="form-control" id="title" wire:model="title" value="{{ old('title') }}" placeholder="{{__('ui.titlePlaceholder')}}">
                    @error('title')
                    <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 section-split">

                    <input type="number" name="price" class="form-control" id="price" wire:model="price" value="{{ old('price') }}" placeholder="{{__('ui.pricePlaceholder')}}">
                    @error('price')
                    <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4 section-split">
                    <div>

                        <select class="form-select" wire:model="category_id" name="category_id" aria-label="Default select example">
                            <option selected>{{__('ui.selectCategories')}}</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                    <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--<div class="mb-4 section-split">

                    <input type="file" wire:model="url_image" name="url_image" id="url_image"
                        class="form form-control" placeholder="inserisci delle immagini">

                </div>!-->
                <div class="mb-4 section-split">

                    <textarea name="description" wire:model="description" id="description" placeholder="{{__('ui.descriptionPlaceholder')}}" class="form form-control">{{ old('decription') }}</textarea>
                    @error('description')
                    <span class="small text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="mt-3 mb-4 large" type="submit">{{__('ui.button')}}</button>
            </form>
        </div>
        


    </div>
</div>