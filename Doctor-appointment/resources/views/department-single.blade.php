@extends('layouts.frontendlayout.layout')
@section('Content')

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/banner/11.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Department Single</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Department Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Department Single 
    ============================================= -->
    <div class="department-single-area overflow-hidden default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 info">
                    <img src="assets/img/services/7.jpg" alt="Thumb">
                    <h3>Dental Care and Surgery</h3>
                    <span>Available Doctors: 57</span>
                    <p>
                        Savings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do. Miles mr an forty along as he. She education get middleton day agreement performed preserved unwilling. Do however as pleased offence
                        outward beloved by present. By outward neither he so covered amiable greater. Juvenile proposal betrayed he an informed weddings followed. Precaution day see imprudence sympathize principles. At full leaf give quit to in they up.
                    </p>
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-file-pdf"></i> Download Docs</a>
                    <h4>Services features</h4>
                    <ul>
                        <li>Stretchers and Stretcher Accessories</li>
                        <li>International Drug Database</li>
                        <li>Cushions and Mattresses</li>
                        <li>Cholesterol and lipid tests</li>
                        <li>Critical Care Medicine Specialists</li>
                        <li>Emergency Assistance</li>
                    </ul>
                </div>
                <div class="col-lg-4 sidebar">
                    <!-- Single Widget -->
                    <div class="widget appoinment">
                        <div class="title">
                            <h4>Make an Appointment</h4>
                        </div>
                        <div class="appoinment-box">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Child</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Department</option>
                                                <option value="2">Medecine</option>
                                                <option value="4">Dental Care</option>
                                                <option value="5">Traumatology</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" id="submit">
                                            Submit Query <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Single Widget -->
                    <div class="widget doctor">
                        <div class="title">
                            <h4>Expert Doctor</h4>
                        </div>
                        <div class="thumb">
                            <img src="assets/img/doctors/1.jpg" alt="Thumb">
                            <div class="overlay">
                                <h4>Jessica Jones</h4>
                                <h5>Cargiologist</h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Single Widget -->
                    <div class="widget link">
                        <div class="title">
                            <h4>Our Departments</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Medecine and Health</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Dental Care and Surgery</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Eye Treatment</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Children Chare</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-angle-right"></i> Nuclear magnetic</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Single Widget -->
                    <div class="widget opening-hours">
                        <div class="title">
                            <h4>Opening Hours</h4>
                        </div>
                        <ul>
                            <li> <span> Mon - Tues :  </span>
                                <div class="float-right"> 6.00 am - 10.00 pm </div>
                            </li>
                            <li> <span> Wednes - Thurs :</span>
                                <div class="float-right"> 8.00 am - 6.00 pm </div>
                            </li>
                            <li> <span> Sun : </span>
                                <div class="float-right closed"> Closed </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <!-- End Widget Items -->

            </div>
        </div>
    </div>
    </div>
    <!-- End Department Single -->
@endsection