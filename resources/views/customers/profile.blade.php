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
            @if (auth()->user()->alamat == null)
                <div class="alert alert-danger">Segera lengkapi data diri anda <a href="{{ route('customer.profile.edit') }}" class="ms-2 btn btn-primary">Lengkapi data diri anda disini</a></div>
            @else
                <div class="alert alert-success">Data anda sudah lengkap, anda sudah bisa melakukan transaksi!</div>
            @endif
            <div class="">
                <h4>Profile anda</h4>
                <div class="mb-2">
                    <label for="">Nama</label>
                    <input type="text" disabled class="form-control" value="{{ auth()->user()->nama }}">
                </div>
                <div class="mb-2">
                    <label for="">Username</label>
                    <input type="text" disabled class="form-control" value="{{ auth()->user()->username }}">
                </div>
                <div class="mb-2">
                    <label for="">Email</label>
                    <input type="text" disabled class="form-control" value="{{ auth()->user()->email }}">
                </div>
                <div class="mb-2">
                    <label for="">Telp</label>
                    <input type="text" disabled class="form-control" value="{{ (auth()->user()->telp !== null) ? auth()->user()->telp : "-" }}">
                </div>
                <div class="mb-2">
                    <label for="">Alamat</label>
                    <input type="text" disabled class="form-control" value="{{ (auth()->user()->alamat !== null) ? auth()->user()->alamat : "-" }}">
                </div>
                <div class="mb-2">
                    <label for="">Tanda rumah</label>
                    <input type="text" disabled class="form-control" value="{{ (auth()->user()->tanda_rumah !== null) ? auth()->user()->tanda_rumah : "-" }}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection