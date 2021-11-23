<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Stockroom</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <header>
        <!-- return message from controller laravel-->
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
        @endif
        
    </header>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/admin">admin/panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Warhouses
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Error logs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Administrator
                    </div>
                </nav>
            </div>

        

{{-- make a modal bootstrap     --}}
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <table class="table table-striped custab">
                <thead>
                <a href="#" data-toggle="modal" data-target="#productModal" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new products</a>

    {{-- start modal --}}
    <div class="container">
        <!-- The Modal -->
        <div class="modal" id="productModal">
            <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
              
                <!-- Modal body -->
                <form action="stock/addproduct" enctype="multipart/form-data" method="post">
                @csrf

                <div class="modal-body">
                    <div class="wrapper bg-white mt-sm-5">  
                        <h4 class="pb-4 border-bottom">Add new product:</h4>
                        <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
                            <div class="pl-sm-4 pl-2" id="img-section"> <b>Product image</b>
                                <p>Accepted file type .png. Less than 1MB</p> <input type="file" name="product_pictures"  class="btn button border">
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="row py-2">
                                <div class="col-md-6"> <label for="product_name">Product name</label> <input type="text" name="product_name" class="bg-light form-control" placeholder="product name"> </div>
                                <div class="col-md-6"> <label for="product_price">Price</label> <input type="number" name="product_price" class="bg-light form-control" placeholder="Price"> </div>
                                <div class="col-md-6"> <label for="product_quantity">Quantity</label> <input type="number" name="product_quantity" class="bg-light form-control" placeholder="qty"> </div>
                                <div class="col-md-6 pt-md-0 pt-3">
                                <div class="form-group">
                                    <label for="productcategory">Product category</label>
                                    <select class="form-control" id="productcategory">
                                        <option>bread</option>
                                        <option>pastery</option>
                                        <option>drinks</option>
                                    </select>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                            <div class="py-3 pb-4 border-bottom"> 
                            <button class="btn btn-primary mr-3" type="submit">Save Changes</button> 
                        </form>

                            <button class="btn border button">Cancel</button> </div>
                            <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                                <div> <b>Add new products and assign them to the store</b>
                                    <p>Details about your company account and password</p>
                                </div>
                                <div class="ml-auto"> <button class="btn danger" data-dismiss="modal">close window</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

        <tr>
            <th>ID</th>
            <th>store</th>
            <th>Product-Name</th>
            <th class="text-center">Action</th>
            <th class="text-center">qty</th>
        </tr>
    </thead>
        @foreach ($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>

                    <td>{{$store->store_name}}</td>
                                        <td>@foreach ($store->products as $product)
                        {{$product->product_name}}
                        <br>
                        @endforeach</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    {{-- <td>{{$item->product}}</td> --}}
                </tr>
        @endforeach
                {{-- start modal --}}
                <div class="container">
                    
                          
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Edit stock</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="stock/belongs" method="POST">
                            @csrf
                    this store:
                    <select class="form-control form-control-lg" name="store_id" id="validationCustom03" onchange="ChangecatList()" required>
                        <option name="store_id">Choose... </option>
                        @foreach ($stores as $store)
                        <option value="{{$store->id}}">{{$store->store_name}}</option>
                        @endforeach
                        </select>
                        <br>
                        belongs to this product:
                        <select class="form-control form-control-lg" name="product_id" id="validationCustom03" onchange="ChangecatList()" required>
                        <option name="product_id" >Choose... </option>
                        @foreach ($products as $p)
                        <option value="{{$p->id}}">
                            {{$p->product_name}}
                        </option>
                        @endforeach
                        </select>
                    <div class="invalid-feedback">
                        Please provide a category.
                    </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <button type="submit" class="btn btn-success">save changes</button>
                </form>
                </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>

                            {{-- add new product modal --}}
                            


                            
                          </div>
                        </table>
                        </div>
                    </div>
                    </div>   
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="demo/chart-area-demo.js"></script>
        <script src="demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
