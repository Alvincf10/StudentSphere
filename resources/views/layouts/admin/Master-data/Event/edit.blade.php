@extends('layouts.app')

@section('content')

@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h5 class="card-title fw-semibold mb-4">Add Event</h5>
    <div class="card">
        <div class="card-body">
          <form method="POST" action="{{route('event.update',['id'=>$program->id])}}">
            @csrf
            @method('put')
            <div class="row">
                <div class="mb-3 col-12">
                  <label class="form-label">event Name</label>
                  <input type="text" class="form-control" name="event_name" value="{{$program->program_name}}">
                  @error('event_name')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-12">
                  <label class="form-label">Description</label>
                  <textarea  class="form-control" name="description">{{$program->description}}</textarea>
                  @error('description')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Start Date</label>
                  <input type="date" class="form-control" name="startDate" value="{{$program->start_date_program}}">
                  @error('startDate')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">End Date</label>
                  <input type="date" class="form-control" name="endDate" value="{{$program->end_date_program}}">
                  @error('endDate')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Qouta</label>
                  <input type="number" class="form-control" name="qouta" value="{{$program->qouta}}">
                  @error('qouta')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Organizer</label>
                    <select name="organizer" class="form-select">
                        <option value="" selected disabled hidden>Choose Organizer</option>
                        @foreach ($organizer as $organizers)
                        <option value="{{ $organizers->id }}" {{ $organizers->id == $program->id_organizer ? 'selected' : '' }}>
                            {{ $organizers->name_organizer }}
                        </option>
                        @endforeach
                    </select>
                    @error('organizer')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 col-6">
                  <label class="form-label">Location</label>
                  <select name="location" class="form-select" >
                    <option selected disabled hidden>Choose location</option>
                    @foreach ($location as $locations)
                        <option value="{{$locations->id}}" {{ $locations->id == $program->id_location ? 'selected' : '' }}>{{$locations->location_name}}</option>
                    @endforeach
                  </select>
                  @error('location')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Category</label>
                  <select name="category" class="form-select" >
                      <option selected disabled hidden>Choose category</option>
                    @foreach ($category as $categorys)
                        <option value="{{$categorys->id}}" {{$categorys->id ==$program->id_category ? 'selected' : ''}}>{{$categorys->category_name}}</option>
                    @endforeach
                  </select>
                  @error('category')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
            </div>
            <a href="{{route('event')}}" class="btn btn-light mr-2">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</div>
@endsection

@endsection
