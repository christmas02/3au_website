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
                        <h2 class="site-text-primary" style="color: #fff;">Suivie de dossier</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- ALL SERVICES START -->
    <div class="section-full p-t80 p-b40 bg-no-repeat bg-bottom-right bg-cover" style="background-image:url(assets/images/background/bg-7.jpg)">
        <div class="container">
            <div class="section-content">

                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <div>Suivre l'évolution de votre dossier</div>
                        <div class="sep-leaf-right"></div>
                    </div>
                    <h2>Vous avez des questions ou des préoccupations concernant votre dossier, n'hésitez pas!</h2>
                    <br>
                    <br>
                    <div class="widget widget_newsletter">

                        <div class="newsletter-input">
                            <div class="input-group">
                                <input id="serch" type="text" class="form-control" name="serch" placeholder="À indiquer le numero de dossier">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text nl-search-btn text-black site-bg-primary title-style-2">Recherche</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TITLE END-->

                <div class="row d-flex justify-content-center">



                </div>
            </div>
        </div>
    </div>
    <!-- ALL SERVICES SECTION END -->



</div>

@endsection