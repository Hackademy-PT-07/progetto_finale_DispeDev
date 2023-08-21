<x-main>
    <x-slot:mainTitle>
        Homepage
        </x-slot>
        <div class="container m-top">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 mx-auto">
                    <img class="img-fluid img-register" src="{{ asset('img/login.png') }}" alt="">
                </div>
                <div class="ccol-xl-6 col-lg-4 col-md-6 col-sm-12 my-5 mx-auto text-center card-registration">
                    <div class="mt-4">
                        <img class="img-logo-register" src="{{ asset('img/logo-presto-blu.png') }}" alt="">
                    </div>
                    <div class="text-center mt-4">
                        <h1 class="h2 clr-text-blu">Bentornato!</h1>
                        <p class="lead clr-text-blu">
                            Accedi con il tuo account per continuare
                        </p>
                    </div>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="container">
                            <div class="form-group mb-4 section-split">
                                <input class="form-control form-control-lg" type="email" name="email" id="email"
                                    placeholder="Inserisci la tua email">
                                @error('email')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group section-split">

                                <input class="form-control form-control-lg" type="password" name="password"
                                    id="password" placeholder="Inserisci la password">
                                @error('password')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                                <small>
                                    <a href="">Password dimenticata?</a>
                                </small>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox align-items-center">
                                    <input type="checkbox" class="custom-control-input" value="remember-me"
                                        name="remember-me" checked="">
                                    <label class="custom-control-label text-small clr-text-blu">Ricordami
                                        la prossima volta</label>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="action_btn fc-bianco large">Accedi</button>
                            </div>
                            <div class="mt-5 text-center">
                                <p>Non hai un account?<a href="/register"> Registrati!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-main>
