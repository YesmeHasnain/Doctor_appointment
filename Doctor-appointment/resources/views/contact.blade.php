@extends('layouts.frontendlayout.layout')
@section('Content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/banner/8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row">
                    
                    <div class="col-lg-8 left-item">
                        <div class="content">
                            <h2>Contact our <strong>Support Office</strong></h2>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 right-item">
                        <div class="info-items">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-location-1"></i>
                                </div>
                                <div class="info">
                                    <h5>Location</h5>
                                    <p>
                                        22 Baker Street, London, United Kingdom, W1U 3BW
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="info">
                                    <h5>Make a Call</h5>
                                    <p>
                                        +44-20-7328-4499
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info">
                                    <h5>Send a Mail</h5>
                                    <p>
                                        info@yourdomain.com
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-clock-1"></i>
                                </div>
                                <div class="info">
                                    <h5>Opening Hours</h5>
                                    <p>
                                        Sat - Mon: <span>8:00 - 15:45</span><br>
                                        Tue - Wed: <span>10:00 - 16:00</span>
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

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