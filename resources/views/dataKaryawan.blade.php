<x-layout>
    <div class="container mt-5">
    <table class="table">
        <h1 class="text-center mb-3">Daftar Karyawan</h1>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#dataKaryawan">
            <i class="bi bi-plus"></i> Tambah data
          </button>
        
        <thead>
            <tr>
            <th scope="col">NO</th>
            <th scope="col">NIP</th>
            <th scope="col">Name</th>
            <th scope="col">Alamat</th>
            <th scope="col">Bagian</th>
            <th scope="col">Aksi</th>
          </tr>
          
        </thead>
        <tbody>
        @foreach ($datakaryawan as $no=>$data)
          <tr>
            <th scope="row">{{ $no+1 }}</th>
            <td>{{ $data->nip }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->bagian }}</td>
            <td>
              <a href="/datakaryawan/edit/{{ $data->id }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
              <a href="/datakaryawan/delete/{{ $data->id }}" class="btn btn-danger"><i class="bi bi-file-minus"></i></a>
              <a href="/tes/{{ $data->id }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InfodataKaryawan">Info</a>
              {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InfodataKaryawan">
                info
              </button> --}}
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    {{-- Modal --}}
    <x-modal-tambah-data></x-modal-tambah-data>
    <x-modal-info-data-karyawan></x-modal-info-data-karyawan>
    {{-- End Modal --}}
</x-layout>
