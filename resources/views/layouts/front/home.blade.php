@extends('layouts.app-front')

@section('content')

<div class="mt-5">
    <section class="container-fluid">
        <div class="ds-banner">
            <img class="img-fluid" src="https://static.wixstatic.com/media/fcd5ea_2180781ee3f549b683dc49ed7c182047~mv2.jpeg/v1/fill/w_640,h_360,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/fcd5ea_2180781ee3f549b683dc49ed7c182047~mv2.jpeg" alt="" srcset="">
        </div>
    </section>

    <div class="container">
        <section class="category header-section">
            <h3 class="header-name">Category</h3>
            <div class="d-flex flex-wrap align-items-center  group-category mt-5">
                <div class="group-icon me-5 mb-4 mb-4">
                    <div class="body-icon">
                       <img class="img-fluid" src="{{asset('image/toga.png')}}" alt="" srcset="">
                    </div>
                    <div class="text-icon text-center mt-3">
                        <span>Conference</span>
                    </div>
                </div>
                <div class="group-icon me-5 mb-4">
                    <div class="body-icon">
                       <img class="img-fluid" src="{{asset('image/wrench.png')}}" alt="" srcset="">
                    </div>
                    <div class="text-icon text-center mt-3">
                        <span>Workshop</span>
                    </div>
                </div>
                <div class="group-icon me-5 mb-4">
                    <div class="body-icon">
                       <img class="img-fluid" src="{{asset('image/sport.png')}}" alt="" srcset="">
                    </div>
                    <div class="text-icon text-center mt-3">
                        <span>Sport</span>
                    </div>
                </div>
                <div class="group-icon me-5 mb-4">
                    <div class="body-icon">
                       <img class="img-fluid" src="{{asset('image/public.png')}}" alt="" srcset="">
                    </div>
                    <div class="text-icon text-center mt-3">
                        <span>Social</span>
                    </div>
                </div>
                <div class="group-icon me-5 mb-4">
                    <div class="body-icon">
                       <img class="img-fluid" src="{{asset('image/art.png')}}" alt="" srcset="">
                    </div>
                    <div class="text-icon text-center mt-3">
                        <span>Art</span>
                    </div>
                </div>
                <div class="group-icon me-5 mb-4">
                    <div class="body-icon">
                       <img class="img-fluid" src="{{asset('image/fashion.png')}}" alt="" srcset="">
                    </div>
                    <div class="text-icon text-center mt-3">
                        <span>Fashion</span>
                    </div>
                </div>
                <div class="group-icon me-5 mb-4">
                    <div class="body-icon">
                       <img class="img-fluid" src="{{asset('image/Game.png')}}" alt="" srcset="">
                    </div>
                    <div class="text-icon text-center mt-3">
                        <span>Game</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="event header-section">
            <div class="d-flex justify-content-between">
                <h3 class="header-name">Event</h3>
                <span class="color-primary cursor-pointer">See All</span>
            </div>
            <div class="row mt-3">
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
        <section class="banner-event header-section">
            <div class="ds-banner-event">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="content-event">
                            <div class="tagline-group">
                                <h3 class="tagline">Boost Your Event's Impact</h3>
                                <h5 class="mt-4 mb-4">Unleash The Full Potential of your Gatherings</h5>
                            </div>
                            <div class="btn-all">
                                <a class="btn btn-primary">See All Event</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-event">
                            <img class="img-fluid" src="{{asset('image/background2.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="event header-section">
            <div class="d-flex justify-content-between">
                <h3 class="header-name">Previous Event</h3>
                <span class="color-primary cursor-pointer">See All</span>
            </div>
            <div class="row mt-4">
                <div class="card-event col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="card card-pervious me-4 mb-4" style="width: 20rem;">
                        <div class="image-container" style="position: relative;">
                            <img src="https://www.engagifii.com/hubfs/Imported_Blog_Media/unnamed-1.jpg" class="card-img-top" alt="...">
                            <div class="card-time">
                                <div class="time">
                                    <i class="ti ti-calendar"></i>
                                    <span>Tue, Oct 21</span>
                                </div>
                            </div>
                        </div>
                        <div class="image-text">SOLD</div>
                        <div class="card-body mt-3">
                            <span class="card-category color-secondary">CONFERENCE</span>
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
                    <div class="card card-pervious me-4 mb-4" style="width: 20rem;">
                        <div class="image-container" style="position: relative;">
                            <img src="https://www.engagifii.com/hubfs/Imported_Blog_Media/unnamed-1.jpg" class="card-img-top" alt="...">
                            <div class="card-time">
                                <div class="time">
                                    <i class="ti ti-calendar"></i>
                                    <span>Tue, Oct 21</span>
                                </div>
                            </div>
                        </div>
                        <div class="image-text">SOLD</div>
                        <div class="card-body mt-3">
                            <span class="card-category color-secondary">CONFERENCE</span>
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
                    <div class="card card-pervious me-4 mb-4" style="width: 20rem;">
                        <div class="image-container" style="position: relative;">
                            <img src="https://www.engagifii.com/hubfs/Imported_Blog_Media/unnamed-1.jpg" class="card-img-top" alt="...">
                            <div class="card-time">
                                <div class="time">
                                    <i class="ti ti-calendar"></i>
                                    <span>Tue, Oct 21</span>
                                </div>
                            </div>
                        </div>
                        <div class="image-text">SOLD</div>
                        <div class="card-body mt-3">
                            <span class="card-category color-secondary">CONFERENCE</span>
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
                    <div class="card card-pervious me-4 mb-4" style="width: 20rem;">
                        <div class="image-container" style="position: relative;">
                            <img src="https://www.engagifii.com/hubfs/Imported_Blog_Media/unnamed-1.jpg" class="card-img-top" alt="...">
                            <div class="card-time">
                                <div class="time">
                                    <i class="ti ti-calendar"></i>
                                    <span>Tue, Oct 21</span>
                                </div>
                            </div>
                        </div>
                        <div class="image-text">SOLD</div>
                        <div class="card-body mt-3">
                            <span class="card-category color-secondary">CONFERENCE</span>
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
</div>
@endsection
