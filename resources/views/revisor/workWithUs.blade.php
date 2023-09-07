<x-main>
    <x-slot:mainTitle>{{ __('ui.workWithUs') }}</x-slot:mainTitle>
    <div>
        <div class="container mt-announce">
            @if (session('message'))
                <div class="alert alert-success text-center">{{ session('message') }}</div>
            @endif
            <div class="row work-container">
                <div class="work-center">
                    <form action="{{ route('invia.mail') }}" method="POST">
                        @csrf
                        <div class="work-content--container">
                            <div class="row mt-0">
                                <div class="col-md-12 ">
                                    <h4 class="work-title">{{ __('ui.workWithUs') }}</h4>
                                    <p class="work-motivation">{{ __('ui.motivation') }}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="talk-about--you">
                                    <textarea id="message" type="text" placeholder="{{ __('ui.placeHolderWork') }}" name="message"
                                        class="form-control input-box rm-border"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 px-3">
                                    <button type='submit'class="card-btn">{{ __('ui.sendEmail') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-main>
