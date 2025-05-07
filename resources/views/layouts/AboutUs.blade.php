

@extends('index')






@section('content')

<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>    
    </div>
</div>



{{-- HomePage --}}
{{-- <div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <div class="header-carousel-item-img-1">
            <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-start p-3">
                <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">The most prestigious Investments company in worldwide.</h1>
                <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Apply Now</a>
                <a class="btn btn-dark rounded-pill py-3 px-5 mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item mx-auto">
        <div class="header-carousel-item-img-2">
            <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-center p-3">
                <h1 class="display-1 text-capitalize text-white mb-4">The most prestigious Investments company in worldwide.</h1>
                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" href="#">Apply Now</a>
                <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Read More</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <div class="header-carousel-item-img-3">
            <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Image">
        </div>
        <div class="carousel-caption">
            <div class="carousel-caption-inner text-end p-3">
                <h1 class="display-1 text-capitalize text-white mb-4">The most prestigious Investments company in worldwide.</h1>
                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                </p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" href="#">Apply Now</a>
                <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Read More</a>
            </div>
        </div>
    </div>
</div> --}}
    


    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img src="img/about-3.png" class="img-fluid w-100 rounded-top bg-white" alt="Image">
                        <img src="img/about-2.jpg" class="img-fluid w-100 rounded-bottom" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">The most Profitable Investments company in worldwide.</h1>
                    <p class="text ps-4 mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores atque nihil unde quisquam, deleniti illo a. Quam harum laboriosam, laudantium, deleniti perferendis voluptates ex non laborum libero magni, minus illo!
                    </p>
                    <div class="row g-4 justify-content-between mb-5">
                        <div class="col-lg-6 col-xl-5">
                            <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Strategy & Consulting</p>
                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Business Process</p>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Marketing Rules</p>
                            <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Partnerships</p>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-between mb-5">
                        <div class="col-xl-5"><a href="#" class="btn btn-primary rounded-pill py-3 px-5">Discover More</a></div>
                        <div class="col-xl-7 mb-5">
                            <div class="about-customer d-flex position-relative">
                                <img src="img/customer-img-1.jpg" class="img-fluid btn-xl-square position-absolute" style="left: 0; top: 0;"  alt="Image">
                                <img src="img/customer-img-2.jpg" class="img-fluid btn-xl-square position-absolute" style="left: 45px; top: 0;" alt="Image">
                                <img src="img/customer-img-3.jpg" class="img-fluid btn-xl-square position-absolute" style="left: 90px; top: 0;" alt="Image">
                                <img src="img/customer-img-1.jpg" class="img-fluid btn-xl-square position-absolute" style="left: 135px; top: 0;" alt="Image">
                                <div class="position-absolute text-dark" style="left: 220px; top: 10px;">
                                    <p class="mb-0">5m+ Trusted</p>
                                    <p class="mb-0">Global Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 text-center align-items-center justify-content-center">
                        <div class="col-sm-4">
                            <div class="bg-primary rounded p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value fs-1 fw-bold text-dark" data-toggle="counter-up">32</span>
                                    <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;">k+</h4>
                                </div>
                                <div class="w-100 d-flex align-items-center justify-content-center">
                                    <p class="text-white mb-0">Project Complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="bg-dark rounded p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value fs-1 fw-bold text-white" data-toggle="counter-up">21</span>
                                    <h4 class="text-white fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                                <div class="w-100 d-flex align-items-center justify-content-center">
                                    <p class="mb-0">Years Of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="bg-primary rounded p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value fs-1 fw-bold text-dark" data-toggle="counter-up">97</span>
                                    <h4 class="text-dark fs-1 mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                                <div class="w-100 d-flex align-items-center justify-content-center">
                                    <p class="text-white mb-0">Team Members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    


    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-4">Our Investa Company Dedicated Team Member</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                <div class="team-icon-share">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                            <div class="team-content-inner rounded-bottom">
                                <h4 class="text-white">Mark D. Brock</h4>
                                <p class="text-muted mb-0">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded">
                        <div class="team-img">
                            <img src="img/team-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                <div class="team-icon-share">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                            <div class="team-content-inner rounded-bottom">
                                <h4 class="text-white">Mark D. Brock</h4>
                                <p class="text-muted mb-0">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded">
                        <div class="team-img">
                            <img src="img/team-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                <div class="team-icon-share">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                            <div class="team-content-inner rounded-bottom">
                                <h4 class="text-white">Mark D. Brock</h4>
                                <p class="text-muted mb-0">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded">
                        <div class="team-img">
                            <img src="img/team-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fas fa-share-alt"></i></a>
                                <div class="team-icon-share">
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square text-white rounded-circle mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content bg-dark text-center rounded-bottom p-4">
                            <div class="team-content-inner rounded-bottom">
                                <h4 class="text-white">Mark D. Brock</h4>
                                <p class="text-muted mb-0">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
    