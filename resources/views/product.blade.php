@extends('master');
@section('content');
    
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="carousel-item {{ $item['id']==1?'active':'' }}">
                <a href="detail/{{ $item['id'] }}">
                    <img class="slider-image d-block w-100" src="{{ $item['gallery'] }}" alt="{{ $item['id'] }}">
                    <div class="carousel-caption slider-text">
                    <h5>{{ $item['name'] }}</h5>
                    <p>{{ $item['description'] }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

  <div class="mt-5">
 <h1> Trending Product</h1>
 <div class="row justify-content-center mt-1">
         @foreach ($products as $item)
         <div class="col-md-3 col-sm-6 col-xs-12 mt-1">
           <div class="card shadow">
             <div class="inner">
              <a href="detail/{{ $item['id'] }}">
              <img class="card-img-top " src="{{ $item['gallery'] }}" alt=""></a>
               <div class="card-body text-center">
                <h5 class="card-title">{{ $item['name'] }}</h5>
               </div>
             </div>
           </div>
         </div>
         @endforeach
 </div>  
</div>      
</div>
@endsection

