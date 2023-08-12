<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset ('/css/style.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{url('/')}}"" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-user-tie me-3"></i>Bsc. CS</h1>
                   
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                        <a href="#" class="nav-item nav-link active">Past Papers</a>
                        <a href="#" class="nav-item nav-link">Notes</a>
                        
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">          
        </div>
        <!-- Navbar & Hero End -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">{{$semester->name}}</h5>
                    <h1 class="mb-5">Semester Units</h1>
                   

                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            @foreach($units as $index => $unit)
                            @if ($index == 0)
                            <h5 class="mb-0">{{$unit->name}}</h5>   
                            <small>{{$unit->slug}}</small>
                            <form action="{{ route('download', [$unit->slug]) }}" method="GET" >
                                @csrf
                                <div class="d-flex justify-content-center mt-3">
                                    
                                <button class="btn btn-square btn-primary mx-1" ><span class="glyphicon glyphicon-download-alt"></span></button>
                            </form>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            @elseif ($index == 1)
                            <h5 class="mb-0">{{$unit->name}}</h5>
                            <small>{{$unit->slug}}</small>
                            <form action="{{ route('download', [$unit->slug]) }}" method="GET" >
                                @csrf
                            <div class="d-flex justify-content-center mt-3">
                                
                                <button class="btn btn-square btn-primary mx-1" ><span class="glyphicon glyphicon-download-alt"></span></button>
                            
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            @elseif ($index == 2)
                            <h5 class="mb-0">{{$unit->name}}</h5>
                            <small>{{$unit->slug}}</small>
                            <form action="{{ route('download', [$unit->slug]) }}" method="GET" >
                                @csrf
                            <div class="d-flex justify-content-center mt-3">
                                
                                <button class="btn btn-square btn-primary mx-1" ><span class="glyphicon glyphicon-download-alt"></span></button>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            @elseif ($index == 3)
                            <h5 class="mb-0">{{$unit->name}}</h5>
                            <small>{{$unit->slug}}</small>
                            <form action="{{ route('download', [$unit->slug]) }}" method="GET" >
                                @csrf
                            <div class="d-flex justify-content-center mt-3">
                               
                                <button class="btn btn-square btn-primary mx-1" ><span class="glyphicon glyphicon-download-alt"></span></button>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            @elseif ($index == 4)
                            <h5 class="mb-0">{{$unit->name}}</h5>
                            <small>{{$unit->slug}}</small>
                            <form action="{{ route('download', [$unit->slug]) }}" method="GET" >
                                @csrf
                            <div class="d-flex justify-content-center mt-3">
                                
                                <button class="btn btn-square btn-primary mx-1" ><span class="glyphicon glyphicon-download-alt"></span></button>
                            
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            @elseif ($index == 5)
                            <h5 class="mb-0">{{$unit->name}}</h5>
                            <small>{{$unit->slug}}</small>
                            <form action="{{ route('download', [$unit->slug]) }}" method="GET" >
                                @csrf
                            <div class="d-flex justify-content-center mt-3">
                                
                                <button class="btn btn-square btn-primary mx-1" ><span class="glyphicon glyphicon-download-alt"></span></button>
                            
                            </div>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
        @endif @endforeach 
        <!-- Team End -->
        

   <!-- Footer Start -->
   <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
       
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Past Papers</a>
                    
                    
                  <a class="border-bottom" href="https://htmlcodex.com"></a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="#">Home</a>
                        <a href="#">Cookies</a>
                        <a href="#">Help</a>
                        <a href="#">Links</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="{{asset('js/app.js') }}"></script>
</body>

</html>