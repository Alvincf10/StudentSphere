@extends('layouts.app-front')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="event-filter col-md-4 col-4 me-3 border border-4 rounded-2">
            <div class="d-flex flex-column">
              <h4><b>Filters</b> </h4>


              <div class="col-3 ms-4 mt-2">
                <h4>Date</h4>

                <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="date-weekend">
                    <label class="form-check-label" for="date-weekend">This Weekend</label>
                  </div>
                  <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="date-month">
                    <label class="form-check-label" for="date-month">This Month</label>
                  </div>
                  <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="date-nextmonth">
                    <label class="form-check-label" for="date-nextmonth">Next Month</label>
                  </div>
              </div>
              <div class="col-3 ms-4 mt-2">
                <h4>Price</h4>
                <div class="form-check mt-1">
                  <input type="radio" class="form-check-input" id="ticket-free">
                  <label class="form-check-label" for="ticket-free">Free</label>
                </div>
                <div class="form-check mt-1">
                  <input type="radio" class="form-check-input" id="ticket-paid">
                  <label class="form-check-label" for="ticket-paid">Paid</label>
                </div>
              </div>
              <div class="col-3 ms-4 mt-2">
                <h4>Category</h4>
                <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="category-conference">
                    <label class="form-check-label" for="category-conference">Conference</label>
                  </div>
                  <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="category-workshop">
                    <label class="form-check-label" for="category-workshop">Workshop</label>
                  </div>
                  <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="category-sports">
                    <label class="form-check-label" for="category-sports">Sports</label>
                  </div>
                <div id="additionalCategories" style="display: none;">
                  <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="category-art">
                    <label class="form-check-label" for="category-art">Art</label>
                  </div>
                  <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="category-social">
                    <label class="form-check-label" for="category-social">Social</label>
                  </div>
                  <div class="form-check mt-1">
                    <input type="radio" class="form-check-input" id="category-fashion">
                    <label class="form-check-label" for="category-fashion">Fashion</label>
                  </div>

                </div>
                <button id="viewMoreButton" class="btn btn-link">View More</button>
              </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Apply Filters</button>

        </div>

        <div class="list-event col-8">
          <div class="content-container">

            <div class="box-shadow row mt-3 max-height">
              <div class="col-6 p-0">
                <img src="https://media.istockphoto.com/id/1139837519/photo/blurred-de-focused-audience-in-conference-lecture-presentation-room-corporate-presentations.jpg?s=612x612&w=0&k=20&c=DqjU9k5nPJn5Ivq8a1AtG_tsBocAtNIGXFG3bmTfxzg=" class="card-img" alt="...">
              </div>
              <div class="col-6 p-0">
                <div class="banner-body">
                  <div class="banner-time">
                    <div class="time">
                      <i class="ti ti-calendar"></i>
                        <span>Tue, Oct 21</span>
                    </div>
                  </div>
                  <span class="banner-category color-secondary">CONFERENCE</span>
                  <div class="banner-group-information mt-4">
                    <div class="location fs-15 mt-3">
                      <i class="ti ti-location-pin me-2"></i>
                      <span>Jakarta</span>
                    </div>
                    <div class="banner-ticket mt-2 fs-15 mt-3">
                      <i class="ti ti-ticket me-2"></i>
                      <span class="color-primary">Free</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

</div>



  <script>
    const viewMoreButton = document.getElementById("viewMoreButton");
    const additionalCategories = document.getElementById("additionalCategories");

    viewMoreButton.addEventListener("click", function () {
      if (additionalCategories.style.display === "none") {
        additionalCategories.style.display = "block";
        viewMoreButton.textContent = "View Less";
      } else {
        additionalCategories.style.display = "none";
        viewMoreButton.textContent = "View More";
      }
    });
  </script>





@endsection
