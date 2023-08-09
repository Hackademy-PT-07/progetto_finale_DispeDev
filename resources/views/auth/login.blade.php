<x-main>
    <x-slot:mainTitle>
        Homepage
        </x-slot>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2 clr-text-blu">Bentornato!</h1>
                            <p class="lead clr-text-blu">
                                Accedi con il tuo account per continuare
                            </p>
                        </div>
                        <div class="card-login">
                            <div class="index-card pb-1 rounded">
                                <div class="m-sm-4">
                                    <div class="text-center py-3">
                                        <img src="https://icon-library.com/images/hackers-icon/hackers-icon-11.jpg"
                                            alt="logo-login" class="img-fluid rounded" width="100" height="132">
                                    </div>
                                    <form action="/login" method="POST">
                                        @csrf
                                        <div class="container">
                                            <div class="form-group mb-4">
                                                <input class="form-control form-control-lg" type="email"
                                                    name="email" id="email" placeholder="Inserisci la tua email">
                                                @error('email')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">

                                                <input class="form-control form-control-lg" type="password"
                                                    name="password" id="password" placeholder="Inserisci la password">
                                                @error('password')
                                                    <span class="small text-danger">{{ $message }}</span>
                                                @enderror
                                                <small>
                                                    <a href="">Password dimenticata?</a>
                                                </small>
                                            </div>
                                            <div>
                                                <div class="custom-control custom-checkbox align-items-center">
                                                    <input type="checkbox" class="custom-control-input"
                                                        value="remember-me" name="remember-me" checked="">
                                                    <label class="custom-control-label text-small clr-text-blu">Ricordami la prossima volta</label>
                                                </div>
                                                <div>
                                                    <a href="/register">Non hai un account? Registrati!</a>
                                                </div>
                                            </div>
                                            <div class="text-center mt-3 mb-3">
                                                <button type="submit" class="action_btn fc-bianco">Accedi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-main>
