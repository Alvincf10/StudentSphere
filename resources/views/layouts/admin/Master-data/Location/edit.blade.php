@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h5 class="card-title fw-semibold mb-4">Add Location</h5>
    <div class="card">
        <div class="card-body">
          <form method="POST" action="{{route('location.update',['id'=>$location['id']])}}">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">Location Name</label>
              <input type="text" class="form-control" name="location_name" value="{{$location['location_name']}}">
              @error('location_name')
                    <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Latitude</label>
              <input type="text" class="form-control" name="latitude" value="{{$location['latitude']}}">
              @error('latitude')
                    <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Longitude</label>
              <input type="text" class="form-control" name="longitude" value="{{$location['longitude']}}">
              @error('longitude')
                    <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <a href="{{route('location')}}" class="btn btn-light mr-2">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</div>
@endsection
