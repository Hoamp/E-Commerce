@extends('public_layouts.main')

@section('content')
<div class="container">

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card">
        <div class="card-body shadow">
            @if (auth()->user()->alamat == null || auth()->user()->tanda_rumah == null || auth()->user()->telp == null)
                <div class="alert alert-danger">Segera lengkapi data diri anda</div>
            @endif
            <form action="{{ route('customer.profile.update') }}" method="POST">
                @csrf
                <h4>Edit Profile anda</h4>
                <div class="mb-2">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->nama }}" name="nama">
                </div>
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">Username</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->username }}" readonly>
                </div>
                <div class="mb-2">
                    <label for="">Email</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="mb-2">
                    <label for="">Telp</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->telp }}" name="telp">
                </div>
                @error('telp')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->alamat }}" name="alamat">
                </div>
                @error('alamat')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">Tanda rumah</label>
                    <input type="text" class="form-control" value="{{ auth()->user()->tanda_rumah }}" name="tanda_rumah">
                </div>
                @error('tanda_rumah')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                <button type="submit" class="btn btn-primary">Edit Profile</button>
                <a href="{{ route('customer.profile') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection