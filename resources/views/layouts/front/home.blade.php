@extends('layouts.app-front')

@section('content')

<div class="slider_area slider_bg_1">
    <div class="slider_text">
        <div class="container">
            <div class="position_relv">
                <h1 class="opcity_text d-none d-lg-block">EVENTS</h1>
                <div class="row">
                    <div class="col-xl-9">
                        <div class="title_text">
                            <h3>The Biggest <br>
                                Event Campus <br>
                                & Public</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="speakers_area">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-xl-12">
                <div class="serction_title_large mb-95">
                    <h3>
                        New Event
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-banner text-center">
                    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/webinar-banner-template-design-3b874d0c3a80de3fba9ad761596d7911_screen.jpg?ts=1631175223" width="80%">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="header-title">Webinar Self Development</h2>
                <strong><span>Organizer By </strong><span class="organizer">Binus</span></span>
                <div class="group-detail-info mt-3">
                    <div class="group-info d-flex ">
                        <i class="ti ti-calendar-event mr-3 icon color-primary"></i><span class="description-event">21 Sep  2023</span><br>
                    </div>
                    <div class="group-info d-flex mt-3">
                        <i class="ti ti-clock-hour-12 mr-3 color-primary icon"></i><span class="description-event">09.00 - 10.00</span><br>
                    </div>
                    <div class="group-info d-flex mt-3">
                        <i class="ti ti-map-pin mr-3 color-primary icon"></i><span class="description-event">Jln. anggrek no 12 Jakarta selatan</span>
                    </div>
                </div>
                <div class="d-flex mt-4">
                    <a href="{{route('event.detail')}}" class="btn btn-detail mr-3">Event Details</a>
                    <a href="" class="btn btn-book">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
