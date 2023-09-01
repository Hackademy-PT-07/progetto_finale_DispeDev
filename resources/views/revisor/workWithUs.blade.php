<x-main>
    <x-slot:mainTitle>{{__('ui.workWithUs')}}</x-slot:mainTitle>
    <div>
        <div class="container">
        @if(session('message'))
            <div class="alert alert-success text-center">{{session('message')}}</div>
            @endif
            <div class="row justify justify-content-center">
                <div class="col-11 col-md-8 col-lg-6 col-xl-5">
                    <form action="{{route('invia.mail')}}" method="POST">
                        @csrf
                        <div>
                            <div class="row mt-0">
                                <div class="col-md-12 ">
                                    <h4 class="">Lavora con noi</h4>
                                    <p>Scrivici il perchè vuoi diventare un nostro revisore</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 mb-2">
                                    <p class="mb-1">Message</p> <textarea id="message" type="text" placeholder="Parlaci un pò di te..." name="message" class="form-control input-box rm-border"></textarea>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center mb-0">
                                <div class="col-md-12 px-3"> <button type='submit' class="card-btn">Invia Mail
                                </button> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-main>