@extends('layouts.app-front')

@section('content')
    <div class="container mt-5">
        <div class="head-banner d-flex justify-content-center align-items-center text-align-center flex-column">
            <h3 class="text-banner">Hello, Wanna hear About Us?</h3>
            <p class="text-center text-weight">
                We were founded by students, and we understand the needs and desires of the student community. Our platform is 
                designed with students in mind, ensuring a user-friendly experience and catering to the unique preferences of our 
                target audience.
            <p>
        </div>

        <div class="card">
            <div class="card-body card-about p-5">
                <div class="row">
                    <div class="col-8">
                        <p class="text-weight"">
                            Welcome to our platform! We are the ultimate destination for enthusiastic students seeking tickets to a 
                            variety of events and shows. Founded by students, for students, we are committed to providing easy and affordable 
                            access to a wide range of event tickets across campus. We understand that students crave unforgettable experiences without 
                            breaking the bank, and that's where we come in. From music concerts and theater performances to sports games and conferences, 
                            we have tickets for every interest and budget. Join our student community and be part of our journey to ignite the spirit of
                            events across campuses. Let's create cherished memories together and be part of a valuable experience during your college years.
                            <br><br>
                            We're ready to take you on a journey to an array of unforgettable experiences, so you can feel the magic of each event. 
                            Join us and start searching for tickets to exciting and inspiring events.
                        </p>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset('image/aboutUs-Banner.png')}}" alt="">
                    </div>
                </div>
            </div>
          </div>

    </div>
@endsection
