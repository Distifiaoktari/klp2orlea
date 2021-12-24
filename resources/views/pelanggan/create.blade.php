@extends('layout.v_template')

@section('title','Tambah data Pelanggan')

@section('content')
    
    <a class="btn btn-success" href="/pelanggan">Kembali</a>
    <br><br>
    
    <form method="post" action="/pelanggan">
        @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" required class="form-control" id="nama" name='nama_pelanggan' placeholder="Masukkan nama pelanggan...">
    </div>
    <br>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" required class="form-control" id="alamat" name='alamat' placeholder="Masukkan alamat...">
    </div>
    <br>
    <div class="mb-3">
        <label for="nohp" class="form-label">Nomor HP</label>
        <input type="text" required class="form-control" id="nohp" name='no_hp' placeholder="Masukkan nomor HP...">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>

@endsection