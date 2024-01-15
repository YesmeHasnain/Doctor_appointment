@extends('layouts.frontendlayout.layout')
@section('Content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(./assets/img/banner/11.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="about-items">
                <div class="row">
                    <div class="col-lg-7 thumb-box">
                        <div class="thumb">
                            <i class="fas fa-heartbeat"></i>
                            <img src="./assets/img/about/3.jpg" alt="Thumb">
                            <img src="./assets/img/about/2.jpg" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-5 info">
                        <h5>About Us</h5>
                        <h2>A Great Place to Work. A Great Place to Receive Care. Leading Medicine.</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis maiores, qui impedit animi. Explicabo quibusdam maxime hic eaque suscipit voluptate asperiores mollitia, ipsam fugit, optio architecto eligendi recusandae provident! Harum.
                        </p>
                        <ul>
                            <li>
                                <div class="info">
                                    <h4>Emergency care</h4>
                                    <div class="items">
                                        <span>Primary Care</span>
                                        <span>Medicine</span>
                                        <span>Orthopedic</span>
                                        <span>Cardiology</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->

    <!-- Star Feature Entry Area
    ============================================= -->
    <div class="feature-entry-area default-padding-bottom">
        <!-- Shape -->
        <div class="shape">
            <img src="./assets/img/shape/1.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="feature-entry-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="flaticon-ambulance-1"></i>
                            <h4>Emergency Case</h4>
                            <p>
                                Moment he at on wonder at season little. Six garden result summer set family esteem nay estate.
                            </p>
                            <a class="btn circle btn-theme border btn-sm" href="#">Read More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="flaticon-clock"></i>
                            <h4>Opening Hours</h4>
                            <ul>
                                <li> <span> Mon - Tue :  </span>
                                    <div class="float-right"> 8:00 - 17:30 </div>
                                </li>
                                <li> <span> Wed - Thu :</span>
                                    <div class="float-right"> 9:00 - 16:45 </div>
                                </li>
                                <li> <span> Sun : </span>
                                    <div class="float-right closed"> Closed </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="flaticon-ribbon"></i>
                            <h4>Cancer Care</h4>
                            <p>
                                Moment he at on wonder at season little. Six garden result summer set family esteem nay estate.
                            </p>
                            <a class="btn circle btn-theme border btn-sm" href="#">Read More</a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature Entry Area -->

    <!-- Start Our Services
    ============================================= -->
    <div class="services-area bg-gray default-padding-bottom bottom-less">
        <div class="container">
            <div class="services-items">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Departments</h4>
                            <h2>Centers of excellence</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Item -->
                    <div class="services-single col-lg-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <i class="flaticon-wheelchair"></i>
                                    <strong>01</strong>
                                </div>
                                <h4>
                                    <a href="#">Orthopaedics</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming.
                                </p>
                                <ul>
                                    <li>Joints</li>
                                    <li>Spine</li>
                                    <li>Sports Medicine</li>
                                    <li>Bones</li>
                                    <li>Spinal Fusion</li>
                                </ul>
                                <a class="btn btn-md circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single col-lg-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <i class="flaticon-cracked-skin"></i>
                                    <strong>02</strong>
                                </div>
                                <h4>
                                    <a href="#">Dermatology</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming.
                                </p>
                                <ul>
                                    <li>Pediatric </li>
                                    <li>Immunodermatologists</li>
                                    <li>Cosmetic</li>
                                    <li>Dermatopathologists</li>
                                    <li>Olio Fusion</li>
                                </ul>
                                <a class="btn btn-md circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single col-lg-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <i class="flaticon-scalpel"></i>
                                    <strong>03</strong>
                                </div>
                                <h4>
                                    <a href="#">Surgery</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming.
                                </p>
                                <ul>
                                    <li>Laparoscopy</li>
                                    <li>Endoscopy</li>
                                    <li>Bronchoscopy</li>
                                    <li>Laser surgery </li>
                                    <li>Electrosurgery </li>
                                </ul>
                                <a class="btn btn-md circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single col-lg-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <i class="flaticon-coronavirus"></i>
                                    <strong>04</strong>
                                </div>
                                <h4>
                                    <a href="#">Corona Checkup</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming.
                                </p>
                                <ul>
                                    <li>Rapid diagnostic</li>
                                    <li>Antibody</li>
                                    <li>Risks</li>
                                    <li>Diagnostic Testing</li>
                                    <li>Viral Culturing</li>
                                </ul>
                                <a class="btn btn-md circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

    <!-- Star Doctors Area
    ============================================= -->
    <div class="doctors-area carousel-shadow inc-carousel default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Doctores</h4>
                        <h2>Our Experts</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="doctor-items">
                <div class="col-lg-12">
                    <div class="doctors-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row">
                                <div class="thumb col-lg-6" style="background-image: url(./assets/img/doctors/2.jpg);"></div>
                                <div class="col-lg-6 info">
                                    <h4>Prof. Jones Athom</h4>
                                    <span>Orthopaedics</span>
                                    <h5>Visiting Hours: <strong>Sat-Tue <span>8:30 - 14:45</span></strong></h5>
                                    <div class="bottom">
                                        <a class="btn circle btn-sm btn-gradient" href="#">Appoinment</a>
                                        <a class="message" href="#"><i class="fas fa-comments"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row">
                                <div class="thumb col-lg-6" style="background-image: url(./assets/img/doctors/3.jpg);"></div>
                                <div class="col-lg-6 info">
                                    <h4>Dr. Anam Habu</h4>
                                    <span>Cardiologist</span>
                                    <h5>Visiting Hours: <strong>Sat-Tue <span>10:00 - 16:30</span></strong></h5>
                                    <div class="bottom">
                                        <a class="btn circle btn-sm btn-gradient" href="#">Appoinment</a>
                                        <a class="message" href="#"><i class="fas fa-comments"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row">
                                <div class="thumb col-lg-6" style="background-image: url(./assets/img/doctors/5.jpg);"></div>
                                <div class="col-lg-6 info">
                                    <h4>Prof. Buba Pal</h4>
                                    <span>Medicine Specialist</span>
                                    <h5>Visiting Hours: <strong>Sat-Tue <span>9:00 - 16:00</span></strong></h5>
                                    <div class="bottom">
                                        <a class="btn circle btn-sm btn-gradient" href="#">Appoinment</a>
                                        <a class="message" href="#"><i class="fas fa-comments"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="row">
                                <div class="thumb col-lg-6" style="background-image: url(./assets/img/doctors/7.jpg);"></div>
                                <div class="col-lg-6 info">
                                    <h4>Prof. Mohan</h4>
                                    <span>Kidney specialist</span>
                                    <h5>Visiting Hours: <strong>Sat-Tue <span>8:00 - 15:45</span></strong></h5>
                                    <div class="bottom">
                                        <a class="btn circle btn-sm btn-gradient" href="#">Appoinment</a>
                                        <a class="message" href="#"><i class="fas fa-comments"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors Area -->

    <!-- Star Testimonilas
    ============================================= -->
    <div class="testimonials-area health-tips-area default-padding-bottom">
        <div class="container">
            <div class="testimonial-items health-tips-items">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <h2>Whay People Say?</h2>
                        <p>
                            Power dried her taken place day ought the. Four and our ham west miss. Education shameless who middleton agreement how. We in found world chief is at means weeks smile.
                        </p>
                        <a class="btn btn-md btn-gradient" href="#">View All <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="col-lg-7 right-info">
                        <div class="tips-items health-tips-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h4>One of the famous Hospitals</h4>
                                    <p>
                                        Board certification is one of the most important factors to consider; it tells you that the doctor has the needed training, skills and experience to provide healthcare in cardiology. Also confirm that the cardiologist has no history of malpractice claims
                                        or disciplinary actions.
                                    </p>
                                    <div class="bottom">
                                        <div class="thumb">
                                            <img src="./assets/img/doctors/1.jpg" alt="Thumb">
                                        </div>
                                        <div class="provider">
                                            <h5>Jessika Jones</h5>
                                            <span>Heart specialist</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="info">
                                    <h4>The Biggest & Modern Hospitals</h4>
                                    <p>
                                        Board certification is one of the most important factors to consider; it tells you that the doctor has the needed training, skills and experience to provide healthcare in cardiology. Also confirm that the cardiologist has no history of malpractice claims
                                        or disciplinary actions.
                                    </p>
                                    <div class="bottom">
                                        <div class="thumb">
                                            <img src="./assets/img/doctors/7.jpg" alt="Thumb">
                                        </div>
                                        <div class="provider">
                                            <h5>Mark Henri</h5>
                                            <span>Rrthopedics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    @endsection