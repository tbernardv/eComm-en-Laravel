@extends('master')
@section('content')
<div class="container custom-product mt-5">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper mt-5 pt-3">
                <h4 class="">My orders</h4>
                @foreach($orders as $item)
                    <div class="row searched-item mt-4 car-list-divider">
                        <div class="col-sm-4">
                            <img class="trending-image" src="{{$item->gallery}}" alt="">
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h3>Name: {{$item->name}}</h3>
                                <h5>Delivery status: {{$item->status}}</h5>
                                <h5>Address: {{$item->address}}</h5>
                                <h5>Payment status: {{$item->payment_status}}</h5>
                                <h5>Payment method: {{$item->payment_method}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div><!-- end row -->
    
</div>
@endsection