@extends('layout.v_template')

@section('title','Add Pemesanan')

@section('content')
<form action="/pemesanan/insert" method="POST" enctype="multipart/form-data">
@csrf
<div class="content">
    <div class="row"> 
    <div class="col-sm-6">
        <div class="form-group">
            <label>Pelanggan</label>
            <select name="pelanggan_id" class="form-control" >
            <option value="" >- Pilih -</option>
            @foreach ($pelanggan as $item)
            <option value="{{ $item->id }}" >{{ $item->nama_pelanggan }}</option>
            @endforeach
</select>
            <!-- <div class="text-danger">
                @error('name')
                {{ $message }}
                @enderror
            </div> -->
        </div>
        <div class="form-group">
            <label>barberman</label>
            <select name="barberman_id" class="form-control" >
            <option value="" >- Pilih -</option>
            @foreach ($barberman as $item)
            <option value="{{ $item->id }}" >{{ $item->nama_barberman }}</option>
            @endforeach
</select>
            <!-- <div class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </div> -->
        </div>
        <div class="form-group">
            <label>Tanggal Order</label>
            <input type="date"  name="tanggal_order" class="form-control" value="{{ old('tanggal_order') }}">
            <div class="text-danger">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        
        
        <div class="form-group">
            <button class="btn btn-primary btn-sm">Simpan</button>
            
        </div>
    </div>

    </div>
</div>

</form>

@endsection