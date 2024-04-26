<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login E-Commerce</title>
    @include('partials.css')
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 card shadow border rounded">
                <div class="card-body">
                    <h4 class="text-center">Welcome To E-Comm Login</h4>
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger">{{ session('loginError') }}</div>
                    @endif
                    @if (session()->has('successRegister'))
                        <div class="alert alert-success">{{ session('successRegister') }}</div>
                    @endif
                    <form action="{{ route('authenticate') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-2">
                            <label for="">Username</label>
                            <input type="text" name="username" id="" class="form-control">
                        </div>
                        @error('username')
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

                            <button class="btn btn-primary col-md-12 mb-2" type="submit">Login</button>
                            
                            <p>
                                Belum ada akun? <a href="{{ route('register') }}" >Register</a>    
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