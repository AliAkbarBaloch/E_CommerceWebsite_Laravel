<?php
 use App\Http\Controllers\ProductController;
 $total=0;
 if(Session::has('user')){
  $total=ProductController::CartItem();
 }

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-0">
  <div class="container-fluid ">
    <a class="navbar-brand" href="/">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/myorder">My Orders</a>
        </li>
        <form action="/search" class="form-inline my-2 my-lg-0">
          <input class="form-control search-box mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/cartlist">Cart({{ $total }})</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/addproduct">Add Product</a>
        </li>
        @if (Session::has('user'))
          <li class="dropdown nav-item active">
            <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">{{ Session::get('user')['name'] }}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/logout" class="nav-link active bg-dark">Logout</a></li>
              </ul>
          </li>
        @else
        <li class="nav-item active">
        <a class="nav-link" href="/login">Login</a></li>
        <li class="nav-item active">
        <a class="nav-link" href="/register">Register</a></li>
            
        @endif
        </ul>
    </div>
  </div>
  </nav>