@extends('layout.v_template')

@section('title','Ubah Data Barberman')

@section('content')
    <!-- <h1> Halaman Edit Data Barberman </h1> -->    
    <a class="btn btn-success" href="/barberman">Kembali</a>
    <br><br>    
    <form method="post" action="{{Route('barberman.update',[$barberman->id])}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" required class="form-control" id="nama" name='nama_barberman' placeholder="Masukkan nama barberman..." value="{{$barberman->nama_barberman}}">
        </div>
        <br>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" required class="form-control" id="alamat" name='alamat' placeholder="Masukkan alamat..." value="{{$barberman->alamat}}">
        </div>
        <br>
        <div class="mb-3">
            <label for="nohp" class="form-label">Nomor HP</label>
            <input type="text" required class="form-control" id="nohp" name='no_hp' placeholder="Masukkan nomor HP..." value="{{$barberman->no_hp}}">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

@endsection