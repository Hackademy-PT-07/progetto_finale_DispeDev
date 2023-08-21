<x-main>
    <x-slot:mainTitle>
        Registrati
        </x-slot>
        <div class="container m-top">
            <div class="row justify-content-center align-items-center mobile">
                <div class="col-xl-6 col-lg-8 col-md-12 me-4">
                    <img class="img-fluid img-register" src="{{ asset('img/registration.png') }}" alt="">
                </div>
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 my-5 text-center card-registration">
                    <div class="mt-4">
                        <img class="img-logo-register" src="{{ asset('img/logo-presto-blu.png') }}" alt="">
                    </div>

                    <div class="text-center mt-4 mb-3">
                        <h2 class="fs-3 clr-text-blu">Benvenuto!</h2>
                        <p class="fs-5 lead clr-text-blu">
                            Registrati il tuo nuovo account per continuare
                        </p>
                    </div>

                    <form action="/register" method="POST" class="mt-3">
                        @csrf
                        <div class="mb-4 section-split">
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                aria-describedby="nameHelp" value="{{ old('name') }}"
                                placeholder="Inserisci il tuo Nome">
                            @error('name')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4 section-split">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ old('email') }}"
                                placeholder="Inserisci la tua email">
                            @error('email')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4 section-split">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Inserisci la tua password">
                            @error('password')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4 section-split">
                            <input type="password" name="password_confirmation" class="form-control"
                                id="exampleInputPassword1" placeholder="Re-inserisci la tua password">
                            @error('password')
                                <span class="small text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="large mt-2 mb-4" type="submit">Registrati</button>
                    </form>
                </div>
            </div>
        </div>
</x-main>


{{-- <div class="card w-75 mb-3">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Button</a>
    </div>
</div> --}}
