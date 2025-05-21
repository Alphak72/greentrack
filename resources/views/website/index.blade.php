<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
        @include('components.website.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top wow fadeIn" data-wow-delay="0.1s">
        @include('components.website.navbar')
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-6 wow fadeIn" data-wow-delay="0.1s">
        @include('components.website.carousel')
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/about-1.png') }}" style="height: 500px">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">GREENTRACK</h1>
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                        iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu
                        quis, fringilla risus. Pellentesque eu consequat augue.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                        iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu
                        quis, fringilla risus. Pellentesque eu consequat augue.
                    </p>
                    
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                        iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu
                        quis, fringilla risus. Pellentesque eu consequat augue.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                        iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu
                        quis, fringilla risus. Pellentesque eu consequat augue.
                    </p>
                    <a href="#" class="btn btn-primary">Connaitre plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid feature mt-6 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 justify-content-end">
                <div class="col-lg-6 pt-5">
                    <div class="mt-5">
                        <h1 class="display-6 text-white text-uppercase mb-4 wow fadeIn" data-wow-delay="0.3s">Pourquoi choisir nos GIE</h1>
                        <p class="text-light mb-4 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar
                            tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu
                            consequat augue.</p>
                        <div class="row g-4 pt-2 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="flex-column text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">9999</h1>
                                    <p class="text-white text-uppercase mb-0">Clients satisfaits</p>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="flex-column text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">9999</h1>
                                    <p class="text-white text-uppercase mb-0">Projets terminés</p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-5 border-primary border-bottom-0 p-5">
                            <div class="experience mb-4 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white text-uppercase">Expérience</span>
                                    <span class="text-white">90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="experience wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white text-uppercase">Travail effectué</span>
                                    <span class="text-white">95%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-fluid team pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-5">Rencontrez notre professionnel expérimenté, membre actif de notre GIE</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Alex Robin</h5>
                            <span>Welder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Andrew Bon</h5>
                            <span>Welder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Martin Tompson</h5>
                            <span>Welder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-dark mx-1" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Clarabelle Samber</h5>
                            <span>Welder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">De quoi parlent-ils ? Notre projet</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-img">
                        <div class="animated flip infinite">
                            <img class="img-fluid" src="{{ asset('assets/img/testimonial-1.jpg') }}" alt="">
                        </div>
                        <div class="animated flip infinite">
                            <img class="img-fluid" src="{{ asset('assets/img/testimonial-2.jpg') }}" alt="">
                        </div>
                        <div class="animated flip infinite">
                            <img class="img-fluid" src="{{ asset('assets/img/testimonial-3.jpg') }}" alt="">
                        </div>
                        <div class="animated flip infinite">
                            <img class="img-fluid" src="{{ asset('assets/img/testimonial-4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" src="{{ asset('assets/img/testimonial-1.jpg') }}" alt="">
                                <div class="ms-3">
                                    <div class="mb-2">
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                    </div>
                                    <h5 class="text-uppercase">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                        </div>
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" src="{{ asset('assets/img/testimonial-2.jpg') }}" alt="">
                                <div class="ms-3">
                                    <div class="mb-2">
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                    </div>
                                    <h5 class="text-uppercase">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                        </div>
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" src="{{ asset('assets/img/testimonial-3.jpg') }}" alt="">
                                <div class="ms-3">
                                    <div class="mb-2">
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                    </div>
                                    <h5 class="text-uppercase">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                        </div>
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" src="{{ asset('assets/img/testimonial-4.jpg') }}" alt="">
                                <div class="ms-3">
                                    <div class="mb-2">
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                    </div>
                                    <h5 class="text-uppercase">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Newsletter Start -->
    <div class="container-fluid newsletter mt-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="bg-white p-5 mb-5">
                <div class="row g-5">
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-uppercase mb-4">Newsletter</h1>
                        <div class="d-flex">
                            <i class="far fa-envelope-open fa-3x text-primary me-4"></i>
                            <p class="fs-5 fst-italic mb-0">Recevez chaque mois nos actualités, nos projets en cours, et découvrez comment vous pouvez contribuer à un avenir plus propre.</p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control border-0 bg-light" id="mail" placeholder="Your Email">
                            <label for="mail">Votre E-mail</label>
                        </div>
                        <button class="btn btn-primary w-100 py-3" type="submit">Soumettre maintenant</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer py-5 wow fadeIn" data-wow-delay="0.1s">
        @include('components.website.footer')
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid text-body copyright py-4">
        @include('components.website.copyright')
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>