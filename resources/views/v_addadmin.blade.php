@extends('layout.v_template')

@section('title','Add Admin')

@section('content')
<form action="/dataadmin/insert" method="POST" enctype="multipart/form-data">
@csrf
<div class="content">
    <div class="row"> 
    <div class="col-sm-6">
        <div class="form-group">
            <label>Nama</label>
            <input name="name" class="form-control" value="{{ old('name') }}">
            <div class="text-danger">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" value="{{ old('email') }}">
            <div class="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
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