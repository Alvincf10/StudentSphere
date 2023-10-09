@extends('layouts.app')


@section('content')
<div class="container-fluid">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-semibold mb-4">Event</h5>
                <div class="btn-add">
                    <a class="btn btn-primary" href="{{route('event.create')}}"><i class="ti ti-plus"></i>Create</a>
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
                      <h6 class="fw-semibold mb-0">Progam Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Qouta</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Start Date</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">End Date</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Location</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Organizer</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Category</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6>Action</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($program as $programs)
                    <tr>
                      <td class="border-bottom-0">{{$programs->id}}</td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{$programs->program_name}}</p>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{$programs->qouta}}</p>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{date('d-M-Y',strtotime($programs->start_date_program))}}</p>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{date('d-M-Y',strtotime($programs->end_date_program))}}</p>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{$programs->location->location_name}}</p>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{$programs->organizer->name_organizer}}</p>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{$programs->category->category_name}}</p>
                      </td>
                      <td class="border-bottom-0">
                        <a class="btn btn-warning" href="{{route('event.edit',['id'=>$programs['id']])}}"><i class="ti ti-edit"></i></a>
                        <a class="btn btn-danger" onclick="openDeleteModal({{$programs['id']}}, '{{$programs['location_name']}}')"><i class="ti ti-trash"></i></a>
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

<!-- Modal confirm delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function openDeleteModal(id,locationName) {
    var deleteForm = document.getElementById('deleteForm');
    deleteForm.action = 'location/' + id;

    var modalBody = document.querySelector('.modal-body');
    modalBody.innerHTML = 'Are you sure to delete data <strong>'+ locationName +'</strong>'
    $('#deleteModal').modal('show');
  }

  function showDeleteSuccessMessage() {
    var deleteMessage = document.getElementById('deleteMessage');
    deleteMessage.innerHTML = 'Data berhasil dihapus.';
    deleteMessage.style.display = 'block'; // Tampilkan pesan
  }
  </script>
