@extends('layouts.app-front')

@section('content')
<div class="container">
    <div class="col-md-12 p-3 d-flex justify-content-center">
        <div class="card">
            <div class="card-header p-3">
                <h5 class="color-primary text-center mb-3">Check Transaction Here</h5>
                <form action="{{route('checkTransaction')}}" method="POST">
                    @csrf
                    <div class="group-search d-flex">
                        <input type="text" class="form-control" name="trans_code">
                        <button class="btn btn-primary ms-2" type="submit"><i class="ti ti-search"></i></button>
                    </div>
                </form>
            </div>
            @if (isset($transaction))
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-borderless">
                            <thead>
                                <td class="fw-bolder p-3">{{date('d-M-Y',strtotime($transaction->transaction_date))}}</td>
                                <td class="fw-bolder p-3">{{$transaction->customer_email}}</td>
                                <td class="fw-bolder p-3">{{  ($transaction->payment_status == 0) ? 'Unpaid' : 'Paid'}}</td>
                                <td>
                                    <a href="" class="color-primary">Kirim Email</a>
                                </td>
                            </thead>
                        </table>
                    </div>
                </div>
            @else

            @endif
        </div>
    </div>
</div>
@endsection
