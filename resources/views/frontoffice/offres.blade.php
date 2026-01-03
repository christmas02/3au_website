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
                        <h2 class="site-text-primary" style="color: #fff;">Postuler à l'offre</h2>
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
                        <div>Ce qu'il faut savoir sur l'offre</div>
                        <div class="sep-leaf-right"></div>
                    </div>
                    <h3>Chez nous, vous serez habilité à travailler sur des choses qui vous 
                        passionnent. Vous aurez l’autonomie. Vos idées seront importantes.</h3>
                    <br>
                    
                </div>
                <!-- TITLE END-->
                
                <!--IMAGE START-->
                
                <div class="row  d-flex justify-content-center flex-wrap">

                    <div class="col-lg-4 col-md-4 m-b30">
                        <div class="img-colarge">
                            <div class="colarge-3"><img src="assets/images/colarge/blog-3.png" alt="" class="slide-righ">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 m-b30">
                        <div class="img-colarge">
                            <div class="colarge-4"><img src="assets/images/colarge/blog-5.png" alt="" class="slide-righ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 m-b30">
                        <div class="img-colarge">
                            <div class="colarge-4"><img src="assets/images/colarge/blog-9.png" alt="" class="slide-righ">
                            </div>
                        </div>
                    </div>

                </div>
                <!--IMAGE START-->

                 <!-- TITLE START-->
                 <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div>Engagez-vous pour un monde d'aménagement urbain meilleure</div>
                    </div>
                    <p>Chez nous, nous sommes enthousiastes et engagés dans tout ce 
                        que nous faisons : Innovation, Expérience Client, diversité ou projets personnels.</p>
                    
                </div>
                <!-- TITLE END-->

                <div class="contact-one">
                    <!-- CONTACT FORM-->
                    <div class="row  d-flex justify-content-center flex-wrap">

                        <div class="col-lg-12 col-md-12 m-b30">
                            <form class="cons-contact-form" method="post" action="https://thewebmax.org/industro/form-handler2.php">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input name="username" type="text" required class="form-control"
                                                placeholder="Nm">
                                        </div>
                                        
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control" required
                                                placeholder="E-mail">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Pourquoi devrions nous vous choisir ?"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            
                                            <textarea name="message" class="form-control" rows="4" placeholder="Parler nous de vous"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4"
                                                placeholder="Que recherchez vous en travaillant avec nous"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for=""> <p>Votre Curriculum vitæ</p></label>
                                            <input name="file" type="file" class="" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="site-button site-btn-effect">ENVOYER</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ALL SERVICES SECTION END -->


</div>

@endsection