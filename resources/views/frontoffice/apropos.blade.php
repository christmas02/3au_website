@extends('frontoffice/layout/layout')

@section('content')
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(assets/images/banner/5.jpg);">
        <div class="overlay-main site-bg-secondry opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="site-text-primary" style="color: #fff;">Qui somme nous ?</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <!-- ALL SERVICES START -->
    <div class="section-full p-t80 p-b40 bg-no-repeat bg-bottom-right bg-cover"
        style="background-image:url(images/background/bg-7.jpg)">
        <div class="container">
            <div class="section-content">

                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <div>Le Cabinet 3AU</div>
                        <div class="sep-leaf-right"></div>
                    </div>
                    <h3>{!! $data->sous_titre_section_one !!}</h3>
                </div>
                <!-- TITLE END-->

                <div class="row d-flex justify-content-center">

                    <div class="col-lg-12 col-md-12 col-sm-12 m-b50">
                        <div class="service-border-box">
                            <div class="wt-box service-box-1 bg-white">

                                <div class="service-box-title title-style-2 site-text-secondry">
                                    <span class="s-title-one">Le Cabinet </span>
                                    <span class="s-title-two">3AU</span>
                                </div>
                                <div class="service-box-content">
                                    {!! $data->contenue_section_one !!}
                                    <a href="/contact" class="site-button-link">Contactez nous</a>
                                </div>

                                <div class="wt-icon-box-wraper">
                                    
                                        <div class="logo-footer clearfix">
                                            <a href="/"><img src="assets/images/logo-1.png" alt=""></a>
                                        </div>
                                    
                                    <div class="wt-icon-number"><span>3AU</span></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                        <div class="service-border-box">
                            <div class="wt-box service-box-1 bg-white">

                                <div class="service-box-title title-style-2 site-text-secondry">
                                    <span class="s-title-one">Mechanical</span>
                                    <span class="s-title-two">Engineering</span>
                                </div>
                                <div class="service-box-content">
                                    <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on
                                        low hanging fruit.</p>
                                    <a href="s-mechanical.html" class="site-button-link">Read More</a>
                                </div>

                                <div class="wt-icon-box-wraper">
                                    <div class="wt-icon-box-md site-bg-primary">
                                        <span class="icon-cell text-white"><i class="flaticon-conveyor"></i></span>
                                    </div>
                                    <div class="wt-icon-number"><span>02</span></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                        <div class="service-border-box">
                            <div class="wt-box service-box-1 bg-white">

                                <div class="service-box-title title-style-2 site-text-secondry">
                                    <span class="s-title-one">Automotive</span>
                                    <span class="s-title-two">Manufacturing</span>
                                </div>
                                <div class="service-box-content">
                                    <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on
                                        low hanging fruit.</p>
                                    <a href="s-automotive.html" class="site-button-link">Read More</a>
                                </div>

                                <div class="wt-icon-box-wraper">
                                    <div class="wt-icon-box-md site-bg-primary">
                                        <span class="icon-cell text-white"><i class="flaticon-robotic-arm"></i></span>
                                    </div>
                                    <div class="wt-icon-number"><span>03</span></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                        <div class="service-border-box">
                            <div class="wt-box service-box-1 bg-white">

                                <div class="service-box-title title-style-2 site-text-secondry">
                                    <span class="s-title-one">Chemical</span>
                                    <span class="s-title-two">Research</span>
                                </div>
                                <div class="service-box-content">
                                    <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on
                                        low hanging fruit.</p>
                                    <a href="s-chemical.html" class="site-button-link">Read More</a>
                                </div>

                                <div class="wt-icon-box-wraper">
                                    <div class="wt-icon-box-md site-bg-primary">
                                        <span class="icon-cell text-white"><i class="flaticon-oil"></i></span>
                                    </div>
                                    <div class="wt-icon-number"><span>04</span></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                        <div class="service-border-box">
                            <div class="wt-box service-box-1 bg-white">

                                <div class="service-box-title title-style-2 site-text-secondry">
                                    <span class="s-title-one">Agricultural</span>
                                    <span class="s-title-two">Automation</span>
                                </div>
                                <div class="service-box-content">
                                    <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on
                                        low hanging fruit.</p>
                                    <a href="s-agricultural.html" class="site-button-link">Read More</a>
                                </div>

                                <div class="wt-icon-box-wraper">
                                    <div class="wt-icon-box-md site-bg-primary">
                                        <span class="icon-cell text-white"><i class="flaticon-scythe"></i></span>
                                    </div>
                                    <div class="wt-icon-number"><span>05</span></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                        <div class="service-border-box">
                            <div class="wt-box service-box-1 bg-white">

                                <div class="service-box-title title-style-2 site-text-secondry">
                                    <span class="s-title-one">Civil</span>
                                    <span class="s-title-two">Engineering</span>
                                </div>
                                <div class="service-box-content">
                                    <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on
                                        low hanging fruit.</p>
                                    <a href="s-civil.html" class="site-button-link">Read More</a>
                                </div>

                                <div class="wt-icon-box-wraper">
                                    <div class="wt-icon-box-md site-bg-primary">
                                        <span class="icon-cell text-white"><i class="flaticon-helmet"></i></span>
                                    </div>
                                    <div class="wt-icon-number"><span>06</span></div>
                                </div>

                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    <!-- ALL SERVICES SECTION END -->



</div>

@endsection