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
                  <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Binus</p>
                    </td>
                    <td class="border-bottom-0">
                      <a class="btn btn-warning"><i class="ti ti-edit"></i></a>
                      <a class="btn btn-danger"><i class="ti ti-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
