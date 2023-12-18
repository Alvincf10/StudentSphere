@extends('layouts.app-front')

@section('content')
    <div class="col-md-12 p-3 d-flex justify-content-center">
        <div class="card card-payment mt-4 p-4">
            <strong><h1 class="card-title fs- mt-2 ms-2">Total Pembayaran</h1></strong><br>
            <strong><h1 class="card-title fs- mb-4 ms-2">{{$transactionCustomer->total_amount == 0 ? 'Free' : currency_IDR($transactionCustomer->total_amount)}}</h1></strong>
            <div class="group-payment">
                <strong><h1 class="card-title fs-6 mt-4 ms-2">Pilih Pembayaran</h1></strong>
                <div class="img-container d-flex">
                    <input type="radio">
                    <img src="https://buatlogoonline.com/wp-content/uploads/2022/10/Logo-BCA-PNG-1536x1152.png" height="100%">
                </div>
            </div>

            <div class="group-payment">
                <form action="" method="POST">
                    @csrf
                    {{-- <button type="submit" class="btn btn-primary w-100"><a href="{{route('event.purchase.changeStatus')}}" class="text-white"> Payment</a></button> --}}
                    <button type="submit" class="btn btn-primary w-100"><a href="{{route('event.purchase.changeStatus',['idTransac'=>$transactionCustomer->id])}}" class="text-white"> Payment</a></button>
                </form>
            </div>
        </div>
    </div>


@endsection
