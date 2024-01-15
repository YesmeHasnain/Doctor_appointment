@extends('layouts.frontendlayout.layout')
@section('Content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/banner/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Doctors</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Doctors Area
    ============================================= -->
    <div class="doctors-area three-colum bg-gray default-padding bottom-less">
        <div class="container">
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
                                <h4>Dr. Jessica Jones</h4>
                                <span>Cardiologist</span>
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
                                <h4>Prof. Ahel Natasha</h4>
                                <span>Dental Surgeon</span>
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
                                <img src="assets/img/doctors/4.jpg" alt="Thumb">
                                <div class="button">
                                    <a href="">Get Appoinment</a>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Gabriela Beckett</h4>
                                <span>Cosmetic Surgeon</span>
                                <div class="consultation">
                                    <h5>Consultation - <span class="flaot-right">(058)3456789</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/doctors/1.jpg" alt="Thumb">
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
                                <img src="assets/img/doctors/7.jpg" alt="Thumb">
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
@endsection