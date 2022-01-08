@extends('master')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" class="detail-img mt-5" alt="">
        </div>
        <div class="col-sm-6">
            <p>&nbsp;</p>
            <a href="/">Go back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: ${{$product['price']}}</h3>
            <h4>Description: {{$product['description']}}</h4>
            <h5>Category: {{$product['category']}}</h5>
            <br>
            <button class="btn btn-primary">Add to cart</button>
            <button class="btn btn-success">Buy now</button>
        </div>
    </div>
</div>
@endsection