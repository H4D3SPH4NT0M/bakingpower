<html>
<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../css/cart.css">
	<link rel="stylesheet" href="../css/products_style.css">

    <!-- <link rel="stylesheet" href="css/products_style.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">  
</head>
<header> 		
<!-- Navbar section -->
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom"> <a class="navbar-brand ml-2 font-weight-bold" href="/"><span id="burgundy">Baking</span><span id="orange">Power</span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarColor">
        <ul class="navbar-nav">
            <li class="nav-item rounded bg-light search-nav-item"><input type="text" id="search" class="bg-light" placeholder="Search bread, cakes, desserts"><span class="fa fa-search text-muted"></span></li>
            <li class="nav-item"><a class="nav-link" href="/login"><span class="fa fa-user-o"></span><span class="text">profile</span></a> </li>
            <li class="nav-item "><a class="nav-link" href="/carts"><span class="fa fa-shopping-cart"></span><span class="text">Cart</span></a> </li>
        </ul>
    </div>
</nav>
</header>
<body>
	<div class="container mt-5 mb-5">
		<div class="d-flex justify-content-center row">
			<div class="col-md-8">
				<div class="p-2">
					<h4>Shopping cart</h4>
					<div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
				</div>
					
				@foreach(Cart::content() as $row )

				<div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
					<!-- return $object with product picture-->
					@foreach ($carts as $object)
					@if ($object->id == $row->id)
					<div class="mr-1"><img class="rounded" src="data:image/png;base64,{{ chunk_split(base64_encode($object->product_pictures))}}" width="70"></div>
					@endif

					@endforeach
					<div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{{$row->name}}}</span>
						<div class="d-flex flex-row product-desc">
						</div>
					</div>
					<div class="d-flex flex-row align-items-center qty"><span class=".small">Aantal:</span><span class="qty-value"> {{{$row->qty}}}</span>
					</div>
					<div>
					<h5 class="text-grey">€{{{$row->price}}}</h5>
					</div>
					<div class="d-flex align-items-center">
						<form action="/carts" method="post">
							@csrf
						<input type="hidden" value="{{$row->rowId}}" name="id">
							<input type="submit" class="fa fa-trash mb-1 text-danger">
						</form>				
						</div>
				</div>
				@endforeach

				<form action="/carts" method="post">
					@csrf
					<div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" placeholder="discount code/gift card"><button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button></div>
					<div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="submit">Proceed to Pay</button></div>
					<div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" >
					<span class="font-weight-bold">Totaal:</span>
					<span>€{{{Cart::subtotal()}}}</span>
					<script>onClick={()=>{alert('werkt prima')}}</script>
				</div>
				</div>
				</div>
				</div>
				</form>
	
</body>



</html>