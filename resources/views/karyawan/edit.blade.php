<x-layout>
    <div class="container">
            <form action="/datakaryawan/update/{{ $data->id }}" method="POST">
                <h1 class="text-center mb-3 mt-5">Edit Daftar Karyawan</h1>
                @csrf
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="number" value="{{ $data->nip }}" class="form-control" id="nip" aria-describedby="emailHelp" name="nip">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="{{ $data->name }}" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" value="{{ $data->alamat }}" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat">
                    <label for="bagian"  class="form-label">Bagian</label>
                    <input type="text" value="{{ $data->bagian }}" class="form-control" id="bagian" aria-describedby="emailHelp" name="bagian">
                </div>
            <div class="modal-footer">
              <button class="btn btn-primary">Save Change</button>
            </div>
            </form>
    </div>
</x-layout>