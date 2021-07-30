@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <passport-token></passport-token>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List of Stationeries') }}</div>

                <div class="card-body">
                <table class="table"> 
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stationeries as $stationery)
        <tr>
            <td>{{$stationery->name}}</td>
            <td>{{$stationery->type}}</td>
            <td>{{$stationery->price}}</td>
            <td><button onclick="location.href='{{route('purchase:store',$stationery->id)}}'">Buy</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List of Purchase') }}</div>

                <div class="card-body">
                <table class="table"> 
    <thead>
        <tr>
            <th>Stationery</th>
            <th>Price</th>
            <th>Payment Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($purchases as $purchase)
        <tr>
            <td>{{$purchase->stationery_id}}</td>
            <td>{{$purchase['real_amount']}}</td>
            <td>
                @if($purchase['payment_status'] == 0)  
                    Not Paid
                @else
                    Paid
                @endif
            </td>
            <td>
                @if($purchase['payment_status'] == 0)
                    <a href="{{$purchase['payment_link']}}" class="btn btn-success">Pay</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
