@extends('master');
@section('content');
    
<div class="container h-80">
    <div class="row h-50 justify-content-center align-items-center">
        <div class="col-sm-4">

            <form action="login" method="POST">
                <div class="form-group">
                  @csrf
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary btn-customized">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection