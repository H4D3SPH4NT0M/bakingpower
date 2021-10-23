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
            <a class="navbar-brand ps-3" href="/admin">Start Bootstrap</a>
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
            <div id="layoutSidenav_content">
                <main>
                    <div class="container bg-light">
                        <div class="table-wrap table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    @foreach ($product->stores as $store)

                                    <tr class="p-0">
                                        <td class="w350 p-0" scope="col"> <small class=" btn btn-primary h-1 px-2">Store Amsterdam </small> </td>
                                        <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted">{{$store->product_name}}</small> </td>
                                        {{-- <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted">{{$storme->store_address}}</small> </td> --}}
                                        <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted">STAGE</small></td>
                                        <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted">PRIORITY</small> </td>
                                    </tr>
                                    @endforeach
                                </thead>
                                <tbody>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-pink mx-2"></span> <span>Update contractor agreement</span> </div>
                                        </td>
                                        <td class="text-center"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""></td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center"><span class="btn btn-secondary pink">INITIATION</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-pink mx-2"></span> <span>Plan for next year</span> </div>
                                        </td>
                                        <td class="text-center"><img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""></td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center"><span class="btn btn-secondary pink">INITIATION</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-pink mx-2"></span> <span>How to manage event planing</span> </div>
                                        </td>
                                        <td class="text-center"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""></td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center"><span class="btn btn-secondary violet">PLANNING</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-borderless">
                                <thead>
                                    <tr class="p-0">
                                        <td class="w350 p-0" scope="col"> <small class=" btn btn-primary h-2 px-2">Store Rotterdam</small> </td>
                                        <td class="text-center w100 p-0 py-2" scope="col"> </td>
                                        <td class="text-center w100 p-0 py-2" scope="col"> </td>
                                        <td class="text-center w100 p-0 py-2" scope="col"></td>
                                        <td class="text-center w100 p-0 py-2" scope="col"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-yellow mx-2"></span> <span>Budget assessment</span><span class="mx-2 text-muted"></span></div>
                                        </td>
                                        <td class="text-center"> <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""> </td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center"><span class="btn btn-secondary violet">PLANNING</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-yellow mx-2"></span> <span>Finalize project scope</span> </div>
                                        </td>
                                        <td class="text-center"> <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDN8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""> </td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center "><span class="btn btn-secondary yellow">EXECUTION</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-yellow mx-2"></span> <span>Gather key resources</span> <span class="text-muted ps-2"></span> </div>
                                        </td>
                                        <td class="text-center"> <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDR8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""> </td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center "><span class="btn btn-secondary pink">INITIATION</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-borderless">
                                <thead>
                                    <tr class="p-0">
                                        <td class="w350 p-0" scope="col"> <small class=" btn btn-primary h-3 px-2">Store Lelystad</small> </td>
                                        <td class="text-center w100 p-0 py-2" scope="col"> </td>
                                        <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted"></small> </td>
                                        <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted"></small></td>
                                        <td class="text-center w100 p-0 py-2" scope="col"><small class="text-muted"></small> </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-violet mx-2"></span> <span>New contractor agreement</span> </div>
                                        </td>
                                        <td class="text-center"> <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDZ8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""> </td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center"><span class="btn btn-secondary w-100 violet">PLANNING</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-violet mx-2"></span> <span>Refresh company website</span> </div>
                                        </td>
                                        <td class="text-center"><img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTJ8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""></td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center "><span class="btn btn-secondary yellow">EXECUTION</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                    <tr class="border-bottom bg-white">
                                        <td class="row">
                                            <div class="d-flex align-items-center"> <span class="bg-violet mx-2"></span> <span>Update key objectives</span> <span class="text-muted ps-2 pe-1"></span></div>
                                        </td>
                                        <td class="text-center"><img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fHByb2ZpbGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" class="rounded-circle" alt=""></td>
                                        <td class="text-center"><span class="far fa-calendar-alt text-muted"></span></td>
                                        <td class="text-center"><span class="btn btn-secondary pink">INITIATION</span> </td>
                                        <td class="text-center"><span class="far fa-flag text-muted"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="container mt-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <div class="card p-3 py-4">
                                    <h5>Add new s</h5>
                                    <div class="row g-3 mt-2">
                                        <div class="col-md-3">
                                            <div class="dropdown"> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"> Stock room</button>
                                                
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Rural</a></li>
                                                    <li><a class="dropdown-item" href="#">Urban</a></li>
                                                    <li><a class="dropdown-item" href="#">All</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> <input type="text" class="form-control" placeholder="Enter address e.g. street, city and state or zip"> </div>
                                        <div class="col-md-3"> <button class="btn btn-secondary btn-block">Search Results</button> </div>
                                    </div>
                                    <div class="mt-3"> <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="advanced"> Advance Search With Filters <i class="fa fa-angle-down"></i> </a>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                <div class="row">
                                                    <div class="col-md-4"> <input type="text" placeholder="Property ID" class="form-control"> </div>
                                                    <div class="col-md-4"> <input type="text" class="form-control" placeholder="Search by MAP"> </div>
                                                    <div class="col-md-4"> <input type="text" class="form-control" placeholder="Search by Country"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="table-responsive px-2">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">COMPANY<span>ID</span></th>
                            <th scope="col">COMPANY</th>
                            <th scope="col">MID</th>
                            <th scope="col">BANK<span class="ps-1">NAME</span></th>
                            <th scope="col">CUR</th>
                            <th class="text-center" scope="col">3DS</th>
                            <th class="text-center" scope="col">ACTIVE</th>
                            <th class="text-center" scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="bg-blight">235</span></td>
                            <td><span class="bg-bdark">ABC<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1343</span></td>
                            <td><span class="bg-bdark">Faster<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">236</span></td>
                            <td><span class="bg-bdark">BCE<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1298</span></td>
                            <td><span class="bg-bdark">Secure<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">237</span></td>
                            <td><span class="bg-bdark">CDE<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1313</span></td>
                            <td><span class="bg-bdark">Secure<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">235</span></td>
                            <td><span class="bg-bdark">DEF<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1323</span></td>
                            <td><span class="bg-bdark">Secure<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">235</span></td>
                            <td><span class="bg-bdark">FEG<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1443</span></td>
                            <td><span class="bg-bdark">Secure<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">237</span></td>
                            <td><span class="bg-bdark">GFR<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1943</span></td>
                            <td><span class="bg-bdark">Faster<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">235</span></td>
                            <td><span class="bg-bdark">ABC<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1343</span></td>
                            <td><span class="bg-bdark">Faster<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-between px-3 mt-3">
                <div class="bg-bdark fs13"> <span>Page</span> <input class="input-10 text-center" type="text" value="1"> <span><span class="px-1">of</span>1</span> </div>
                <div class="d-flex justify-content-end bg-bdark fs13"> <span class="pe-1">Show</span> <input class="input-10" type="number" value="25"> <span class="ps-2"><span class="pe-2">/</span>Page</span> </div>
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
