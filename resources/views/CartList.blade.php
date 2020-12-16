<?php 
  $check=0;
?>
@extends('master');
@section('content');
    

<div class="container-fluid">
 <h1> Result of Product</h1>
  <div class="row justify-content-center">
          @foreach ($products as $item)
            <?php $check=$item->id ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card shadow">
              <div class="inner">
               <a href="detail/{{ $item->id }}">
               <img class="card-img-top " src="{{ $item->gallery }}" alt=""></a>
                <div class="card-body text-center">
                 <span><h5 class="card-title">{{ $item->name }}</h5></span>
                 <span><p class="card-text">{{ $item->description }}</p></span>
                <span><a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a></span>
               </div>
              </div> 
           </div>
          </div>           
        @endforeach  
  </div>
  @if ($check!=0)
    <a href="ordernow" class="btn btn-success">Order Now</a>
  @endif
</div>
@endsection

