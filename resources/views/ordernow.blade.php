@extends('master')
@section('content')
<div class="container custom-product mt-5">
    <div class="row">
        <div class="col-sm-10 pt-5">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                    </tr>
                    <tr>
                        <td>Total amount</td>
                        <td>$ {{$total + 10}}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="mb-3">
                        <textarea name="txtareaaddress" id="txtareaaddress" cols="30" rows="5" class="form-control" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="rpaymentmethod" class="form-label"><b>Payment method</b></label>
                        <p><input type="radio" name="paymentmethod" value="cash"> <span>&nbsp;Online payment</span></p>
                        <p><input type="radio" name="paymentmethod" value="cash"> <span>&nbsp;EMI payment</span></p>
                        <p><input type="radio" name="paymentmethod" value="cash"> <span>&nbsp;Delivery payment</span></p>
                    </div>
                    <button type="submit" class="btn btn-primary">Order now</button>
                </form>
            </div>
        </div><!-- end col sm 10  -->
    </div><!-- end row -->
    
</div>
@endsection