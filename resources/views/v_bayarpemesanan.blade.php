<!-- Modal -->
<div class="modal fade" id="ModalEdit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Status Bayar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <select name="status_bayar" id="status_bayar" class="form-control" required>
                                    <option > -- PILIH STATUS BAYAR -- </option>
                                    <option >Belum Bayar</option>
                                    <option >Sudah Bayar</option>
                                </select>
      <!-- {{$data->id}} -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/pemesanan/bayar/{{ $data->id }}" class="btn btn-sm btn-warning">OK</a>
      </div>
    </div>
  </div>
</div>