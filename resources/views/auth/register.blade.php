<x-main>
    <x-slot:mainTitle>
        Registrati
        </x-slot>
        <div class="container">
            <div class="row">
        <h1 class="text-center my-5">Registrati</h1>
        <div class="col-6">
            <img class="img-fluid rounded"src="https://www.ofhousesandtrees.com/wp-content/uploads/2021/05/How-to-Print-a-Pinterest-Board-1-683x1024.png" alt="">
        </div>

        <div class="col-6  text-center">
        <form action="/register" method="POST">
              @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="nameHelp" value="{{old('name')}}">
                        @error('name') <span class="small text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Indirizzo e-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{old('email')}}">
                        @error('email') <span class="small text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @error('password') <span class="small text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Conferma password</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        id="exampleInputPassword1">
                </div>
                <button type="submit" >Registrati</button>
            </div>
            </div>
            </div>
        </form>
</x-main>
