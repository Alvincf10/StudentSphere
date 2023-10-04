@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-semibold mb-4">Location</h5>
                <div class="btn-add">
                    <a class="btn btn-primary" href="{{route('location.create')}}"><i class="ti ti-plus"></i>Tambah</a>
                </div>
            </div>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">No</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Location Name</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6>Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($location as $locations)
                    <tr>
                      <td class="border-bottom-0">{{$locations['id']}}</td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{$locations['location_name']}}</p>
                      </td>
                      <td class="border-bottom-0">
                        <a class="btn btn-warning"><i class="ti ti-edit"></i></a>
                        <a class="btn btn-danger" onclick="openDeleteModal({{$locations['id']}})" ><i class="ti ti-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus data ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function openDeleteModal(id) {
    var deleteForm = document.getElementById('deleteForm');
    deleteForm.action = 'location/' + id; // Sesuaikan dengan route delete yang sesuai
    $('#deleteModal').modal('show'); // Menampilkan modal
  }

  </script>
