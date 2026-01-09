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
                        <h2 class="site-text-primary" style="color: #fff;">Mot du Directeur</h2>
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
                <!-- mots debut -->

                <div class="section-full welcome-section-outer">
                    <div class="welcome-section-top bg-white p-tb80">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="img-colarge">
                                        <div class="colarge-1"><img src="assets/images/colarge/s1.jpg" alt="" class="slide-righ"></div>
                                        <!--  -->
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="welcom-to-section">
                                        <!-- TITLE START-->
                                        <div class="left wt-small-separator-outer">
                                            <div class="wt-small-separator site-text-primary">
                                                <div class="sep-leaf-left"></div>
                                                <div>Bienvenue</div>
                                                <div class="sep-leaf-right"></div>
                                            </div>
                                        </div>
                                        <h2>{!! $data->sous_titre_section_two !!}</h2>
                                        {!! $data->contenue_section_two !!}

                                        <div class="welcom-to-section-bottom d-flex justify-content-between">
                                            <div class="welcom-sign-pic"><img src="assets/images/sign.png" alt=""></div>
                                            <div class="welcom-sign-info"><strong>{!! $data->nom_signataire !!}</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- fin mots -->
                
            </div>
        </div>
    </div>
    <!-- ALL SERVICES SECTION END -->



</div>

@endsection