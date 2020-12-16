@extends('master');
@section('content');
    
<div class="container-fluid">
  <h1> Result of Product</h1>
   <div class="row justify-content-center">
           @foreach ($products as $item)
           <div class="col-md-3 col-sm-6 col-xs-12">
             <div class="card shadow">
               <div class="inner">
                <a href="detail/{{ $item['id'] }}">
                <img class="card-img-top " src="{{ $item['gallery'] }}" alt=""></a>
                 <div class="card-body text-center">
                  <h5 class="card-title">{{ $item['name'] }}</h5>
                  <p class="card-text">{{ $item['description'] }}</p>
                  <a href="detail/{{ $item['id'] }}" class="btn btn-success">Click For Detail</a>
                </div>
               </div> 
            </div>
           </div>           
         @endforeach
   </div>
 </div>
@endsection

