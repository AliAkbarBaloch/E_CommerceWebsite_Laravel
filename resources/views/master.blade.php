<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Login</title>
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


     <!-- Scripts jS -->
     <script src="{{ asset('js/app.js') }}" defer></script>
   
     <!-- Styles CS-->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">





     <!-- Styles CS-->
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> --}}

     {{-- <!-- Scripts jS -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
</head>
<body>
    {{ View::make('header') }}
         @yield('content')
         
    {{ View::make('footer') }}

    
    <style>
        img.slider-image{
            height:500px !important;
        }
        .custom-product{
            height: 600px;
        }
        .slider-text{
            background-color: #35443585 !important;
        }
        .trending-image{
            height: 100px;
        }
        .trending-item{
            float: left;
            width: 25%;
        }
        .trending-wrapper{
            margin: 30px;
        }
        .imag-detail{
            height: 200px;
        }
        .search-box{
            width: 500px !important;
        }
        .cart-list-devider{
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        .bg-dark{
            background-color: #091444 !important;
        }

        .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color:#091444;
                color: white;
                text-align: center;
            }

        .col-sm-10 {
        width:100%;
        height:100%;
        }
        .container-fluid{
        margin-top: 2%;
        margin-bottom: 2%;
        }
        .container-fluid h1{
        font-weight: 800;
        font-size: 15px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #00bfff	;
        }
        .inner{
        overflow: hidden !important;
        }
        .inner img{
        transition: all 1.5s ease;
        }
        .inner:hover img{
        transform: scale(1.5);
        }
        .container-fluid h6{
        border-bottom: 5px solid #00bfff	;
        }
        .card shadow{
            width: 18rem;
            height: 20px;
        }
        .card-img-top{
            height: 300px !important;
            width: 500px !important;
        }
    </style>
  
</body>
</html>