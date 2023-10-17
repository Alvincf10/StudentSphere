@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h5 class="card-title fw-semibold mb-4">Add Event</h5>
    <div class="card">
        <div class="card-body">
          <form method="POST" action="{{route('event.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-12">
                  <label class="form-label"></label>Event Name</label>
                  <input type="text" class="form-control" name="event_name">
                  @error('event_name')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-12">
                  <label class="form-label">Banner</label>
                  <input type="file" class="form-control" name="banner">
                  @error('banner')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-12">
                  <label class="form-label">Description</label>
                  <textarea  class="form-control" name="description"></textarea>
                  @error('description')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Price</label>
                  <div class="input-price d-flex align-items-center">
                      <span class="title-currency">Rp.</span>
                      <input type="number" class="form-control" name="price">
                  </div>
                  @error('price')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Kickoff Event</label>
                  <input type="date" class="form-control" name="eventDate">
                  @error('eventDate')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Start Date</label>
                  <input type="date" class="form-control" name="startDate">
                  @error('startDate')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">End Date</label>
                  <input type="date" class="form-control" name="endDate">
                  @error('endDate')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Qouta</label>
                  <input type="number" class="form-control" name="qouta">
                  @error('qouta')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Organizer</label>
                  <select name="organizer" class="form-select" >
                    @foreach ($organizer as $organizers)
                    <option value="" selected disabled hidden>Choose Organizer</option>
                    <option value="{{$organizers->id}}">{{$organizers->name_organizer}}</option>
                    @endforeach
                  </select>
                  @error('organizer')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Location</label>
                  <select name="location" class="form-select" >
                    @foreach ($location as $locations)
                    <option selected disabled hidden>Choose location</option>
                    <option value="{{$locations->id}}">{{$locations->location_name}}</option>
                    @endforeach
                  </select>
                  @error('location')
                        <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 col-6">
                  <label class="form-label">Category</label>
                  <select name="category" class="form-select" >
                    @foreach ($category as $categorys)
                        <option selected disabled hidden>Choose category</option>
                        <option value="{{$categorys->id}}">{{$categorys->category_name}}</option>
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
