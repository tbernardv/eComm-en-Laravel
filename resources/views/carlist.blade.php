@extends('master')
@section('content')
<div class="container custom-product mt-5">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper mt-5 pt-3">
                <h4 class="">Result for Products</h4>
                <a href="ordernow" class="btn btn-success">Order now</a>
                @foreach($products as $item)
                    <div class="row searched-item mt-4 car-list-divider">
                        <div class="col-sm-4">
                            <img class="trending-image" src="{{$item->gallery}}" alt="">
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecartitem{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                        </div>
                    </div>
                @endforeach
                <a href="ordernow" class="btn btn-success">Order now</a>
            </div>
        </div>
    </div><!-- end row -->
    
</div>
@endsection