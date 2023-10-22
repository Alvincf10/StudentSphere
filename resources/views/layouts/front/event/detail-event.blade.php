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
                        <form action="{{route('event.createTicket',['id'=>$programDetail->id])}}" method="POST" onsubmit="return validateForm(this);">
                            @csrf
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
                                    <input type="text" class="form-control" name="email"  value="email">
                                </div>
                                <div class="form-group d-flex align-items-center mt-3">
                                    <i class="ti ti-mail label-purchase"></i>
                                    <input type="text" class="form-control" name="confirm_email"  value="Confirm Email">
                                </div>

                                <div class="form-group d-flex align-items-center mt-3">
                                    <input class="mr-2" type="checkbox" id="terms-checkbox">
                                    <label for="terms-checkbox" id="terms-label">I Agree to the <a href="#" class="color-primary term" id="show-terms-link">Terms and Conditions</a></label>
                                </div>

                                <div id="terms-popup" class="popup" style="display: none;">
                                    <div class="popup-content align-items-center">
                                        <div class="popup-header mb-2">
                                            <h3>Term and Conditionn</h3>
                                        </div>
                                        <div class="popup-body mt-4">
                                            <p>These terms and conditions (referred to as "Terms") are in place to regulate the purchase and utilization of event tickets through our website. By proceeding with a ticket reservation, you indicate your acceptance and agreement to abide by these Terms.
                                                When purchasing tickets through our website, please be aware that ticket availability is subject to confirmation. The price of the tickets listed on our website is the net price and does not include additional fees, taxes, or administrative charges, which may apply.
                                                Payment for tickets is required to be made in accordance with the payment instructions provided on our website. It is important to note that purchased tickets are generally non-refundable and non-cancellable, except under specific circumstances determined by the event organizer.
                                                The event organizer retains the right to make alterations to the event, such as changes in the date, time, location, or performers, without prior notice. In such cases, we will endeavor to inform you promptly about any changes that may affect your reservation.
                                                It is your responsibility to safeguard the tickets you have purchased. In the event of ticket loss, theft, or misuse, we cannot be held liable for any resulting losses.
                                                Your personal information provided during the ticket reservation process is governed by our Privacy Policy, and we assure you that your privacy will be respected.
                                                In addition to these general terms and conditions, specific events may have additional terms and conditions that are applicable. Such additional terms, if present, will be clearly outlined in the event description.
                                                We would like to emphasize that we are not responsible for any losses or injuries that may occur during the event. Attendees are expected to exercise due care and caution while participating in the event.
                                                Please be aware that these terms and conditions are subject to change without prior notice. We encourage you to periodically review the terms and conditions to stay informed about any updates.
                                                By using our website to reserve tickets, you indicate your agreement to comply with the aforementioned terms and conditions. We highly recommend that you carefully read and understand these terms and conditions before proceeding with ticket reservations.</p>
                                        </div>

                                        <button id="close-terms-popup">
                                            <i class="ti ti-close"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="grand-total mt-4 mb-2">
                                    <p class="m-0">Total Price</p>
                                    <div class="price" id="total-price">
                                        <p>Free</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-ticket p-4">
                                <button type="submit" id="get-ticket-button" class="btn btn-primary btn-lg btn-ticket" disabled><a class="text-white" href="{{ route('event.purchase',['id'=>$programDetail->id]) }}"> Get Ticket </a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    //maps
    const mapApiKey = '{{$mapbox}}'

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

    //term condition
    const termsCheckbox = document.getElementById('terms-checkbox');
    const getTicketButton = document.getElementById('get-ticket-button');

    termsCheckbox.addEventListener('change', function() {
        if (termsCheckbox.checked) {
            getTicketButton.removeAttribute('disabled');
        } else {
            getTicketButton.setAttribute('disabled', 'true');
        }
    });

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

    const showTermsLink = document.getElementById('show-terms-link');
    const termsPopup = document.getElementById('terms-popup');
    const closeTermsPopup = document.getElementById('close-terms-popup');

    showTermsLink.addEventListener('click', (event) => {
        event.preventDefault();
        termsPopup.style.display = 'block';
    });

    closeTermsPopup.addEventListener('click', () => {
        termsPopup.style.display = 'none';
    });

    termsPopup.addEventListener('click', (event) => {
        if (event.target === termsPopup) {
            termsPopup.style.display = 'none';
        }
    });

    function validateForm(form) {
            const emailInput = form.querySelector("input[name='email']");
            const confirmEmailInput = form.querySelector("input[name='confirm_email']");
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            const email = emailInput.value;
            const confirmEmail = confirmEmailInput.value;

            if (!email.match(emailPattern)) {
                alert("Email format is not valid");
                return false;
            }

            if (email !== confirmEmail) {
                alert("Email and Confirm Email do not match");
                return false;
            }

            if (!document.getElementById("terms-checkbox").checked) {
                alert("You must agree to the Terms and Conditions");
                return false;
            }

            return true;
        }

</script>

@endsection
