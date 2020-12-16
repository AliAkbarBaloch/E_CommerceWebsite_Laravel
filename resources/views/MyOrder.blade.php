@extends('master');
@section('content');

<div class="container-fluid">
  <h1>My Orders</h1>
  <div class="row justify-content-center">
          @foreach ($orders as $item)            
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card shadow">
              <div class="inner">
          <a href="detailformyorder/{{ $item->id }}">
            
             <img class="card-img-top " src="{{ $item->gallery }}" alt=""></a>
             <div class="card-body text-center">
              <h2 class="card-title">{{ $item->name }}</h2>
              <span><p class="card-text"><b>Delivery Status :</b> {{ $item->status }}</p></span>
              <span><p class="card-text"><b>Address :</b> {{ $item->address }}</p></span>
              <span><p class="card-text"><b>Payment Status : </b>{{ $item->payment_status }}</p></span>
              <span><p class="card-text"><b>Payment Method : </b>{{ $item->payment_method }}</p></span>
              <a href="/cancelorder/{{$item->id}}" class="btn btn-success">Cancel Order</a>
            </div>
        </div> 
      </div>
      </div>           
        @endforeach
</div>
</div>
@endsection

