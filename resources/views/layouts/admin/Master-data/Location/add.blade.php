@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h5 class="card-title fw-semibold mb-4">Add Location</h5>
    <div class="card">
        <div class="card-body">
          <form method="POST" action="{{route('location.store')}}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Location Name</label>
              <input type="text" class="form-control" name="location_name">
              @error('location_name')
                            <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</div>
@endsection
