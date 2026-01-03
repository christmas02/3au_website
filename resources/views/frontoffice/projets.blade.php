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
                        <h2 class="site-text-primary" style="color: #ffff;">Projet</h2>
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
                    <li class="active"><a data-filter="*" href="#">Tout Projets</a></li>
                    <li class=""><a data-filter=".cat-1" href="#">National</a></li>
                    <li class=""><a data-filter=".cat-2" href="#">International</a></li>
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
                <!-- COLUMNS 4 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 0px; top: 555px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/2.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">MCLAU</h3>
                            <p>Révision du Plan Directeur d’Urbanisme de MAN, DUEKOUE, GUIGLO, TOUBA</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/2.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 5 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 380px; top: 555px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/4.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">MCLAU</h3>
                            <p>Révision du Plan Directeur d’Urbanisme d’ODIENNE, MANKONO, MINIGNAN, SEGUELA.</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/4.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 6 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 555px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/5.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">MCLAU</h3>
                            <p>Révision du Plan Directeur d’Urbanisme de KORHOGO, FERKE, KATIOLA, BOUNDIALI.</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/5.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 7 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 0px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/6.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte m-b10 m-t0">MCLAU</h3>
                            <p>Révision du Plan Directeur d’Urbanisme d’ABOISSO, ADZOPE, AGBOVILLE, DIMBOKRO.</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/6.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 5 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 380px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/7.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">BNETD</h3>
                            <p>Plan d’Urbanisme de détail du Grand Abidjan.</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/7.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 6 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/2.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">MCLAU</h3>
                            <p>Plan d’Urbanisme de SONGON, ÎLE BOULEY et EBIMPE</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/2.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 7 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/1.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">PSTCY</h3>
                            <p>Plan d’urbanisme de détail de la zone administrative...</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/1.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 8 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/5.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">BNETD</h3>
                            <p>Plan d’urbanisme de détail quartier Basilique de la ville de Yamoussoukro</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/5.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 9 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/7.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">BNETD</h3>
                            <p>Plan de détail des secteurs Morofé et Morofé Nord à Yamoussoukro</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/7.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 10 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/2.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">CNPS </h3>
                            <p>Programmes immobiliers Logements Sociaux CNPS</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/2.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 11 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/4.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">SCI LES ROSIERS SARL </h3>
                            <p>Programmes immobiliers Sci les ROSIERS</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/4.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 12 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="images/gallery/thumb/6.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">SBATIM </h3>
                            <p>Programmes immobiliers BATIM</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/6.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 13 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/1.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">EQUATEUR-CI </h3>
                            <p>Projet d’aménagement de la zone lagunaire bordant le boulevard de Marseille EQUATEUR-CI</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/1.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 14 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/27.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">MILLENIUM ASSURANCES </h3>
                            <p>Opération le Millenium à Cocody Palmeraie LE MILLENIUM ASSURANCES</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/27.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 15 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/28.jpg" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">RIVIERA BEACH </h3>
                            <p>Opération Riviera beach à Cocody Riviera Golf RIVIERA BEACH</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/28.jpg" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 16 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/5.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">CNPS-CI-PI </h3>
                            <p>Résidence Eve à Angré Djibi CNPS-CI-PI</p>
                            <a href="projet-detail" class="site-button-link">En savoir plus</a>
                        </div>

                        <a href="assets/images/gallery/thumb/5.png" class="mfp-link"><i class="fa fa-search-plus"></i></a>
                    </div>
                </div>
                <!-- COLUMNS 17 -->
                <div class="masonry-item cat-1 col-lg-4 col-md-6 col-sm-6 m-b30" style="position: absolute; left: 760px; top: 1110px;">
                    <div class="project-img-effect-1">
                        <img src="assets/images/gallery/thumb/2.png" alt="">
                        <div class="wt-info">
                            <h3 class="wt-tilte  m-b10 m-t0">GIE SIPIM-ABRI 2000 </h3>
                            <p>Opération Laguna Golf (Cocody Riviera Golf GIE SIPIM-ABRI 2000)</p>
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