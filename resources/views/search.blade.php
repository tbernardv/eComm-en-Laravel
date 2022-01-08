@extends('master')
@section('content')
<div class="container custom-product mt-5">
    <div class="row">
        <div class="col-sm-4">
            <div class="mt-5 pt-3">
                <a href="#">Filter</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper mt-5 pt-3">
                <h4 class="">Result for Products</h4>
                @foreach($products as $item)
                    <div class="searched-item mt-4">
                        <a href="detail/{{$item['id']}}">
                            <img class="trending-image" src="{{$item['gallery']}}" alt="">
                            <div class="">
                                <h3>{{$item['name']}}</h3>
                                <h5>{{$item['description']}}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div><!-- end row -->
    
</div>
@endsection