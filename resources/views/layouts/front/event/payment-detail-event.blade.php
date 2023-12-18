@extends('layouts.app-front')

@section('content')
<div class="container">
    <div class="col-md-12 p-3 d-flex justify-content-center">
        <div class="card card-payment mt-4 p-4">
            <div class="d-flex justify-content-center">
                <img src="{{asset('image/success.png')}}" width="300">
            </div>
            <div class="title text-center">
                <h3 class="fw-medium">Congrast!!</h3>
                <p>Your payment has been received! Please check your email to see the order code.</p>
                <div class="title">
                    <h5 class="fw-medium">No.Transaction</h5>
                    <p class="fw-bolder">{{$invoiceDetail->trans_code}}</p>
                </div>
                <strong><p>Thank you</p></strong>
            </div>

            <div class="check-trans text-center color-primary text-decoration-underline fw-bold">
                <a href="{{route('transaction')}}" class=" w-100 color-primary"> Check Transaction</a>
            </div>
        </div>
    </div>
</div>

@endsection
