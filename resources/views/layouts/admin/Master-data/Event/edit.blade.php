@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h5 class="card-title fw-semibold mb-4">Edit Event</h5>
        <div class="card">
            <div class="card-body">
            <form method="POST" action="{{route('event.update',['id'=>$program->id])}}" enctype="multipart/form-data">
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
                    <label class="form-label">Banner</label>
                    <input type="file" class="form-control" id="bannerInput" name="banner" value="{{$program->banner}}">
                    <input type="hidden" name="current_banner" name="oldimage" value="{{ $program->banner }}">
                        <img class="mt-3" id="bannerPreview" src="{{ asset('storage/events/'.$program->banner) }}" alt="Current Banner" width="200">
                    @error('banner')
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
                        <label class="form-label">Price</label>
                        <div class="input-price d-flex align-items-center">
                            <span class="title-currency">Rp.</span>
                            <input type="number" class="form-control" name="price" value="{{$program->price}}">
                        </div>
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Kickoff Event</label>
                        <input type="datetime-local" class="form-control" name="eventDate" value="{{$program->date_program}}">
                        @error('eventDate')
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('bannerInput').addEventListener('change', function () {
            const bannerPreview = document.getElementById('bannerPreview');
            const bannerInput = this;

            if (bannerInput.files && bannerInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    bannerPreview.setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(bannerInput.files[0]);
            } else {
                bannerPreview.setAttribute('src', "{{ asset('storage/events/'.$program->banner) }}");
            }
        });
    });
</script>


