<!-- Incluyendo el master page en la pagina login: Quiere decir que la pagina login se puede incluir en el master page -->
@extends('master')
@section('content')
<div class="container mt-5 pd-3">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 pt-5">
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="txtusername" class="form-label">User name</label>
                    <input type="text" id="txtusername" name="txtusername" class="form-control" placeholder="User name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" id="txtemail" name="txtemail" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" id="txtpassword" name="txtpassword" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
@endsection