@extends('layout.v_template')

@section('title','Ubah Data Paket Barber')

@section('content')
    <!-- <h1> Halaman Edit Data Barber </h1> -->    
    <a class="btn btn-success" href="/paketbarber">Kembali</a>
    <br><br>    
    <form method="post" action="{{Route('paketbarber.update',[$paketbarber->id])}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama</label>
            <input type="text" required class="form-control" id="nama_paket" name='nama_paket' placeholder="Masukkan nama paket barber..." value="{{$paketbarber->nama_paket}}">
        </div>
        <br>
        <div class="mb-3">
            <label for="harga_paket" class="form-label">Alamat</label>
            <input type="text" required class="form-control" id="harga_paket" name='harga_paket' placeholder="Masukkan harga paket..." value="{{$paketbarber->harga_paket}}">
        </div>
        <br>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Nomor HP</label>
            <input type="text" required class="form-control" id="keterangan" name='keterangan' placeholder="Masukkan keterangan paket..." value="{{$paketbarber->keterangan}}">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

@endsection