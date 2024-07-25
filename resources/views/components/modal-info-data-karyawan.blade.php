<div class="modal fade" id="InfodataKaryawan" tabindex="-1" aria-labelledby="InfodataKaryawan" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" method="GET">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="dataKaryawan">Info Data Karyawan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @csrf
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="number" class="form-control" id="nip" aria-describedby="emailHelp" name="nip">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat">
                <label for="bagian" class="form-label">Bagian</label>
                <input type="text" class="form-control" id="bagian" aria-describedby="emailHelp" name="bagian">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary">Save Change</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  