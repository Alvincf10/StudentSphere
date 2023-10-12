@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h5 class="card-title fw-semibold mb-4">Add Description</h5>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ isset($abouts->id) ? route('aboutus.update', ['id' => $abouts->id]) : route('aboutus.create') }}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea type="text" class="form-control" name="description">{{$abouts->description ?? ''}}</textarea>
              @error('description')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <a href="{{ route('aboutus') }}" class="btn btn-light mr-2">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</div>
@endsection
