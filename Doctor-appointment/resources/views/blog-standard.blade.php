@extends('layouts.frontendlayout.layout')
@section('Content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area gradient-bg bg-cover shadow dark text-light text-center" style="background-image: url(assets/img/banner/10.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Blog Standard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Standard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog blog-standard full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
                        <div class="blog-item-box">
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/11.jpg" alt="Thumb">
                                            
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
                                        <p>
                                            Occasional preference fat remarkably now projecting uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful. Listening newspaper in advantage frankness to concluded unwilling.
                                        </p>
                                        <a class="btn btn-md btn-gradient circle" href="blog-single-with-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/22.jpg" alt="Thumb"></a>
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
                                        <p>
                                            Occasional preference fat remarkably now projecting uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful. Listening newspaper in advantage frankness to concluded unwilling.
                                        </p>
                                        <a class="btn btn-md btn-gradient circle" href="blog-single-with-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="blog-single-with-sidebar.html"><img src="assets/img/blog/33.jpg" alt="Thumb"></a>
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
                                        <p>
                                            Occasional preference fat remarkably now projecting uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful. Listening newspaper in advantage frankness to concluded unwilling.
                                        </p>
                                        <a class="btn btn-md btn-gradient circle" href="blog-single-with-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

  @endsection