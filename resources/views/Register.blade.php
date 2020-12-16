@extends('master');
@section('content');
    
<div class="container h-80">
    <div class="row h-50 justify-content-center align-items-center">
        <div class="col-sm-4">

            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="User Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary btn-customized">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection