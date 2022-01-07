<!-- Incluyendo el master page en la pagina login: Quiere decir que la pagina login se puede incluir en el master page -->
@extends('master')

@section('content')
<div class="container mt-5 pd-3">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" id="txtemail" name="txtemail" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" id="txtpassword" name="txtpassword" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
@endsection