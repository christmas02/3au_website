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
                        <h2 class="site-text-primary" style="color: #ffff;">Projet international</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <!-- 
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>Project Grid</li>
                    </ul>
                </div> -->

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- GALLERY SECTION START -->
    <div class="section-full p-t80 p-b50 bg-white">
        <div class="container">
            <!-- PAGINATION START -->
            <div class="filter-wrap work-grid p-b30 text-center">
                <ul class="masonry-filter link-style ">
                    <!-- <li class="active"><a data-filter="*" href="#">Tout Projets</a></li> -->
                    <!-- <li class=""><a data-filter=".cat-1" href="#">National</a></li> -->
                    <li class=""><a data-filter=".cat-2" href="#">Projet International</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->

            <!-- GALLERY CONTENT START -->
            <div class="masonry-wrap mfp-gallery  row clearfix d-flex justify-content-center flex-wrap" style="position: relative; height: 1665px;">
                <!-- COLUMNS 1 -->
                <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 0px; top: 0px;">

                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/28.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte m-b10 m-t0">UEMOA</h3>
                            <p>Etude sur la promotion du marché foncier urbain au sein de l’espace UEMOA</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/28.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>


                </div>
                <!-- COLUMNS 2 -->
                <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 380px; top: 0px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/1.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte m-b10 m-t0">CGE Immobilier</h3>
                            <p>Programme immobilier « ville nouvelle du YENNENGA  » au BURKINA FASO (Koubri) 600 hectares</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/1.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 3 -->
                <div class="masonry-item cat-2 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 0px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/2.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">SOMAPIM </h3>
                            <p>Programme immobilier SOMAPIM  au MALI <br>(Kali Sananfara)</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/2.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div> 
            </div>
            <!-- GALLERY CONTENT END -->
        </div>
    </div>
    <!-- GALLERY SECTION END -->

</div>

@endsection