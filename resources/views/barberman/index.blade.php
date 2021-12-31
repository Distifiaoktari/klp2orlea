@extends('layout.v_template')

@section('title','Data Barberman')

@section('content')
    <!-- <h1> Halaman Data Barberman </h1> -->
    <a href="/barberman/create" class="btn btn-primary">Tambah Barberman</a>
    <br><br>
    <table class="table table-bordered" mt-5>
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Barberman</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $barberman as $brb )
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$brb->nama_barberman}}</td>
            <td>{{$brb->alamat}}</td>
            <td>{{$brb->no_hp}}</td>
            <td>
                <a href="/barberman/{{$brb->id}}/edit" class="btn btn-warning" mb-5>Ubah</a>
                <a href="{{Route('barberman.destroy',[$brb->id])}}" display="inline" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection