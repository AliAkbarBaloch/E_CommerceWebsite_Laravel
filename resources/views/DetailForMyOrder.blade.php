@extends('master');
@section('content');
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="card shadow">
                    <div class="inner">
                <img class="card-img-top" src="{{ $products['gallery'] }}" alt="">
            </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="/">Go Back</a>
                <div class="card-body text-center">
                <h2 class="card-title">{{ $products['name'] }}</h2>
                <span><b class="card-text">Price: </b>{{ $products['price'] }}</span><br>
                <span><b class="card-text">Category :</b>{{ $products['category'] }}</span><br>
                <span><b class="card-text">Detail: </b>{{ $products['description'] }}</span>
                <br><br>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection

