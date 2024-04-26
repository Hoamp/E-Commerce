<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register E-Commerce</title>
    @include('partials.css')
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 card shadow border rounded">
                <div class="card-body">
                    <h4 class="text-center">Welcome To E-Comm Login</h4>
                    <form action="{{ route('register_acc') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-2">
                            <label for="">Username</label>
                            <input type="text" name="username" id="" class="form-control">
                        </div>
                        @error('username')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-2">
                            <label for="">email</label>
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-2">
                            <label for="">nama</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        @error('nama')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mb-2">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="row px-3">

                            <button class="btn btn-primary col-md-12 mb-2" type="submit">Register</button>
                            <p>
                                Sudah ada akun? <a href="{{ route('login') }}" class="">Login</a>    
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.js')
</body>
</html>