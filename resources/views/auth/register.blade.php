<x-main>
    <x-slot:mainTitle>
        Registrati
        </x-slot>
        <div class="container">
            <div class="row mobile">
                <div class="text-center mt-5 mb-5">
                    <h1 class="h2 clr-text-blu">Benvenuto!</h1>
                    <p class="lead clr-text-blu">
                        Registrati il tuo nuovo account per continuare
                    </p>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <h2 class="clr-text-blu fz-large fw-bold">presto.it</h2>
                </div>

                <div class="col-6 mt-5 text-center small">
                    <form action="/register" method="POST">
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
                        </div>
                        <button class="large mt-4" type="submit">Registrati</button>
                </div>
            </div>
        </div>
        </form>
</x-main>
