@extends('layout.v_template')

@section('title','Detail Pemesanan')

@section('content')
    <!-- <a href="/pemesanan/create" class="btn btn-primary btn-sm">Add</a> <br>
    @if(session('pesan'))
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{session('pesan')}}.
              </div>

    @endif -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Paket</th>
                <th>Harga</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
          @foreach ($detailpemesanan as $data)   
          <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $data->nama_paket }} </td>
            
            
           
                
            
</tr>
@endforeach

    </tbody>
    </table>

    
    @endsection
        