@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h5 class="card-title fw-semibold mb-4">Edit organizer</h5>
    <div class="card">
        <div class="card-body">
          <form method="POST" action="{{route('organizer.update',['id'=>$organizer['id']])}}">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">organizer Name</label>
              <input type="text" class="form-control" name="name_organizer" value="{{$organizer['name_organizer']}}">
              @error('organizer_name')
                    <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <a href="{{route('organizer')}}" class="btn btn-light mr-2">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</div>
@endsection
