@extends('layout.v_template')

@section('title','Data Pelanggan')

@section('content')
    <!-- <h1> Halaman Data Pelanggan </h1> -->
    <a href="/pelanggan/create" class="btn btn-primary">Tambah Pelanggan</a>
    <br><br>
    <table class="table table-bordered" mt-5>
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $pelanggan as $pln )
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$pln->nama_pelanggan}}</td>
            <td>{{$pln->alamat}}</td>
            <td>{{$pln->no_hp}}</td>
            <td>
                <a href="/pelanggan/{{$pln->id}}/edit" class="btn btn-warning" mb-5>Ubah</a>
                <a href="{{Route('pelanggan.destroy',[$pln->id])}}" display="inline" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection