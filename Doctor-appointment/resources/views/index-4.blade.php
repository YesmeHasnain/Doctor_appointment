@extends('layouts.frontendlayout.layout')
@section('Content')
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area color-theme">
        <div id="bootcarousel" class="carousel text-light text-large slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/11.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 offset-lg-3">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Meet the <strong>Best Doctors</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture.
                                            </p>
                                            <a data-animation="animated fadeInDown" class="btn btn-md btn-light effect" href="#">Contact Us <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/6.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 offset-lg-3">
                                        <div class="content">
                                            <h2 data-animation="animated slideInDown">Safe your <strong>Own Health</strong></h2>
                                            <p data-animation="animated slideInLeft">
                                                Preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture.
                                            </p>
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
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Our About
    ============================================= -->
    <div class="about-area features-area default-padding">
        <!-- Shape -->
        <div class="shape">
            <img src="assets/img/shape/3.svg" alt="Shape">
        </div>
        <!-- End Shape -->
        <div class="container-medium">
            <div class="about-items features-item-box">
                <div class="row">

                    <div class="col-lg-5 info">
                        <h5>Has been working since 2000</h5>
                        <h2>A Great Place to Work. A Great Place to Receive Care. Leading Medicine.</h2>
                        <div class="thumb">
                            <img src="assets/img/bg-3.png" alt="Thumb">
                        </div>
                    </div>

                    <div class="col-lg-6 offset-lg-1 info right">
                        <div class="center-tabs">
                            <ul id="tabs" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">Consultation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">Our Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab3" data-toggle="tab" class="nav-link"> Our Vission </a>
                                </li>
                            </ul>
                            <div id="tabsContent" class="tab-content">
                                <div id="tab1" class="tab-pane fade active show">
                                    <div class="info">
                                        <p>
                                            Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed
                                            discovery.
                                        </p>
                                        <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane fade">
                                    <div class="info">
                                        <p>
                                            Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed
                                            discovery.
                                        </p>
                                        <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane fade">
                                    <div class="info">
                                        <p>
                                            Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed
                                            discovery.
                                        </p>
                                        <a class="btn-simple" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

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

    <!-- Start Our Services
    ============================================= -->
    <div class="services-area three-colums bg-gray default-padding-bottom bottom-less">
        <div class="container">
            <div class="services-items text-center">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4>Services</h4>
                            <h2>Our Departments</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Item -->
                    <div class="services-single col-lg-4 col-md-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <img src="assets/img/services/8.jpg" alt="Thumb">
                                </div>
                                <h4>
                                    <a href="#">Orthopaedics</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming.
                                </p>
                                <a class="btn btn-sm circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single col-lg-4 col-md-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <img src="assets/img/services/9.jpg" alt="Thumb">
                                </div>
                                <h4>
                                    <a href="#">Dermatology</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming.
                                </p>
                                <a class="btn btn-sm circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="services-single col-lg-4 col-md-6">
                        <div class="item">
                            <div class="info">
                                <div class="top">
                                    <img src="assets/img/services/10.jpg" alt="Thumb">
                                </div>
                                <h4>
                                    <a href="#">Surgery</a>
                                </h4>
                                <p>
                                    Because yet mistake feeling has men. Consulted disposing to moonlights. Engage piqued in on coming.
                                </p>
                                <a class="btn btn-sm circle btn-gradient" href="#">Get Appointment <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Services -->

    <!-- Start Register Area
    ============================================= -->
    <div class="register-area default-padding bg-fixed shadow half text-light" style="background-image: url(assets/img/banner/7.jpg);">
        <div class="container">
            <div class="register-items">
                <div class="row align-center">

                    <div class="col-lg-6 form">
                        <div class="appoinment-box">
                            <div class="heading">
                                <h2>Make an Appointment</h2>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="f-name" name="f-name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="l-lname" name="l-lname" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="date" name="date" placeholder="Appoinment Date" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Child</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Department</option>
                                                <option value="2">Medecine</option>
                                                <option value="4">Dental Care</option>
                                                <option value="5">Traumatology</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Briefly state your problem *"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Submit Query <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 info">
                        <h5>Free Consultation</h5>
                        <h2>Get An Appointment For Get Release.</h2>
                        <p>
                            Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Timed balls match at by rooms we. Fat not boy neat left had with past here
                            call. Court nay merit few nor party learn.
                        </p>
                        <div class="steps">
                            <ul>
                                <li>
                                    <i class="flaticon-calendar-1"></i>
                                    <h5>Appointment</h5>
                                </li>
                                <li>
                                    <i class="flaticon-doctor"></i>
                                    <h5>Select Doctor</h5>
                                </li>
                                <li>
                                    <i class="flaticon-heartbeat"></i>
                                    <h5>Consultation</h5>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Register Area -->

    <!-- Star Doctors Area
    ============================================= -->
    <div class="doctors-area carousel-shadow inc-carousel bg-gray default-padding">
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
                                <div class="thumb col-lg-6" style="background-image: url(assets/img/doctors/2.jpg);"></div>
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
                                <div class="thumb col-lg-6" style="background-image: url(assets/img/doctors/3.jpg);"></div>
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
                                <div class="thumb col-lg-6" style="background-image: url(assets/img/doctors/5.jpg);"></div>
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
                                <div class="thumb col-lg-6" style="background-image: url(assets/img/doctors/7.jpg);"></div>
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
    <div class="testimonials-area bg-gray health-tips-area default-padding-bottom">
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
                                    <h4>The Biggest & Modern Hospitals</h4>
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
    <!-- End Testimonials -->

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

    <!-- Star Blog
    ============================================= -->
    <div class="blog-area default-padding-bottom bottom-less">
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

    <!-- Start Subscribe Area 
    ============================================= -->
    <div class="subscribe-area text-light text-center">
        <div class="container">
            <div class="subscribe-form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form">
                            <h2>Newsletter</h2>
                            <p>Stay up to date with our latest news</p>
                            <form action="#">
                                <input type="email" placeholder="Your Email*" class="form-control" name="email">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->
@endsection