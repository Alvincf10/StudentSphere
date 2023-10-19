@extends('layouts.app-front')

@section('content')

    <section class="info-event container">
        <div class="row mt-4">
            <div class="col-md-7">
                <div class="card mb-4">
                    <div class="card-map mt-4">
                        <div class="map">
                            <div id='map' style='width: 100%; height: 300px; border-radius:10px' data-api-key="{{ config('app.MAPBOX_TOKEN') }}"></div>
                            <div class="row mt-3">
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class="map-details ms-4">
                                        <strong><h1 class="card-title fs-">{{$programDetail->program_name}}</h1></strong><br>
                                        <div class="grup-map mb-2">
                                            <p class="mb-0">Organizer: <strong>{{$programDetail->organizer->name_organizer}}</strong></p>
                                            <p>Kouta: <strong> {{$programDetail->qouta}}</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 d-flex align-items-center">
                                    <div class="group-direction ms-4">
                                        <a href="https://www.google.com/maps/dir/{{$programDetail->location->latitude}},{{$programDetail->location->longitude}}" target="_blank" class="btn btn-outline-primary btn-direction">Get Direction</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body mt-3 ms-3">
                        <div class="card-info">
                            <span class="color-title">More Information</span>
                            <span class="line-title"></span>
                        </div>
                        <strong><h5 class="card-title mt-4">About Event</h5></strong>
                        <div class="group-information mt-4 me-3">
                            <p class="text-justify">{{$programDetail->description}}</p> <br>
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
                            <input type="text" class="form-control" disabled value="{{date('d-M-Y',strtotime($programDetail->date_program))}}">
                        </div>
                        <div class="form-group d-flex align-items-center mt-3">
                            <span class="label-purchase">Time:</span>
                            <input type="text" class="form-control" disabled value="{{date('h:i A', strtotime($programDetail->date_program)) }}">
                        </div>
                        <div class="txt-ticket d-flex align-items-center justify-content-end mt-4">
                            <p>Tickets: </p>
                            <div class="btn-ticket d-flex align-items-center justify-content-end">
                                <button class="quantity-button" id="decrement-button" >
                                    <i class="ti ti-minus"></i>
                                </button>
                                <span id="ticket-quantity">1</span>
                                <button class="quantity-button" id="increment-button">
                                    <i class="ti ti-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="detail-price mb-2">
                            <p id="ticket-price">{{$programDetail->price == 0 ? 'Free' : currency_IDR($programDetail->price) . '/ Ticket'}} </p>
                        </div>

                        <div class="personal-data mt-4">
                            <div class="title">
                                <p class="fw-bolder">Fill Your Personal Data</p>
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <i class="ti ti-mail label-purchase"></i>
                                <input type="text" class="form-control"  value="email">
                            </div>
                            <div class="form-group d-flex align-items-center mt-3">
                                <i class="ti ti-mail label-purchase"></i>
                                <input type="text" class="form-control"  value="Confirm Email">
                            </div>
                            <div class="grand-total mt-4 mb-2">
                                <p class="m-0">Total Price</p>
                                <div class="price" id="total-price">
                                    <p>Free</p>
                                </div>
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

<script>
    //maps
    const mapApiKey = '{{$mapbox}}'

    console.log(mapApiKey, 'fsdf')
    mapboxgl.accessToken = mapApiKey;
    document.addEventListener('DOMContentLoaded', function () {
        const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [{{$programDetail->location->longitude}}, {{$programDetail->location->latitude}}],
        zoom: 13 // Level zoom
    });
    new mapboxgl.Marker({ color: 'red' })
        .setLngLat([{{$programDetail->location->longitude}}, {{$programDetail->location->latitude}}])
        .addTo(map);
    })


    const decrementButton = document.getElementById('decrement-button');
    const incrementButton = document.getElementById('increment-button');
    const ticketQuantity = document.getElementById('ticket-quantity');
    const totalPrice = document.getElementById('total-price');
    const ticketPrice = {{ $programDetail->price }}



    let quantity = 1;

    decrementButton.addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            ticketQuantity.textContent = quantity;
            updateTotalPrice();
        }
    });

    incrementButton.addEventListener('click', () => {
        quantity++;
        ticketQuantity.textContent = quantity;
        updateTotalPrice();
    });

    function updateTotalPrice() {
    const total = quantity * ticketPrice;
    totalPrice.textContent = `Rp.${total.toLocaleString()}`;
    const isFree = (quantity > 1);
    let price = ticketPrice * quantity;

    if (isFree) {
        price = 0;
    }

    ticketPrice.textContent = `Rp. ${ price.toLocaleString()}`;
    }
    updateTotalPrice();




</script>




@endsection
