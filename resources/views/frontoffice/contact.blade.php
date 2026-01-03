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
                        <h2 class="site-text-primary" style="color: #fff;">Nous joindre</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENTG START -->

    <!-- CONTACT FORM -->
    <div class="section-full  p-t80 p-b50 bg-cover" style="background-image:url(assets/images/background/bg-7.jpg)">
        <div class="section-content">
            <div class="container">
                <div class="contact-one">
                    <!-- CONTACT FORM-->
                    <div class="row  d-flex justify-content-center flex-wrap">

                        <div class="col-lg-6 col-md-6 m-b30">
                            <form class="cons-contact-form" method="post"
                                action="https://thewebmax.org/industro/form-handler2.php">
                                <!-- TITLE START -->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div class="sep-leaf-left"></div>
                                        <div>Formulaire de contact</div>
                                        <div class="sep-leaf-right"></div>
                                    </div>
                                    <h2>Entrer en contact</h2>
                                </div>
                                <!-- TITLE END -->

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input name="username" type="text" required class="form-control"
                                                placeholder="Nm">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control" required
                                                placeholder="E-mail">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" required
                                                placeholder="Téléphone">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" class="form-control" required
                                                placeholder="Sujet">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4"
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="site-button site-btn-effect">ENVOYER</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-md-6 m-b30">
                            <div class="contact-info">
                                <div class="contact-info-inner">

                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div class="sep-leaf-left"></div>
                                            <div>Nos contacts</div>
                                            <div class="sep-leaf-right"></div>
                                        </div>
                                        <h2>Nos informations complètes</h2>
                                    </div>
                                    <!-- TITLE END-->

                                    <div class="contact-info-section"
                                        style=" background-color:#2493b3;
                                        background-image:url(images/background/bg-map2.png);">

                                        <div class="wt-icon-box-wraper left m-b30">

                                            <div class="icon-content">
                                                <h3 class="m-t0 site-text-primary">Numéro de téléphone</h3>
                                                <p>(+225) 27 22 52 47 27</p>
                                                <p>(+225) 27 22 52 47 26</p>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left m-b30">

                                            <div class="icon-content">
                                                <h3 class="m-t0 site-text-primary">Adresse e-mail</h3>
                                                <p>bureau3au-ci.com</p>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left m-b30">

                                            <div class="icon-content">
                                                <h3 class="m-t0 site-text-primary">Situation Géographique</h3>
                                                <p>Bd. Latrille, II Plateaux Cocody - 03 BP 2146 Abidjan 03 Abidjan - Côte d’Ivoire</p>
                                            </div>
                                        </div>

                                        <div class="wt-icon-box-wraper left">

                                            <div class="icon-content">
                                                <h3 class="m-t0 site-text-primary">Horaires d'ouvertures</h3>
                                                <ul class="list-unstyled m-b0">
                                                    <li>Lun-ven: 9h00 – 18h00</li>
                                                    <li>Samedi : 9h00 – 16h00</li>
                                                    <li>Dimanche : Fermé</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection