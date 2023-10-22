@extends('layouts.app-front')

@section('content')

    <div class="col-md-12 p-3 d-flex justify-content-center">
        <div class="card card-payment mt-4 p-4">
            <strong><h1 class="card-title fs- mt-2 ms-2">Total Pembayaran</h1></strong><br>
            <strong><h1 class="card-title fs- mb-4 ms-2">Rp. 60.000,00</h1></strong>
            <div class="group-payment">
                <strong><h1 class="card-title fs-6 mt-4 ms-2">Pilih Pembayaran</h1></strong>
                <div class="img-container d-flex">
                    <input type="radio">
                    <img src="https://buatlogoonline.com/wp-content/uploads/2022/10/Logo-BCA-PNG-1536x1152.png" height="100%">
                </div>
            </div>

            <div class="group-payment">
                <a href="{{route('event.paymentDetail',['id'=>$eventTicket->id])}}" class="btn btn-primary w-100"> Payment</a>
            </div>
        </div>
    </div>


@endsection
