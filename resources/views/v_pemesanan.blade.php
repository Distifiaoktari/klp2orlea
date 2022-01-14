@extends('layout.v_template')

@section('title','Pemesanan')

@section('content')
    <a href="/pemesanan/add" class="btn btn-primary btn-sm">Add</a> <br>
    @if(session('pesan'))
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{session('pesan')}}.
              </div>

    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>Barberman</th>
                <th>Tanggal Order</th>
                <th>Status Bayar</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
          @foreach ($pemesanan as $data)   
          <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $data->nama_pelanggan }} </td>
            <td> {{ $data->nama_barberman }} </td>
            <td> {{ $data->tanggal_order }} </td>
            <td> {{ $data->status_bayar }} </td>
            <td>
                    <a href="/pemesanan/detail/{{ $data->id }}" class="btn btn-sm btn-warning">Detail</a>
                    <a href="/pemesanan/edit/{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                Delete
              </button>
                </td>
            
</tr>
@endforeach
    </tbody>
    </table>

    @foreach ($pemesanan as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->id }}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah yakin ingin menghapus data ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/pemesanan/delete/{{ $data->id }}" type="button" class="btn btn-outline">Yes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endforeach

    @endsection
        