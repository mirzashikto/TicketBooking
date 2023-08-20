
<html>
<body>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>TJ About</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>  
<link rel="stylesheet" href="{{url('css/common.css')}}" />




<nav class="navbar navbar-expand-lg navbar-light bg-white  px-lg-3 py-lg-2 shadow-sm sticky-top"> <!-- from bootstarp website -->

        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="{{url('/')}}">Bracu Tickets</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{url('/')}}/#transports">Transports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{url('/')}}/#facilities">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{url('/')}}/#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{url('/')}}/about">About</a>
                    </li>


                </ul>
                <div class="d-flex ">


                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginmodal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registermodal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>


    <!-- Modal for Login -->
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('/')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        <h5 class="modal-title">User Login</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" ></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input name="username" type="text" class="form-control shadow-none" >

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control shadow-none" >

                        </div>
                        <button type="submit" name="login" class="btn btn-outline-dark shadow-none me-lg-2 me-3" >
                            Login
                        </button>
                        

                    </div>

                </form>
            </div>
        </div>
    </div>







    <!-- Modal for Register -->
    <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{url('/')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        <h5 class="modal-title">Sign up</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control shadow-none" required>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control shadow-none" required>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input name="phone" type="number" class="form-control shadow-none" required>

                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <label class="form-label">Address</label>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        
                                        <input name="house" type="text" class="form-control shadow-none" placeholder="House" required>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        
                                        <input name="street" type="text" class="form-control  shadow-none" placeholder="Street" required>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        
                                        <input name="area" type="text" class="form-control  shadow-none" placeholder="Area" required>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        
                                        <input name="country" type="text" class="form-control  shadow-none" placeholder="Country" required>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Zip</label>
                                        <input name="zip" type="number" class="form-control shadow-none " required>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Date Of Birth</label>
                                        <input name="dob" type="date" class="form-control shadow-none" required >

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input name="username" type="text" class="form-control shadow-none" required>

                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control shadow-none" required>

                                </div>
                                <div class="col">
                                    <label class="form-label">Confirm Password</label>
                                    <input name="confirm_password" type="password" class="form-control shadow-none" required>

                                </div>
                            </div>


                            <button name="register" type="submit" class="btn btn-outline-dark shadow-none me-lg-2  m-4" >
                                Register
                            </button>
                            <!-- javascrit karon click korle kothao jabe na -->
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

