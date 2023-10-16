@extends('layouts.app-front')

@section('content')

    <div class="container-fluid mt-4">
        <div class="ds-banner">
            <img class="img-fluid" src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149410630.jpg?w=1380&t=st=1697335639~exp=1697336239~hmac=47dc4d71b9b5634fbe75a03abc0a49d30fb8d3f4d0e24109ae343a97d396e159" alt="" srcset="">
        </div>
    </div>

    <section class="info-event container">
        <div class="row mt-4">
            <div class="col-md-7">
                <div class="card mb-4">
                    <div class="card-map mt-4">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.6262746699147!2d106.78878891571958!3d-6.226394285474659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f82f9ce6f0a5%3A0x6822a3d87a02d2d1!2sUniversity%20of%20Indonesia!5e0!3m2!1sen!2sid!4v1610977185972!5m2!1sen!2sid" width="35%" height="250" style="border:10; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
                            <div class="map-details ms-4">
                                <strong><h1 class="card-title fs-">ThirumaLi-Dabzee Show With DJ Night</h1></strong><br>
                                <div class="grup-map mt-2 mb-2">
                                    <p>Hilit Business Park</p><br>
                                    <p>Dabzee and ThirumaLi team up for a new immersive musical</p>
                                </div>
                            </div>
                        </div>

                        <div class="group-direction ms-3">
                            <button class="btn btn-outline-primary btn-direction">Get Direction</button>
                        </div>
                    </div>

                    <div class="card-body mt-3 ms-3">
                        <div class="card-info">
                            <span class="color-title">More Information</span>
                            <span class="line-title"></span>
                        </div>
                        <strong><h5 class="card-title mt-4">About Event</h5></strong>
                        <div class="group-information mt-4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, inventore. Ipsum cum suscipit, eligendi similique, obcaecati adipisci ratione commodi cumque necessitatibus quaerat error incidunt voluptate facere tenetur assumenda quam dolorum.</p> <br>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem hic facilis suscipit aliquam exercitationem molestias officia consectetur maxime, deserunt laboriosam iste corrupti nisi voluptates aliquid illum labore tempora velit modi? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem hic facilis suscipit aliquam exercitationem molestias officia consectetur maxime, deserunt laboriosam iste corrupti nisi voluptates aliquid illum labore tempora velit modi?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mb-4">
                    <div class="card-info purchase mb-4">
                        <h3>Get Ticket</h3>
                        <span class="line-title"></span>
                    </div>
                    <div class="card-body">
                        <div class="form-group d-flex align-items-center">
                            <span class="label-purchase">Date:</span>
                            <input type="text" class="form-control" disabled value="Fri, 25 2022">
                        </div>
                        <div class="form-group d-flex align-items-center mt-3">
                            <span class="label-purchase">Time:</span>
                            <input type="text" class="form-control" disabled value="06.00 WIB">
                        </div>
                        <div class="txt-ticket d-flex align-items-center mt-4 mb-2">
                            <p>Tickets: </p>
                            <div class="btn-ticket">
                                <button class="quantity-button" id="decrement-button" >
                                    <i class="ti ti-minus"></i>
                                </button>
                                <span id="ticket-quantity">1</span>
                                <button class="quantity-button" id="increment-button">
                                    <i class="ti ti-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="personal-data mt-4">
                            <div class="title">
                                <h6 class="fw-bolder color-primary">Fill Your Personal Data</h6>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <i class="ti ti-mail label-purchase"></i>
                                <input type="text" class="form-control"  value="email">
                            </div>
                            <div class="form-group d-flex align-items-center mt-3">
                                <i class="ti ti-mail label-purchase"></i>
                                <input type="text" class="form-control"  value="Confirm Email">
                            </div>
                        </div>
                        <div class="grand-total mt-4 mb-2">
                            <p class="m-0">Total Price</p>
                            <div class="price">
                                <p>Rp.20.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="group-ticket p-4">
                        <button class="btn btn-primary btn-lg btn-ticket">Get Ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event header-section container">
        <div class="d-flex justify-content-between">
            <h3 class="header-name">Other Event You May Like</h3>
            <span class="color-primary cursor-pointer">See All</span>
        </div>
        <div class="row mt-4">
            <div class="card-event col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="card me-4 mb-4 cursor-pointer" style="width: 20rem;">
                    <img src="https://www.engagifii.com/hubfs/Imported_Blog_Media/unnamed-1.jpg" class="card-img-top" alt="...">
                    <div class="card-time">
                        <div class="time">
                            <i class="ti ti-calendar"></i>
                            <span>Tue, Oct 21</span>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                      <span class="card-category color-secondary ">CONFERENCE</span>
                      <strong><h5 class="card-title mt-2">Revolusi Bisnis Berkelanjutan: Menggabungkan Profit dan Planet</h5></strong>
                      <div class="group-information mt-4">
                        <div class="location fs-15 mt-3">
                            <i class="ti ti-location-pin me-2"></i>
                            <span>Jakarta</span>
                        </div>
                        <div class="ticket mt-2 fs-15 mt-3">
                            <i class="ti ti-ticket me-2"></i>
                            <span class="color-primary">Free</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-event col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="card me-4 mb-4 cursor-pointer" style="width: 20rem;">
                    <img src="https://www.engagifii.com/hubfs/Imported_Blog_Media/unnamed-1.jpg" class="card-img-top" alt="...">
                    <div class="card-time">
                        <div class="time">
                            <i class="ti ti-calendar"></i>
                            <span>Tue, Oct 21</span>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                      <span class="card-category color-secondary ">CONFERENCE</span>
                      <strong><h5 class="card-title mt-2">Revolusi Bisnis Berkelanjutan: Menggabungkan Profit dan Planet</h5></strong>
                      <div class="group-information mt-4">
                        <div class="location fs-15 mt-3">
                            <i class="ti ti-location-pin me-2"></i>
                            <span>Jakarta</span>
                        </div>
                        <div class="ticket mt-2 fs-15 mt-3">
                            <i class="ti ti-ticket me-2"></i>
                            <span class="color-primary">Free</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-event col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="card me-4 mb-4 cursor-pointer" style="width: 20rem;">
                    <img src="https://www.engagifii.com/hubfs/Imported_Blog_Media/unnamed-1.jpg" class="card-img-top" alt="...">
                    <div class="card-time">
                        <div class="time">
                            <i class="ti ti-calendar"></i>
                            <span>Tue, Oct 21</span>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                      <span class="card-category color-secondary ">CONFERENCE</span>
                      <strong><h5 class="card-title mt-2">Revolusi Bisnis Berkelanjutan: Menggabungkan Profit dan Planet</h5></strong>
                      <div class="group-information mt-4">
                        <div class="location fs-15 mt-3">
                            <i class="ti ti-location-pin me-2"></i>
                            <span>Jakarta</span>
                        </div>
                        <div class="ticket mt-2 fs-15 mt-3">
                            <i class="ti ti-ticket me-2"></i>
                            <span class="color-primary">Free</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-event col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="card me-4 mb-4 cursor-pointer" style="width: 20rem;">
                    <img src="https://www.engagifii.com/hubfs/Imported_Blog_Media/unnamed-1.jpg" class="card-img-top" alt="...">
                    <div class="card-time">
                        <div class="time">
                            <i class="ti ti-calendar"></i>
                            <span>Tue, Oct 21</span>
                        </div>
                    </div>
                    <div class="card-body mt-3">
                      <span class="card-category color-secondary ">CONFERENCE</span>
                      <strong><h5 class="card-title mt-2">Revolusi Bisnis Berkelanjutan: Menggabungkan Profit dan Planet</h5></strong>
                      <div class="group-information mt-4">
                        <div class="location fs-15 mt-3">
                            <i class="ti ti-location-pin me-2"></i>
                            <span>Jakarta</span>
                        </div>
                        <div class="ticket mt-2 fs-15 mt-3">
                            <i class="ti ti-ticket me-2"></i>
                            <span class="color-primary">Free</span>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    const decrementButton = document.getElementById('decrement-button');
    const incrementButton = document.getElementById('increment-button');
    const ticketQuantity = document.getElementById('ticket-quantity');

    let quantity = 1;

    decrementButton.addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            ticketQuantity.textContent = quantity;
        }
    });

    incrementButton.addEventListener('click', () => {
        quantity++;
        ticketQuantity.textContent = quantity;
    });
</script>

@endsection
