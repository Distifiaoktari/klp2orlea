@extends('layout.v_template')

@section('title','Add Paket')

@section('content')
<form action="/detailpemesanan/insert" method="POST" enctype="multipart/form-data">
@csrf
<div class="content">
    <div class="row"> 
    <div class="col-sm-6">
        <div class="form-group">
            <label>Paket Barber</label>
            <select name="paketbarber_id" class="form-control" >
            <option value="" >- Pilih -</option>
            @foreach ($paketbarber as $item)
            <option value="{{ $item->id }}" >{{ $item->nama_paket }}</option>
            @endforeach
</select>
            <div class="form-group">
            <label>ID</label>
            <input type='text' name="id" class="form-control" value="{{$id}}">
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary btn-sm">Simpan</button>
            
        </div>
    </div>

    </div>
</div>

</form>

@endsection