@extends('layouts.app-front')

@section('content')

<div class="container mt-5">
    <div class="row all-event-container">
        <div class="event-filter col-md-4 col-12 me-4">
            <div class="d-flex flex-column">
              <h4><b>Filters</b> </h4>
              <button id="toggle-filter" class="btn btn-primary mt-3 w-100 d-md-none">Toggle Filter</button>
              <form action="{{route('eventFront.filter')}}" method="POST">
                @csrf
                <div class="col-3 text-nowrap mt-3">
                  <h4>Date</h4>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="date-month" name="date-option" value="this-month">
                      <label class="form-check-label" for="date-month">This Month</label>
                    </div>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="date-nextmonth" name="date-option" value="next-month">
                      <label class="form-check-label" for="date-nextmonth">Next Month</label>
                    </div>
                </div>
                <div class="col-3 mt-4">
                  <h4>Price</h4>
                  <div class="form-check mt-3 mb-3">
                    <input type="radio" class="form-check-input" id="ticket-free" name="price-option" value="free">
                    <label class="form-check-label" for="ticket-free">Free</label>
                  </div>
                  <div class="form-check mt-3 mb-3">
                    <input type="radio" class="form-check-input" id="ticket-paid" name="price-option" value="paid">
                    <label class="form-check-label" for="ticket-paid">Paid</label>
                  </div>
                </div>
                <div class="col-3 mt-4">
                  <h4>Category</h4>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="category-conference" name="category-option" value="1">
                      <label class="form-check-label" for="category-conference">Conference</label>
                    </div>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="category-workshop" name="category-option" value="2">
                      <label class="form-check-label" for="category-workshop">Workshop</label>
                    </div>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="category-sports" name="category-option" value="3">
                      <label class="form-check-label" for="category-sports">Sports</label>
                    </div>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="category-social" name="category-option" value="4">
                      <label class="form-check-label" for="category-social">Social</label>
                    </div>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="category-art" name="category-option" value="5">
                      <label class="form-check-label" for="category-art">Art</label>
                    </div>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="category-fashion" name="category-option" value="6">
                      <label class="form-check-label" for="category-fashion">Fashion</label>
                    </div>
                    <div class="form-check mt-3 mb-3">
                      <input type="radio" class="form-check-input" id="category-fashion" name="category-option" value="">
                      <label class="form-check-label" for="category-fashion">Game</label>
                    </div>
                </div>
              </div>
              <div class="group-apply w-100">
                  <button type="submit" class="btn btn-primary mt-3 w-100">Apply Filters</button>
              </div>
              </form>
        </div>

        <div class="list-event col-md-8 col-12">
            @if (isset($filteredProgram))
                @foreach ($filteredProgram as $programs )
                <a href="{{route('event.detail',['id'=>$programs->id])}}">
                    <div class="content-container mb-4">
                    <div class="box-shadow row max-height">
                        <div class="col-6 p-0 bg-white img-all-event">
                        <img class="img-fluid img-all-event" src="{{asset('storage\events/'.$programs->banner)}}" class="card-img img-all-event" alt="...">
                        </div>
                        <div class="col-6 p-0">
                        <div class="banner-body">
                            <div class="banner-time">
                            <div class="time">
                                <i class="ti ti-calendar"></i>
                                <span>{{$programs->date_program}}</span>
                            </div>
                            </div>
                            <div class="detail p-4">
                            <span class="card-category color-secondary text-uppercase">{{$programs->category->category_name}}</span>
                            <strong><h5 class="card-title mt-2">{{$programs->program_name}}</h5></strong>
                                <div class="banner-group-information mt-4">
                                <div class="location fs-15 mt-3">
                                    <i class="ti ti-location-pin me-2"></i>
                                    <span>{{$programs->location->location_name}}</span>
                                </div>
                                <div class="banner-ticket mt-2 fs-15 mt-3">
                                    <i class="ti ti-ticket me-2"></i>
                                    <span class="color-primary">{{$programs->price == 0 ? 'Free' : 'Rp.' . $programs->price}}</span>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
                @endforeach
            @else
                @foreach ($program as $programs )
                <a href="{{route('event.detail',['id'=>$programs->id])}}">
                    <div class="content-container mb-4">
                    <div class="box-shadow row max-height">
                        <div class="col-6 p-0 bg-white img-all-event">
                        <img class="img-fluid img-all-event" src="{{asset('storage\events/'.$programs->banner)}}" class="card-img img-all-event" alt="...">
                        </div>
                        <div class="col-6 p-0">
                        <div class="banner-body">
                            <div class="banner-time">
                            <div class="time">
                                <i class="ti ti-calendar"></i>
                                <span>{{$programs->date_program}}</span>
                            </div>
                            </div>
                            <div class="detail p-4">
                            <span class="card-category color-secondary text-uppercase">{{$programs->category->category_name}}</span>
                            <strong><h5 class="card-title mt-2">{{$programs->program_name}}</h5></strong>
                                <div class="banner-group-information mt-4">
                                <div class="location fs-15 mt-3">
                                    <i class="ti ti-location-pin me-2"></i>
                                    <span>{{$programs->location->location_name}}</span>
                                </div>
                                <div class="banner-ticket mt-2 fs-15 mt-3">
                                    <i class="ti ti-ticket me-2"></i>
                                    <span class="color-primary">{{$programs->price == 0 ? 'Free' : 'Rp.' . $programs->price}}</span>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filter = document.querySelector(".event-filter");
        const toggleButton = document.getElementById("toggle-filter");

        toggleButton.addEventListener("click", function() {
            filter.classList.toggle("filter-collapsed");
        });
    });
</script>

