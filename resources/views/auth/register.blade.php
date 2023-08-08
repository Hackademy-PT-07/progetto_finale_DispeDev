<x-main>
    <x-slot:mainTitle>
        Homepage
        </x-slot>
        <form>
            <div class="container">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="nameHelp">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password_confirmation" name="password_confirmation" class="form-control"
                        id="exampleInputPassword1">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
</x-main>
