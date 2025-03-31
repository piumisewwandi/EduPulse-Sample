<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{ asset('newimages/favicon.png') }}"></link>
    <title>Edu Pulse E learning Website</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="p-0 bg-white container-xxl">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-white show position-fixed translate-middle w-110 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 4rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="p-0 container-xxl position-relative">
            <nav class="px-4 py-3 navbar navbar-expand-lg navbar-dark bg-dark px-lg-5 py-lg-0">
                <a href="" class="p-0 navbar-brand">
                    <h1 class="m-0 text-primary"><i class="fa fa-graduation-cap"></i>EduPulse</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="py-0 navbar-nav ms-auto pe-4">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Find a Tutor</a>
                        <a href="menu.html" class="nav-item nav-link">Blogs</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Educational Materials</a>
                            <div class="m-0 dropdown-menu">
                                <a href="booking.html" class="dropdown-item">Case Studies</a>
                                <a href="team.html" class="dropdown-item">Videos</a>
                                <a href="testimonial.html" class="dropdown-item">Premium Educational Materials</a>
                            </div>
                        </div>
                        <a href="contact.html" id="text-center" class="nav-item nav-link">Reviews & Feedbacks</a>
                    </div>
                    @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    <a href="cart.html" class="px-4 py-2 btn btn-primary">Cart</a>
                </div>
            </nav>

            <div class="py-5 mb-5 container-xxl bg-dark hero-header">
                <div class="container py-5 my-5">
                    <div class="row align-items-center g-5">
                        <div class="text-center col-lg-6 text-lg-start">
                            <h1 class="text-white display-3 animated slideInLeft">Learn & Grow</h1>
                            <p class="pb-2 mb-4 text-white animated slideInLeft">Welcome to EduPulse, your premier destination for eLearning and tutor booking. At EduPulse, we are committed to revolutionizing the way you learn by providing a comprehensive platform that connects students with expert tutors from around the world.</p>
                            <a href="service.html" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Find a Tutor</a>
                        </div>
                        <div class="overflow-hidden text-center col-lg-6 text-lg-end">
                            <img class="img-fluid" src="newimages/Picture1.gif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="pt-3 rounded service-item">
                            <div class="p-4" id="">
                                <i class="mb-4 fa fa-3x fa-user-tie text-primary"></i>
                                <h5>Tutor Booking</h5>
                                <p>Find the perfect tutor by searching subject, qualifications, availability, feedback, and ratings</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="pt-3 rounded service-item">
                            <div class="p-4">
                                <i class="mb-4 fa fa-3x fa-book text-primary"></i>
                                <h5>Free Educational Materials</h5>
                                <p>Access a treasure trove of free resources! customized to your educational level</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="pt-3 rounded service-item">
                            <div class="p-4">
                                <i class="mb-4 fa fa-3x fa-th-large text-primary"></i>
                                <h5>Blog Management</h5>
                                <p>Express yourself! Seamlessly create, explore, and engage with our vibrant blogging community</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="pt-3 rounded service-item">
                            <div class="p-4">
                                <i class="mb-4 fa fa-3x fa-lock text-primary"></i>
                                <h5>Premium Educational Materials</h5>
                                <p>Purchase exclusive case studies, videos, and research articles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="py-5 container-xxl">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="rounded img-fluid w-100 wow zoomIn" data-wow-delay="0.1s" src="newimages/aboutus3 (1).jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="rounded img-fluid w-75 wow zoomIn" data-wow-delay="0.3s" src="newimages/aboutus1 (2).jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="rounded img-fluid w-75 wow zoomIn" data-wow-delay="0.5s" src="newimages/aboutus2 (1).jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="rounded img-fluid w-100 wow zoomIn" data-wow-delay="0.7s" src="newimages/aboutus4 (1).jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-graduation-cap text-primary me-2"></i>EduPulse</h1>
                        <p class="mb-4">Welcome to EduPulse, your premier destination for eLearning and tutor booking.Whether you're looking to master a new subject, improve your grades, or prepare for a crucial exam, our extensive range of online courses and personalized tutoring services are designed to meet your unique needs. </p>
                        <p class="mb-4">Join us at EduPulse and take the first step towards achieving your academic goals with confidence and convenience</p>
                        <div class="mb-4 row g-4">
                            <div class="col-sm-6">
                                <div class="px-3 d-flex align-items-center border-start border-5 border-primary">
                                    <h1 class="flex-shrink-0 mb-0 display-5 text-primary" >15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="mb-0 text-uppercase">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="px-3 d-flex align-items-center border-start border-5 border-primary">
                                    <h1 class="flex-shrink-0 mb-0 display-5 text-primary">100</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="mb-0 text-uppercase">Master Tutors</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="px-5 py-3 mt-2 btn btn-primary" href="about.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Team Start -->
        <div class="pt-5 pb-3 container-xxl">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-center section-title ff-secondary text-primary fw-normal">Tutors</h5>
                    <h1 class="mb-5">Our Master Tutors</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="overflow-hidden text-center rounded team-item">
                            <div class="m-4 overflow-hidden rounded-circle">
                                <img class="img-fluid" src="newimages/teacher1.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Christine L. Martel</h5>
                            <small>BA(Hons)in Business Analytics and Statistics</small>
                            <div class="mt-3 d-flex justify-content-center">
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="overflow-hidden text-center rounded team-item">
                            <div class="m-4 overflow-hidden rounded-circle">
                                <img class="img-fluid" src="newimages/teacher3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Matilda Baldwinson</h5>
                            <small>MBA Advanced Mathematics and Analytics</small>
                            <div class="mt-3 d-flex justify-content-center">
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="overflow-hidden text-center rounded team-item">
                            <div class="m-4 overflow-hidden rounded-circle">
                                <img class="img-fluid" src="newimages/teacher2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Henry Prior</h5>
                            <small>Bsc(Hons) First Class in Computer Science</small>
                            <div class="mt-3 d-flex justify-content-center">
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="overflow-hidden text-center rounded team-item">
                            <div class="m-4 overflow-hidden rounded-circle">
                                <img class="img-fluid" src="newimages/teacher4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Sarah Edye</h5>
                            <small>Ba(Hons) English with a teaching specialization</small>
                            <div class="mt-3 d-flex justify-content-center">
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-twitter"></i></a>
                                <a class="mx-1 btn btn-square btn-primary" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="text-center section-title ff-secondary text-primary fw-normal">Reviews & Feedback</h5>
                    <h1 class="mb-5">Our Students Say!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="p-4 bg-transparent border rounded testimonial-item">
                        <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                        <p>The math tutoring sessions were excellent! I struggled with calculus, but the tutor's clear explanations and practice problems made everything so much easier.</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Ashley Elias</h5>
                                <small>Student</small>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-transparent border rounded testimonial-item">
                        <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                        <p>I had an amazing experience learning Python programming. The tutor was very knowledgeable and patient. I now feel confident in my coding skills.</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Marcus Wedge</h5>
                                <small>Undergraduate</small>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-transparent border rounded testimonial-item">
                        <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                        <p>Learning Spanish was a breeze with the help of my tutor. The interactive lessons and personalized attention helped me improve my speaking and writing skills quickly</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">James Hunter</h5>
                                <small>Undergraduate</small>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-transparent border rounded testimonial-item">
                        <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                        <p>The biology lessons were outstanding. My tutor made complex concepts easy to understand, and I feel much more prepared for my exams.</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Olivia Saint</h5>
                                <small>AL Student</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="pt-5 mt-5 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="mb-4 section-title ff-secondary text-start text-primary fw-normal">EduPulse</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Tutor Booking</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="mb-4 section-title ff-secondary text-start text-primary fw-normal">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>3574 Earnhardt Drive Louisville, KY 40202 USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 856 12956</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>edupulseofficial@gmail.com</p>
                        <div class="pt-2 d-flex">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="mb-4 section-title ff-secondary text-start text-primary fw-normal">Contact Us</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="mb-4 section-title ff-secondary text-start text-primary fw-normal">Newsletter</h4>
                        <p>Stay updated with the latest learning resources, tutor schedules, and exclusive offers. </p>
                        <div class="mx-auto position-relative" style="max-width: 400px;">
                            <input class="py-3 form-control border-primary w-100 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                            &copy; <a class="border-bottom" href="#">EduPulse</a>, All Right Reserved.

							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="text-center col-md-6 text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
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
</body>

</html>
