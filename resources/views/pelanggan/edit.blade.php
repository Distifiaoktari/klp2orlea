@extends('layout.v_template')

@section('title','Ubah data Pelanggan')

@section('content')
    
    <a class="btn btn-success" href="/pelanggan">Kembali</a>
    <br><br>
    
    <form method="post" action="{{Route('pelanggan.update',[$pelanggan->id])}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" required class="form-control" id="nama" name='nama_pelanggan' placeholder="Masukkan nama pelanggan..." value="{{$pelanggan->nama_pelanggan}}">
        </div>
        <br>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" required class="form-control" id="alamat" name='alamat' placeholder="Masukkan alamat..." value="{{$pelanggan->alamat}}">
        </div>
        <br>
        <div class="mb-3">
            <label for="nohp" class="form-label">Nomor HP</label>
            <input type="text" required class="form-control" id="nohp" name='no_hp' placeholder="Masukkan nomor HP..." value="{{$pelanggan->no_hp}}">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

@endsection