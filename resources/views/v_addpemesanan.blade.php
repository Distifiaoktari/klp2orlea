@extends('layout.v_template')

@section('title','Add Admin')

@section('content')
<form action="/pemesanan/insert" method="POST" enctype="multipart/form-data">
@csrf
<div class="content">
    <div class="row"> 
    <div class="col-sm-6">
        <div class="form-group">
            <label>Pelanggan</label>
            <input name="pelanggan" class="form-control" value="{{ old('pelanggan') }}">
            <div class="text-danger">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>barberman</label>
            <input name="barberman" class="form-control" value="{{ old('barberman') }}">
            <div class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal Order</label>
            <input  name="tanggal_order" class="form-control" value="{{ old('tanggal_order') }}">
            <div class="text-danger">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Status Bayar</label>
            <input  name="status_bayar" class="form-control" value="{{ old('status_bayar') }}">
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