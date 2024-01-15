@extends('layouts.frontendlayout.layout')
@section('Content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/banner/12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Error Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb">
                    <img src="assets/img/illustration/3.svg" alt="Thumb">
                </div>
                <div class="col-lg-6">
                    <div class="error-box">
                        <h1>404</h1>
                        <h2>Opps! Page not found.</h2>
                        <p>
                            Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous.
                        </p>
                        <div class="search">
                            <div class="input-group">
                                <form action="#">
                                    <input type="text" placeholder="Search" class="form-control" name="text">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

@endsection