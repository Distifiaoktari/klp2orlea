@extends('layout.v_template')

@section('title','Data Paket Barber')

@section('content')
    <!-- <h1> Halaman Data Paket Barber </h1> -->
    <a href="/paketbarber/create" class="btn btn-primary">Tambah Paket Barber</a>
    <br><br>
    <table class="table table-bordered" mt-5>
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Paket</th>
            <th scope="col">Harga Paket</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $paketbarber as $pkt )
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$pkt->nama_paket}}</td>
            <td>{{$pkt->harga_paket}}</td>
            <td>{{$pkt->keterangan}}</td>
            <td>
                <a href="/paketbarber/{{$pkt->id}}/edit" class="btn btn-warning" mb-5>Ubah</a>
                <a href="{{Route('paketbarber.destroy',[$pkt->id])}}" display="inline" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection