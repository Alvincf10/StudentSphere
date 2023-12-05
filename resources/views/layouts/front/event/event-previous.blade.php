@extends('layouts.app-front')

@section('content')

<div class="container mt-5">    

    <div class="text-icon text-start mt-3">
        <span class="font-weight-bold fs-4"> All previous Event</span>
    </div>
    
    <div class="row all-event-container">
        <div class="list-event col-md-12 col-12 ">
            
                @foreach ($previousEvent as $programs )
                <a href="{{route('event.detail',['id'=>$programs->id])}}">
                    <div class="content-container mb-4">
                    <div class="box-shadow row max-height">
                        
                            <div class="col-6 p-0 bg-white img-all-event">
                            <div class="image-container">
                                
                            <img class="img-fluid img-all-event banner-sold" src="{{asset('storage\events/'.$programs->banner)}}" class="card-img img-all-event" alt="...">
                            <div class="image-sold">SOLD</div>
                            </div>
                            
                        </div>
                        <div class="col-6 p-0">
                        <div class="banner-body">
                            <div class="banner-time">
                            <div class="time" >
                                <i class="ti ti-calendar"></i>
                                <span style="font-size: 25px">{{$programs->date_program}}</span>
                            </div>
                            </div>
                            <div class="detail p-4">
                            <span class="card-category color-secondary text-uppercase">{{$programs->category->category_name}}</span>
                            <strong><h5 class="card-title mt-2" style="font-size: 25px" >{{$programs->program_name}}</h5></strong>
                                <div class="banner-group-information mt-4">
                                <div class="location fs-15 mt-3">
                                    <i class="ti ti-location-pin me-2"></i>
                                    <span style="font-size: 25px">{{$programs->location->location_name}}</span>
                                </div>
                                <div class="banner-ticket mt-2 fs-15 mt-3">
                                    <i class="ti ti-ticket me-2"></i>
                                    <span class="color-primary" style="font-size: 25px">{{$programs->price == 0 ? 'Free' : 'Rp.' . $programs->price}}</span>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </a>
                @endforeach
            
        </div>
    </div>
</div>
@endsection


