<!-- Modal -->
<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xs">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-warning" style="background-color: #499DB1 !important">
        <h4 class="modal-title">Form Petugas</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <table class="table table_modal">
          <tr>
            <td>Nama Lengkap</td>
            <td>
              <input type="text" class="form-control form-control-sm inputtext nama_lengkap" name="nama_lengkap">
              <input type="hidden" class="form-control form-control-sm id" name="id">
            </td>
          </tr>
          <tr>
            <td>Role</td>
            <td>
              <select class="form-control form-control-sm role_id" name="role" id="role_id" >
                <option disabled>Pilih</option>
                @foreach ($roles as $key => $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
              @endforeach
              </select>
            </td>
          </tr>
          <tr>
            <td>Username</td>
            <td>
              <input type="text" class="form-control form-control-sm inputtext username" name="username">

            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input type="text" class="form-control form-control-sm inputtext password" name="password">

            </td>
          </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" id="simpan" type="button">Process</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>

  </div>
</div>
