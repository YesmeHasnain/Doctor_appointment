@extends('layouts.frontendlayout.layout')
@section('Content')
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel responsive-top-pad-110p text-large slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/1.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Meet the <strong>Best Doctors</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture.
                                            </p>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#">Discover More</a>
                                            <a data-animation="animated fadeInDown" class="btn btn-md btn-light effect" href="#">Contact Us <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/5.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Safe your <strong>Own Health</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture.
                                            </p>
                                            <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#">Discover More</a>
                                            <a data-animation="animated fadeInDown" class="btn btn-md btn-light effect" href="#">Contact Us <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="about-items">
                <div class="row">
                    <div class="col-lg-7 thumb-box">
                        <div class="thumb">
                            <i class="fas fa-heartbeat"></i>
                            <img src="assets/img/about/3.jpg" alt="Thumb">
                            <img src="assets/img/about/2.jpg" alt="Thumb">
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

    <!-- Start Our Process
    ============================================= -->
    <div class="process-area default-padding-bottom">
        <!-- Shape -->
        <div class="shape">
            <img src="assets/img/shape/1.png" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container">
            <div class="process-items">
                <div class="row">
                    <div class="col-lg-5 heading">
                        <h2>How to get a <br> consultation from us?</h2>
                        <p>
                            Badies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy.
                        </p>
                        <a class="btn btn-md btn-gradient" href="#">Full Process <i class="fas fa-angle-right"></i></a>
                    </div>
                    <div class="col-lg-7">
                        <div class="process-items text-center">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 single-item">
                                    <div class="item">
                                        <i class="flaticon-calendar-1"></i>
                                        <h5>Make Appointment</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 single-item">
                                    <div class="item">
                                        <i class="flaticon-doctor"></i>
                                        <h5>Select Expert Doctor</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 single-item">
                                    <div class="item">
                                        <i class="flaticon-heartbeat"></i>
                                        <h5>Confirm Consultation</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Process -->

    <!-- Start Our Services
    ============================================= -->
    <div class="services-area default-padding responsive-pad-top-less top-pad-less-tablet bg-gray">
        <div class="container">
            <div class="services-box">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Services</h4>
                            <h2>Our Departments</h2>
                        </div>
                    </div>
                </div>
                <div class="services-carousels services-one-item-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="services-single">
                        <div class="row">
                            <div class="col-lg-5 thumb bg-cover" style="background-image: url(assets/img/departments/1.jpg);"></div>
                            <div class="col-lg-7 info">
                                <div class="fixed-icon">
                                    <i class="flaticon-wheelchair"></i>
                                </div>
                                <div class="title">
                                    <div class="content">
                                        <h4>
                                            <a href="#">Orthopaedics</a>
                                        </h4>
                                        <p>
                                            <strong>Head of Department: </strong> Profession Jonadul
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming. Preferred joy agreement put continual elsewhere delivered now.
                                </p>
                                <ul>
                                    <li>Qualified Doctors</li>
                                    <li>Outdoor Checkup</li>
                                    <li>Feel like Home Services</li>
                                    <li>General Medical</li>
                                    <li>Easy and Affordable Billing</li>
                                    <li>24×7 Emergency Services</li>
                                </ul>
                                <a class="btn circle btn-md btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single">
                        <div class="row">
                            <div class="col-lg-5 thumb bg-cover" style="background-image: url(assets/img/departments/2.jpg);"></div>
                            <div class="col-lg-7 info">
                                <div class="fixed-icon">
                                    <i class="flaticon-cracked-skin"></i>
                                </div>
                                <div class="title">
                                    <div class="content">
                                        <h4>
                                            <a href="#">Dermatology </a>
                                        </h4>
                                        <p>
                                            <strong>Head of Department: </strong> Profession Jonadul
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming. Preferred joy agreement put continual elsewhere delivered now.
                                </p>
                                <ul>
                                    <li>Qualified Doctors</li>
                                    <li>Outdoor Checkup</li>
                                    <li>Feel like Home Services</li>
                                    <li>General Medical</li>
                                    <li>Easy and Affordable Billing</li>
                                    <li>24×7 Emergency Services</li>
                                </ul>
                                <a class="btn circle btn-md btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single">
                        <div class="row">
                            <div class="col-lg-5 thumb bg-cover" style="background-image: url(assets/img/departments/3.jpg);"></div>
                            <div class="col-lg-7 info">
                                <div class="fixed-icon">
                                    <i class="flaticon-scalpel"></i>
                                </div>
                                <div class="title">
                                    <div class="content">
                                        <h4>
                                            <a href="#">Surgery </a>
                                        </h4>
                                        <p>
                                            <strong>Head of Department: </strong> Profession Jonadul
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming. Preferred joy agreement put continual elsewhere delivered now.
                                </p>
                                <ul>
                                    <li>Qualified Doctors</li>
                                    <li>Outdoor Checkup</li>
                                    <li>Feel like Home Services</li>
                                    <li>General Medical</li>
                                    <li>Easy and Affordable Billing</li>
                                    <li>24×7 Emergency Services</li>
                                </ul>
                                <a class="btn circle btn-md btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

    <!-- Star Feature Entry Area
    ============================================= -->
    <div class="feature-entry-area bg-gray default-padding-bottom bottom-less">
        <!-- Shape -->
        <div class="shape">
            <img src="assets/img/shape/1.svg" alt="Shape">
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

    <!-- Star Health Tips
    ============================================= -->
    <div class="health-tips-area default-padding-bottom">
        <div class="container">
            <div class="health-tips-items">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <h2>Doctor tips</h2>
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
                                    <h4>How do you make your heart stronger?</h4>
                                    <p>
                                        Board certification is one of the most important factors to consider; it tells you that the doctor has the needed training, skills and experience to provide healthcare in cardiology. Also confirm that the cardiologist has no history of malpractice claims
                                        or disciplinary actions.
                                    </p>
                                    <div class="bottom">
                                        <div class="thumb">
                                            <img src="assets/img/doctors/1.jpg" alt="Thumb">
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
                                    <h4>What is an orthopedic surgeon?</h4>
                                    <p>
                                        Board certification is one of the most important factors to consider; it tells you that the doctor has the needed training, skills and experience to provide healthcare in cardiology. Also confirm that the cardiologist has no history of malpractice claims
                                        or disciplinary actions.
                                    </p>
                                    <div class="bottom">
                                        <div class="thumb">
                                            <img src="assets/img/doctors/7.jpg" alt="Thumb">
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
    <!-- End Health Tips -->

    <!-- Star Doctors Area
    ============================================= -->
    <div class="doctors-area three-colum bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Doctores</h4>
                        <h2>Our Experts</h2>
                    </div>
                </div>
            </div>
            <div class="doctor-items text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/doctors/2.jpg" alt="Thumb">
                                <div class="button">
                                    <a href="">Get Appoinment</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Prof. Jones Athom</h4>
                                <span>Orthopaedics</span>
                                <div class="consultation">
                                    <h5>Consultation - <span class="flaot-right">(012)3456789</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/doctors/3.jpg" alt="Thumb">
                                <div class="button">
                                    <a href="">Get Appoinment</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Dr. Anam Habu</h4>
                                <span>Cardiologist</span>
                                <div class="consultation">
                                    <h5>Consultation - <span class="flaot-right">(066)3456789</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/doctors/6.jpg" alt="Thumb">
                                <div class="button">
                                    <a href="">Get Appoinment</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Prof. Buba Pal</h4>
                                <span>Medical specialist</span>
                                <div class="consultation">
                                    <h5>Consultation - <span class="flaot-right">(058)3456789</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area text-light bg-gray default-padding-bottom">
        <!-- Shape -->
        <div class="shape">
            <img src="assets/img/shape/5.png" alt="Shape">
        </div>
        <div class="container">
            <div class="fun-fact-items text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-oxygen"></i>
                            <div class="timer k" data-to="12" data-speed="5000">12</div>
                            <span class="medium">Satisfied Patients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-department"></i>
                            <div class="timer" data-to="38" data-speed="5000">38</div>
                            <span class="medium">Departments</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-doctor"></i>
                            <div class="timer" data-to="278" data-speed="5000">278</div>
                            <span class="medium">Regular Doctors</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <i class="flaticon-servant-1"></i>
                            <div class="timer" data-to="1488" data-speed="5000">1488</div>
                            <span class="medium">Servant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Start Gallery Area
    ============================================= -->
    <div class="gallery-area inc-carousel default-padding-bottom">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Gallery</h4>
                        <h2>Our environment</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-items gallery-carousel owl-carousel owl-item">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/gallery/1.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="info-items">
                                    <div class="left-info">
                                        <h4>
                                            <a href="#">General Surgery</a>
                                        </h4>
                                        <ul>
                                            <li>Emergency</li>
                                            <li>Hourly Care</li>
                                        </ul>
                                    </div>
                                    <div class="right-info">
                                        <a class="item popup-gallery" href="assets/img/gallery/1.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/gallery/2.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="info-items">
                                    <div class="left-info">
                                        <h4>
                                            <a href="#">Primary Care</a>
                                        </h4>
                                        <ul>
                                            <li>Pediatric</li>
                                            <li>Cosmetic</li>
                                        </ul>
                                    </div>
                                    <div class="right-info">
                                        <a class="item popup-gallery" href="assets/img/gallery/2.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/gallery/4.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="info-items">
                                    <div class="left-info">
                                        <h4>
                                            <a href="#">Cancer Care</a>
                                        </h4>
                                        <ul>
                                            <li>Joints</li>
                                            <li>Spine</li>
                                        </ul>
                                    </div>
                                    <div class="right-info">
                                        <a class="item popup-gallery" href="assets/img/gallery/4.jpg"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/gallery/3.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="info-items">
                                    <div class="left-info">
                                        <h4>
                                            <a href="#">Cardiology</a>
                                        </h4>
                                        <ul>
                                            <li>Bones</li>
                                            <li>Spinal Fusion</li>
                                        </ul>
                                    </div>
                                    <div class="right-info">
                                        <a class="item popup-gallery" href="assets/img/gallery/3.jpg"><i class="fas fa-plus"></i></a>
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
    <!-- End Gallery Area -->

    <!-- Star Blog
    ============================================= -->
    <div class="blog-area default-padding bg-gray bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>News</h4>
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/1.jpg" alt="Thumb">
                                    
                                </a>
                            </div>
                            <div class="info">
                                <span class="date">
                                    12 Aug
                                </span>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>John Hasi</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 36 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Bssistance favourable cultivated everything collecting. </a>
                                </h4>
                                <a class="btn btn-sm btn-theme border circle" href="blog-single-with-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/2.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <span class="date">
                                    05 Jul
                                </span>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>John Hasi</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Difficult contented we determine ourselves a earnestly</a>
                                </h4>
                                <a class="btn btn-sm btn-theme border circle" href="blog-single-with-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/3.jpg" alt="Thumb"></a>
                            </div>
                            <div class="info">
                                <span class="date">
                                    28 Nov
                                </span>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>John Hasi</span>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="blog-single-with-sidebar.html">Binsisted received is occasion advanced honoured</a>
                                </h4>
                                <a class="btn btn-sm btn-theme border circle" href="blog-single-with-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Star Footer
    ============================================= -->
  @endsection