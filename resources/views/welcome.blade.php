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
	
	
	<link rel="stylesheet" href="fonts/font-awesome.min.css">    
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  	
</head>
<style>
  






.glow-on-hover {
width: 100%;
height: 45px;
border: none;
outline: none;
color: #fff;
background: #111;
cursor: pointer;
position: relative;
z-index: 0;
border-radius: 10px;
}

.glow-on-hover:before {
content: '';
background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
position: absolute;
top: -2px;
left:-2px;
background-size: 400%;
z-index: -1;
filter: blur(5px);
width: calc(100% + 4px);
height: calc(100% + 4px);
animation: glowing 20s linear infinite;
opacity: 0;
transition: opacity .3s ease-in-out;
border-radius: 10px;
}

.glow-on-hover:active {
color: #000
}

.glow-on-hover:active:after {
background: transparent;
}

.glow-on-hover:hover:before {
opacity: 1;
}

.glow-on-hover:after {
z-index: -1;
content: '';
position: absolute;
width: 100%;
height: 100%;
background: #111;
left: 0;
top: 0;
border-radius: 10px;
}

@keyframes glowing {
0% { background-position: 0 0; }
50% { background-position: 400% 0; }
100% { background-position: 0 0; }
}



</style>
<body>
   <header class="header-bg">
      <nav class="navbar navbar-fixed-top" role="navigation">
         <div class="container">
             <div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
      </button>
              <div class="logo"><a class="navbar-brand" href="#welcome">Gustoso</a></div>
              </div>
         <div class="collapse navbar-collapse" id="navbar-collapse-1">       
              @if (Route::has('login'))  
             <ul class="nk-navbar navbar-nav navbar-left">
                @auth
              <li class="web-links"><a class="nav-link" href="{{ url('/products') }}">Plaats een bestelling</a></li>
              <!-- if user is admin show this page -->
                @if(Auth::user()->usertype == 'sudo')
                <li class="web-links"><a class="glow-on-hover" href="{{ url('/admin') }}">  Admin Panel  </a></li>
                @endif
              <li class="web-links"><a class="nav-link" id="breathing-button" href="#news">News</a></li>




              <li class="web-links"><a class="nav-link" href="#contact">contact</a></li>
               @else
              <li class="web-links"><a class="nav-link" href="{{ route('login') }}">login</a></li>
              @if (Route::has('register'))
              <li class="web-links"><a class="nav-link" href="{{ route('register') }}">register</a></li>
              
            @endif
            @endauth
             </div>
            @endif
          </ul>
          
         </div>   
      </div>
     </nav>
      <div class=" col-xs-12 header-content">
       <p class="main-text">Pastry with love</p>
       <hr>
       <p class="disc-text">We’re bringing you fresh ingredients every<br>day in ways you can’t resist.</p>  
          <button class="menu-btn"><a href="#">our Menu</a></button>
       </div>
   </header>  
    
    <section id="about">
        <div class="row">
           <div class="container">
                 <div class="about-content col-md-5">
                <h2 class="title text-center">Art Of Cakes</h2>
                <p class="tagline text-center">we create delicious memories</p>
                <p class="para text-center">Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed.</p>
                <h3 class="chef text-center">Chef Cook</h3>
                <p class="cook text-center"><span class="fname">Benito</span><img src="images/cook.png" alt=""> <span class="lname">Gaspare</span></p>
                <p class="quote text-center">Unique creations for unique<br>
                occasions.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive about-img" src="images/bakery_stuff.jpg" alt="">
            </div>
           </div>
          
        </div>
    </section>
     <section id="news">
         <div class="row">
             <div class="container">
                 <div class="col-xs-12 col-md-6 hidden-xs hidden-sm hidden-md news-img">
                     <img class="" src="images/news-placeholder-img.jpg" alt="">
                 </div>
                 <div class="col-xs-8 col-md-3 col-xs-offset-1 news-content">
                     <h2 class="title">Tasty pancakes</h2>
                <p class="tagline">season favourite</p>
                     <p class="para">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus.</p>
                 </div>
                 <div class="col-md-1 text-center"> <img class="news-box" src="images/news-placeholder-box.jpg" alt=""> </div>
             </div>
         </div>
     </section>
     <section id="reservations">
         <div class="row">
             <div class="col-md-6 col-xs-12">
                 <div class="reserv-details text-center"><p class="heading1">Breakfast</p>
                 <p class="para1">7am Breakfast? we’re open!</p></div>
                 <div class="reserv-details text-center"><p class="heading2">Full breakfast</p><p class="para2">Duis ut tortor, et risus, vulputate pretium</p><p class="price">$12.49</p></div>
                 <div class="reserv-details text-center"><p class="heading2">Toast & Jam</p>
                 <p class="para2">Suspendisse, tempus, nterdum</p><p class="price">$4.90</p></div>
                 <div class="reserv-details text-center"><p class="heading2">Muffins</p><p class="para2">Fusce eget dui sodales est</p>
                 <p class="price">$3.95</p></div>
             </div>
         <div class="bakery-post col-md-4 col-xs-10">
             <p class="title text-center">Your morning
                            Escape with Flair</p>
                 <p class="para text-center">Donec vitae sapien ut libero venenatis faucibus. 
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed.<br>
             <button class="read-btn"><a href="">READ</a></button></p>
         </div>
         </div>
     </section>
     <section id="menu">
        <div class="col-xs-12">
            <p class="title text-center">The Jibarito sandwich</p>
            <p class="tagline text-center">the best sandwich you’ve ever tasted!</p>
        </div>
         <div class="row">
             <div class="container">
                 <div class="col-md-3 col-xs-12 menu-dishes">
                     <div class="menu-dish text-center"><img src="images/menu-img-1.png" alt="">
                             <p class="dish-heading">Class aptent</p>
                                 <p class="dish-para">Quot alienum persecuti ut eam, nam ad 
                                    atqui primis nusquam.</p>
                         </div>
                          <div class="menu-dish text-center"><img src="images/mages/menu-img-2.png" alt="">
                             <p class="dish-heading">Nulla eget</p>
                                 <p class="dish-para">Nullam dictum felis eu pede mollis 
                                pretium Integer tincidunt.</p>
                         </div>
                          <div class="menu-dish text-center"><img src="images/menu-img-3.png" alt="">
                             <p class="dish-heading">Sed nibh purus</p>
                                 <p class="dish-para"> Aenean eleifend tellus leo ligula, 
                                    porttitor eu, consequat vitae.</p> 
                         </div>
                 </div>
                 <div class="col-md-5 col-xs-12 menu-img col-md-offset-1 text-center">
                 <img class="hidden-xs hidden-sm" src="images/menu-img_bg.jpg" alt="" width="750px" />
                    <button class="recipe-btn col-md-4">FULL RECIPE</button>
                  </div>      
                 <div class="menu-bar col-md-3 col-xs-12">
                     <div class="menu-box1 menu-box2"><p>PREP <br> <span class="num">15</span> <br> mins</p></div>
                     <div class="menu-box2"><p>cook <br> <span class="num">35</span> <br> mins</p></div>
                     <div class="menu-box3"><p>ready in <br> <span class="num">50</span> <br> mins</p></div>
                     </div> 
                     
             </div>
         </div>
     </section>
    
     <footer id="contact">
                <ul class="nk-navbar fnav">
                    <li class="flinks col-xs-12 col-md-2"><a href="">our menu</a></li>
                    <li class="flinks col-xs-12 col-md-2"><a href="">gallery</a></li>
                    <li class="flinks col-xs-12 col-md-2"><a href="">culture</a></li>
                    <li class="flinks col-xs-12 col-md-2"><a href="">events</a></li>
                    <li class="flinks col-xs-12 col-md-2"><a href="">catering</a></li>
                    <li class="flinks col-xs-12 col-md-2"><a href="">visit us</a></li>
                </ul>
     </footer>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
     
      </body>
</html>
    </body>
</html>
@if (Auth::user())
<h3> Welkom plaats een bestelling {{ Auth::user()->name }}</h3>
@endif