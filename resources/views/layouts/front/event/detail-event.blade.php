@extends('layouts.app-front')

@section('content')

<div class="container">
    <section class="container-fluid">
        <div class="ds-banner">
            <img class="img-fluid" src="https://img.freepik.com/free-vector/flat-design-business-workshop-twitch-banner_23-2149410630.jpg?w=1380&t=st=1697335639~exp=1697336239~hmac=47dc4d71b9b5634fbe75a03abc0a49d30fb8d3f4d0e24109ae343a97d396e159" alt="" srcset="">
        </div>
    </section>

    <section class="info-event">
        <div class="row mt-4">
            <div class="card-info d-flex">
                <div class="card me-4 mb-4" style="width: 45rem; display: flex;">
                    <div class="card-map mt-4" style="margin-left: 20px;">
                        <div class="map" style="display: flex;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.6262746699147!2d106.78878891571958!3d-6.226394285474659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f82f9ce6f0a5%3A0x6822a3d87a02d2d1!2sUniversity%20of%20Indonesia!5e0!3m2!1sen!2sid!4v1610977185972!5m2!1sen!2sid" width="35%" height="250" style="border:10; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>

                            <div class="map-details mb-2" style="flex: 1; margin-left: 20px; max-width: 300px;">
                                <strong><h1 class="card-title fs-">ThirumaLi-Dabzee Show With DJ Night</h1></strong><br>
                                <div class="grup-map mt-2 mb-2" style="margin-left: 10px; color: #7a7a7a;; ">
                                    <p>Hilit Business Park</p><br>
                                    <p>Dabzee and ThirumaLi team up for a new immersive musical</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="group-direction mt-2 mb-2">
                            <button class="btn btn-outline-primary btn-lg" style="font-size: 15px; padding: 12px 75px; font-weight: bold;">Get Direction</button>
                        </div>
                    </div>

                    <div class="card-body mt-3" style="margin-left: 10px;">
                        
                        <strong>
                            <h6 class="card-info mb-4" style="text-align: center; font-weight: bold; position: relative;">
                                <span style="text-decoration: none; color: #000;">More Information</span>
                                <span style="position: absolute; width: 50%; left: 25%; bottom: -10px; border-bottom: 2px solid #F2542E;"></span>
                            </h6>
                        </strong>
                        
                        <strong><h5 class="card-title mt-4">About Event</h5></strong>
                        <div class="group-information mt-4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, inventore. Ipsum cum suscipit, eligendi similique, obcaecati adipisci ratione commodi cumque necessitatibus quaerat error incidunt voluptate facere tenetur assumenda quam dolorum.</p> <br>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem hic facilis suscipit aliquam exercitationem molestias officia consectetur maxime, deserunt laboriosam iste corrupti nisi voluptates aliquid illum labore tempora velit modi? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem hic facilis suscipit aliquam exercitationem molestias officia consectetur maxime, deserunt laboriosam iste corrupti nisi voluptates aliquid illum labore tempora velit modi?</p>
                        </div>
                      <strong><h5 class="card-title mt-5">About The Organizer</h5></strong>
                      <div class="group-organizer mt-4 mb-4">
                        <button class="btn btn-outline-primary btn-lg" style="font-size: 15px; padding: 10px 50px; font-weight: bold;">Contact the Organizer</button>
                      </div>
                    </div>
                </div>

                <div class="card-get-ticket col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="card me-4 mb-4" style="width: 23rem;">
                        <strong>
                            <h6 class="card-info mt-4 mb-4" style="text-align: center; font-weight: bold; position: relative;">
                                <span style="text-decoration: none; color: #000;">Get Ticket</span>
                                <span style="position: absolute; width: 50%; left: 25%; bottom: -10px; border-bottom: 2px solid #e0e0e0;"></span>
                            </h6>
                        </strong>
                        
                        <div class="ticket-box mb-4">
                            <p>Date: </p>
                            <p class="date-flex" style="font-weight: bold; color:#000;">Friday, 27 OCT</p>
                        </div>

                        <div class="ticket-box mb-4">
                            <p>Time: </p>
                            <p class="date-flex" style="font-weight: bold; color:#000;">6:00 PM</p>
                        </div>

                        <div class="txt-ticket mt-2 mb-2">
                            <p>Tickets: </p>
                            <div class="btn-ticket" style="margin-left: 145px;">
                                <button class="quantity-button" id="decrement-button" style="background-color: #fef3ef; color: #f7a28f;">
                                    <i class="ti ti-minus"></i>
                                </button>
                                <span id="ticket-quantity">1</span>
                                <button class="quantity-button" id="increment-button" style="background-color: #fce7df; color: #f46d4b;">
                                    <i class="ti ti-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="txt-ticket mt-2 mb-2">
                            <p>Total Price: </p>
                            <div class="price" style="margin-left: 220px; color:#f46647;">
                                <p>20K</p>
                            </div>
                        </div>

                        <div class="group-ticket mt-4 mb-4" style="display: flex; justify-content: center; align-items: center;">
                            <button class="btn btn-primary btn-lg" style="font-size: 15px; padding: 10px 120px">Get Ticket</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event header-section">
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
</div>

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
