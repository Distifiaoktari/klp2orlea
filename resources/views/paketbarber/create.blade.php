@extends('layout.v_template')

@section('title','Tambah Data Paket Barber')

@section('content')
    <!-- <h1> Halaman Data Pakte Barber </h1> -->    
    <a class="btn btn-success" href="/paketbarber">Kembali</a>
    <br><br>    
    <form method="post" action="/paketbarber">
        @csrf
    <div class="mb-3">
        <label for="nama_paket" class="form-label">Nama</label>
        <input type="text" required class="form-control" id="nama" name='nama_paket' placeholder="Masukkan nama paket...">
    </div>
    <br>
    <div class="mb-3">
        <label for="harga_paket" class="form-label">Harga Paket</label>
        <input type="text" required class="form-control" id="harga_paket" name='harga_paket' placeholder="Masukkan harga paket...">
    </div>
    <br>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" required class="form-control" id="keterangan" name='keterangan' placeholder="Masukkan keterangan paket...">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>

@endsection