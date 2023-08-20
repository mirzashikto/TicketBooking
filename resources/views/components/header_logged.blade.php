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
            <div class="d-flex">


                <button class="btn btn-outline-dark shadow-none me-lg-2 m-3" >
                    <a class="text-decoration-none text-warning" href="{{url('/')}}/logout">Log out</a>
                </button>


                <div class="py-3 px-3"><!-- profile button -->
                    <a href="{{url('/')}}/user_profile"><h4><i class="bi bi-person-circle"></i></h4></a>
                </div>
                
            
            </div>
        </div>
    </div>
</nav>
