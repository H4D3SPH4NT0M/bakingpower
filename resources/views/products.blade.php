@if (Auth::check())

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Baking Power</title>

    <meta name="description" content="Clean & Minimal Website for a Bakery Shop.">
    <meta name="keywords" content="Bakery, clean, minimal, blog, template, shop website">
    <meta name="author" content="nK">

	<meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Rouge+Script:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alegreya:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	
	<link rel="stylesheet" href="fonts/font-awesome.min.css">    
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<link rel="stylesheet" href="css/products_style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">  	
</head>
<body>
<!-- Navbar section -->
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom"> <a class="navbar-brand ml-2 font-weight-bold" href="{{route('welcome')}}"><span id="burgundy">Baking</span><span id="orange">Power</span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">
            <li class="nav-item rounded bg-light search-nav-item"><input type="text" id="search" class="bg-light" placeholder="Search bread, cakes, desserts"><span class="fa fa-search text-muted"></span></li>
            <li class="nav-item"><a class="nav-link" href="/login"><span class="fa fa-user-o"></span><span class="text">profile</span></a> </li>
            <li class="nav-item "><a class="nav-link" href="/carts"><span class="fa fa-shopping-cart"></span><span class="text">Cart</span></a> </li>
        </ul>
    </div>
</nav>
    
<div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filters<span class="fa fa-filter pl-1"></span></button>
</div>
<div id="mobile-filter">
    <p class="pl-sm-0 pl-2"> Home | <b>Verse brood</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan Breads</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast Breads</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy Breads</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Accompainments</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
        </form>
    </div>
  
</div>
<!-- Sidebar filter section -->
<section id="sidebar">
    <p> Home | <b>verse brood</b></p>
    <div class="border-bottom pb-2 ml-2">
        <h4 id="burgundy">Filters</h4>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Categories</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan Breads</label> </div>
            <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast Breads</label> </div>
            <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy Breads</label> </div>
        </form>
    </div>
    <div class="py-2 border-bottom ml-3">
        <h6 class="font-weight-bold">Accompainments</h6>
        <div id="orange"><span class="fa fa-minus"></span></div>
        <form>
            <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
            <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label> </div>
            <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label> </div>
            <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label> </div>
            <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
        </form>
    </div>
    
        </form>
    </div>
</section>
<!-- products section -->
<section id="products">
    <div class="container">
        @if (Auth::user())
<h2><strong> Welkom terug {{ Auth::user()->name }} plaats je bestelling</strong></h2>
@endif
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Showing 44 results</div>
            <div class="ml-auto mr-lg-4">
                <form action="product" method="post">
                    @csrf
                    <select name="store_id">
                {{-- <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Select store </span> <select name="sort" id="sort"> --}}
                    @foreach ($stores as $store)
                    <option value="{{$store->id}}"><b>{{$store->store_name}}</b>
                    </option>
                    @endforeach
                    </select>
                    <input type="submit" value="filter"> 
                </div>
            </div>
        </div>
    </form>
        @if (session('message'))
<div>{{ session('message') }}</div>
@endif
        <div class="row">
            @foreach ($product as $products)
            <form action="checkout" method="post">
                @csrf
            <div class="col-lg-4 col-md-4 p-4 col-sm-10 offset-md-0 offset-sm-1">
                {{-- display product_pictures from database  --}}
                <div class="card"> 
                
                @if ($products->id > 6)
                <img class="card-img-top" src="data:image/png;base64,{{ $products->product_pictures}}"> 
                @else
                <img class="card-img-top" src="data:image/png;base64,{{ chunk_split(base64_encode($products->product_pictures))}}"> 
                @endif
                
                    
                    <div class="card-body pt-1">
                     
                        <h5><small>Aantal beschickbaar: {{{$products->product_quantity}}}</small></h5>
                        <input type="hidden" name="id" value="{{$products->id}}">
                        <h5><b>{{$products->product_name}}</b> </h5>
                        <p><small>{{$products->product_description}}</small></p>
                        <div class="d-flex flex-row my-2">
                        <div class="text-muted">€{{{$products->product_price}}}</div>
                        <label for="number">Aantal:</label>
                        <input type="number" name="product_quantity" min="0" max="10" style="width:50px; margin-left:16em; " class="form-control" id="number">      
                        </div>
                        <button type="submit" class="btn w-100 rounded my-2">Add to cart</button>
                    </div>
                </div>
            </div>
            </form>
            @endforeach
            
        </div>
        
            
    
</section>
</body>
</html>
@endauth
@if (!Auth::user())
<h2>U moet ingelogd zijn om te bestellen</h2>
@endif

