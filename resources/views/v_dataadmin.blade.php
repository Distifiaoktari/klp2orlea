@extends('layout.v_template')

@section('title','Data Admin')

@section('content')
    <a href="/dataadmin/add" class="btn btn-primary btn-sm">Add</a> <br>
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
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $no=1;    ?>
            @foreach ($dataadmin as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->password}}</td>
                <td>
                    <a href="/dataadmin/edit/{{ $data->id }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">
                Delete
              </button>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

@foreach ($dataadmin as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->id }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->name }}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah yakin ingin menghapus data ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/dataadmin/delete/{{ $data->id }}" type="button" class="btn btn-outline">Yes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endforeach
@endsection