@extends('frontoffice/layout/layout')

@section('content')
<div class="page-content">
    <!-- SLIDER START -->
    <div class="slider-outer">

        <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
            <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-index="rs-901" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb=assets/assets/images/main-slider/slider1/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/assets/images/main-slider/slider1/slide1.jpg" alt="" data-lazyload="assets/images/main-slider/slider1/slide1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 [ for overlay ] -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-901-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>

                        <!-- LAYER NR. 2 [ Black Box ] -->
                        <div class="tp-caption   tp-resizeme site-text-primary rev-title-left-border" id="slide-901-layer-2" data-x="['left','left','left','left']" data-hoffset="['34','34','34','30']" data-y="['top','top','top','top']" data-voffset="['160','160','160','160']" data-fontsize="['48','48','48','34']" data-lineheight="['48','48','48','48']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,4]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,4]" data-paddingleft="[30,30,30,20]" style="z-index: 13;
                                white-space: normal;
                                font-weight: 300;
                                font-family: 'Teko', sans-serif;"><span style="color: #fff;">Le cabinet 3AU</span></div>

                        <!-- LAYER NR. 3 [ for title ] -->
                        <div class="tp-caption   tp-resizeme" id="slide-901-layer-3" data-x="['left','left','left','left']" data-hoffset="[30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['260','250','260','230']" data-fontsize="['120','72','72','38']" data-lineheight="['100','66','48','38']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                white-space: normal;
                                font-weight: 300;
                                color:#fff;
                                border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase;">Services
                            D'urbanisme</div>

                        <!-- LAYER NR. 4 [ for paragraph] -->
                        <div class="tp-caption  tp-resizeme" id="slide-901-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']" data-voffset="['150','10','0','-40']" data-fontsize="['20','20','20','16']" data-lineheight="['30','30','30','22']" data-width="['600','600','90%','90%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                font-weight: 500;
                                color:#fff;
                                border-width:0px;font-family: 'Poppins', sans-serif;">
                            Pour donner un visage de qualité a l’espace
                        </div>

                        <!-- LAYER NR. 5 [ for see all service botton ] -->
                        <div class="tp-caption tp-resizeme" id="slide-901-layer-5" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']" data-voffset="['250','100','100','40']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                            <a href="contact" class="site-button site-btn-effect">Démander un devis</a>
                        </div>

                    </li>

                    <!-- SLIDE 2 -->
                    <li data-index="rs-902" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/images/main-slider/slider1/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/main-slider/slider1/slide2.jpg" alt="" data-lazyload="assets/images/main-slider/slider1/slide2.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 [ for overlay ] -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-902-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>

                        <!-- LAYER NR. 2 [ Black Box ] -->
                        <div class="tp-caption   tp-resizeme site-text-primary rev-title-left-border" id="slide-902-layer-2" data-x="['left','left','left','left']" data-hoffset="['34','34','34','30']" data-y="['top','top','top','top']" data-voffset="['160','160','160','160']" data-fontsize="['48','48','48','34']" data-lineheight="['48','48','48','48']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,4]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,4]" data-paddingleft="[30,30,30,20]" style="z-index: 13;
                                white-space: normal;
                                font-weight: 300;
                                font-family: 'Teko', sans-serif"><span style="color: #fff;">Le cabinet 3AU</span></div>

                        <!-- LAYER NR. 3 [ for title ] -->
                        <div class="tp-caption   tp-resizeme" id="slide-902-layer-3" data-x="['left','left','left','left']" data-hoffset="[30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['260','250','260','230']" data-fontsize="['120','72','72','38']" data-lineheight="['100','66','48','38']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                white-space: normal;
                                font-weight: 300;
                                color:#fff;
                                border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase;">Aménagement Urbain</div>

                        <!-- LAYER NR. 4 [ for paragraph] -->
                        <div class="tp-caption  tp-resizeme" id="slide-902-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']" data-voffset="['150','10','0','-40']" data-fontsize="['20','20','20','16']" data-lineheight="['30','30','30','22']" data-width="['600','600','90%','90%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                font-weight: 500;
                                color:#fff;
                                border-width:0px;font-family: 'Poppins', sans-serif;">
                            S’Attache les services de consultants extérieurs compétente.
                        </div>

                        <!-- LAYER NR. 5 [ for see all service botton ] -->
                        <div class="tp-caption tp-resizeme" id="slide-902-layer-5" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']" data-voffset="['250','100','100','40']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                            <a href="contact" class="site-button site-btn-effect">Démander un devis</a>
                        </div>

                    </li>

                    <!-- SLIDE 3 -->
                    <li data-index="rs-903" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/images/main-slider/slider1/slide1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Title" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/main-slider/slider1/slide3.jpg" alt="" data-lazyload="assets/images/main-slider/slider1/slide3.jpg" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 [ for overlay ] -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-903-layer-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>

                        <!-- LAYER NR. 2 [ Black Box ] -->
                        <div class="tp-caption   tp-resizeme site-text-primary rev-title-left-border" id="slide-903-layer-2" data-x="['left','left','left','left']" data-hoffset="['34','34','34','30']" data-y="['top','top','top','top']" data-voffset="['160','160','160','160']" data-fontsize="['48','48','48','34']" data-lineheight="['48','48','48','48']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,4]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,4]" data-paddingleft="[30,30,30,20]" style="z-index: 13;
                                white-space: normal;
                                font-weight: 300;
                                font-family: 'Teko', sans-serif"> <span style="color: #fff;">Le cabinet 3AU</span></div>

                        <!-- LAYER NR. 3 [ for title ] -->
                        <div class="tp-caption   tp-resizeme" id="slide-903-layer-3" data-x="['left','left','left','left']" data-hoffset="[30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['260','250','260','230']" data-fontsize="['120','72','72','38']" data-lineheight="['100','66','48','38']" data-width="['700','700','96%','96%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[5,5,5,5]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                white-space: normal;
                                font-weight: 300;
                                color:#fff;
                                border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase;">Aménagement Urbain</div>

                        <!-- LAYER NR. 4 [ for paragraph] -->
                        <div class="tp-caption  tp-resizeme" id="slide-903-layer-4" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']" data-voffset="['150','10','0','-40']" data-fontsize="['20','20','20','16']" data-lineheight="['30','30','30','22']" data-width="['600','600','90%','90%']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                font-weight: 500;
                                color:#fff;
                                border-width:0px;font-family: 'Poppins', sans-serif;">
                            S’Attache les services de consultants extérieurs compétente.
                        </div>

                        <!-- LAYER NR. 5 [ for see all service botton ] -->
                        <div class="tp-caption tp-resizeme" id="slide-903-layer-5" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['middle','middle','middle','middle']" data-voffset="['250','100','100','40']" data-lineheight="['none','none','none','none']" data-width="['300','300','300','300']" data-height="['none','none','none','none']" data-whitespace="['normal','normal','normal','normal']" data-type="text" data-responsive_offset="on" data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                            <a href="contact" class="site-button site-btn-effect">Démander un devis</a>
                        </div>


                    </li>

                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>

    </div>
    <!-- SLIDER END -->

    <!-- ABOUT SECTION START -->
    <div class="section-full welcome-section-outer">
        <div class="welcome-section-top bg-white p-t80 p-b50">
            <div class="container">
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-10 col-md-12 m-b30">
                        <div class="welcom-to-section">
                            <!-- TITLE START-->
                            <div class="left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div class="sep-leaf-left"></div>
                                    <div>Qui somme nous ?</div>
                                    <div class="sep-leaf-right"></div>
                                </div>
                            </div>
                            <h2>{!! $data->titre_section_one !!}</h2>
                            <!-- TITLE END-->
                            {!! $data->description_section_one !!}
                        </div>
                        <hr>
                        <div class="welcom-to-section-bottom d-flex justify-content-between">
                            <div class="welcom-btn-position"><a href="/qui-somme-nous" class="site-button-secondry site-btn-effect">lire plus </a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION  SECTION END -->

    <!-- ABOUT SECTION START -->
    <div class="section-full welcome-section-outer">
        <div class="welcome-section-top bg-white p-tb80">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-12">
                        <div class="img-colarge">
                            <div class="colarge-1"><img src="assets/images/colarge/s1.jpg" alt="" class="slide-righ">
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="welcom-to-section">
                            <!-- TITLE START-->
                            <div class="left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div class="sep-leaf-left"></div>
                                    <div>Notre directeur vous entretien </div>
                                    <div class="sep-leaf-right"></div>
                                </div>
                            </div>
                            <h2>{!! $data->titre_section_two !!}</h2>
                            <!-- TITLE END-->

                            {!! $data->description_section_two !!}
                            <hr>
                            <div class="welcom-to-section-bottom d-flex justify-content-between">
                                <div class="welcom-btn-position"><a href="/directeur" class="site-button-secondry site-btn-effect">lire plus </a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION  SECTION END -->

    <!-- SERVICES SECTION START -->
    <div class="section-full p-t80 p-b70 overlay-wraper bg-no-repeat bg-bottom-left bg-cover services-main-section" style="background-image:url(assets/images/background/bg-3.jpg)">
        <div class="overlay-main site-bg-secondry opacity-08"></div>

        <div class="section-content services-section-content">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="services-section-content-left">
                        <!-- TITLE START-->
                        <div class="left wt-small-separator-outer text-white">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <div></div>
                                <div class="sep-leaf-right"></div>
                            </div>
                            <h2>Notre domaine d'expetise</h2>
                            <p>
                                Maintenir progressivement un aménagement urbain étendus via une expérience de plusieurs années.
                            </p>
                            <a href="#" class="site-button site-btn-effect">Services</a>
                        </div>
                        <!-- TITLE END-->
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="services-section-content-right">
                        <div class="owl-carousel services-slider owl-btn-vertical-center">

                            <div class="item">
                                <div class="wt-box service-box-1 bg-white">

                                    <div class="service-box-title title-style-2 site-text-secondry">
                                        <span class="s-title-one">Gestion territoriale  & </span>
                                        <span class="s-title-two">gouvernance locale</span>
                                    </div>
                                    <div class="service-box-content">
                                        <p>
                                            Structuration et gestion de l’Urbanisme en milieu décentralisé
                                            Bonne gouvernance, renforcement des capacités

                                        </p>
                                        <a href="/gestion-territoriale" class="site-button-link">En savoir plus</a>
                                    </div>

                                    <div class="wt-icon-box-wraper">
                                        <div class="wt-icon-box-md site-bg-primary">
                                            <span class="icon-cell text-white"><i class="flaticon-industry"></i></span>
                                        </div>
                                        <div class="wt-icon-number"><span>01</span></div>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="wt-box service-box-1 bg-white">

                                    <div class="service-box-title title-style-2 site-text-secondry">
                                        <span class="s-title-one">Développement</span>
                                        <span class="s-title-two">économique</span>
                                    </div>
                                    <div class="service-box-content">
                                        <p>
                                            Développement économique urbain
                                            Revitalisation urbaine
                                            Renforcement et valorisation des artères commerciales
                                            Plan stratégique...
                                        </p>
                                        <a href="/developpement-economique" class="site-button-link">En savoir plus</a>
                                    </div>

                                    <div class="wt-icon-box-wraper">
                                        <div class="wt-icon-box-md site-bg-primary">
                                            <span class="icon-cell text-white"><i class="flaticon-conveyor"></i></span>
                                        </div>
                                        <div class="wt-icon-number"><span>02</span></div>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="wt-box service-box-1 bg-white">

                                    <div class="service-box-title title-style-2 site-text-secondry">
                                        <span class="s-title-one">Développement </span>
                                        <span class="s-title-two">Urbain</span>
                                    </div>
                                    <div class="service-box-content">
                                        <p>
                                            aménagement et planification urbaine
                                            Schéma directeur d’urbanisme, Plan de structure, Plan d’urbanisme de détail. Etc…
                                            Lotissement...

                                        </p>
                                        <a href="/developpement-urbain" class="site-button-link">En savoir plus</a>
                                    </div>

                                    <div class="wt-icon-box-wraper">
                                        <div class="wt-icon-box-md site-bg-primary">
                                            <span class="icon-cell text-white"><i class="flaticon-robotic-arm"></i></span>
                                        </div>
                                        <div class="wt-icon-number"><span>03</span></div>
                                    </div>

                                </div>
                            </div>

                           <div class="item">
                                <div class="wt-box service-box-1 bg-white">

                                    <div class="service-box-title title-style-2 site-text-secondry">
                                        <span class="s-title-one">Gestion</span>
                                        <span class="s-title-two">de projet</span>
                                    </div>
                                    <div class="service-box-content">
                                        <p>
                                            Identification de projets bancables
                                            Etudes de faisabilité
                                            Montage institutionnel et financier
                                            Gestion et évaluation de projet…
                                        </p>
                                        <a href="/gestion-de-projet" class="site-button-link">En savoir plus</a>
                                    </div>

                                    <div class="wt-icon-box-wraper">
                                        <div class="wt-icon-box-md site-bg-primary">
                                            <span class="icon-cell text-white"><i class="flaticon-oil"></i></span>
                                        </div>
                                        <div class="wt-icon-number"><span>04</span></div>
                                    </div>

                                </div>
                            </div>
                            <!--
                            <div class="item">
                                <div class="wt-box service-box-1 bg-white">

                                    <div class="service-box-title title-style-2 site-text-secondry">
                                        <span class="s-title-one">Agricultural</span>
                                        <span class="s-title-two">Automation</span>
                                    </div>
                                    <div class="service-box-content">
                                        <p>Progressively maintain extensive infomediaries via extensible nich.
                                            Capitalize on low hanging fruit.</p>
                                        <a href="s-agricultural.html" class="site-button-link">En savoir plus</a>
                                    </div>

                                    <div class="wt-icon-box-wraper">
                                        <div class="wt-icon-box-md site-bg-primary">
                                            <span class="icon-cell text-white"><i class="flaticon-scythe"></i></span>
                                        </div>
                                        <div class="wt-icon-number"><span>05</span></div>
                                    </div>

                                </div>
                            </div>

                            <div class="item">
                                <div class="wt-box service-box-1 bg-white">

                                    <div class="service-box-title title-style-2 site-text-secondry">
                                        <span class="s-title-one">Civil</span>
                                        <span class="s-title-two">Engineering</span>
                                    </div>
                                    <div class="service-box-content">
                                        <p>Progressively maintain extensive infomediaries via extensible nich.
                                            Capitalize on low hanging fruit.</p>
                                        <a href="s-civil.html" class="site-button-link">En savoir plus</a>
                                    </div>

                                    <div class="wt-icon-box-wraper">
                                        <div class="wt-icon-box-md site-bg-primary">
                                            <span class="icon-cell text-white"><i class="flaticon-helmet"></i></span>
                                        </div>
                                        <div class="wt-icon-number"><span>06</span></div>
                                    </div>

                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- SERVICES SECTION END -->


    <!-- VIDEO SECTION START -->
    <div class="section-full video-counter-section p-t80 bg-white">

        <div class="video-counter-bg-white">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <div>Nos solutions</div>
                        <div class="sep-leaf-right"></div>
                    </div>
                    <h2>Obtenez une solution pour tous vos plan Ubain</h2>
                </div>
                <!-- TITLE END-->
            </div>
        </div>

        <div class="video-counter-bg-image overlay-wraper bg-cover bg-no-repeat" style="background-image:url(assets/images/background/bg-2.jpg);">
            <div class="overlay-main site-bg-secondry opacity-09" style="background-color:#0d485999;"></div>

            <div class="video-section-outer mfp-gallery">
                <div class="video-section">
                    <a href="https://youtu.be/S5dOHs1rYwU" class="mfp-video play-now">
                        <i class="icon fa fa-play"></i>
                        <span class="ripple"></span>
                    </a>
                </div>
            </div>

            <div class="container">
                <div class="counter-section-outer-top">
                    <div class="counter-outer">

                        <div class="row justify-content-center">

                            <div class="col-lg-4 col-md-4 m-b30 ">
                                <div class="wt-icon-box-wraper center">
                                    <h2 class="counter site-text-primary">35</h2>
                                    <span class="site-text-white title-style-2">Projets terminés</span>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 m-b30">
                                <div class="wt-icon-box-wraper center">
                                    <h2 class="counter site-text-primary">10</h2>
                                    <span class="site-text-white title-style-2">Travail employé</span>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 m-b30">
                                <div class="wt-icon-box-wraper center">
                                    <h2 class="counter site-text-primary">750</h2>
                                    <span class="site-text-white title-style-2">Plan d'urbain en cours</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- VIDEO SECTION  SECTION END -->

    <!-- OUR TEAM START -->
    <div class="section-full p-t80 p-b50 bg-white team-bg-section-outer">
        <div class="team-bg-map site-bg-secondry bg-repeat-x" style="background-image:url(assets/images/background/bg-map2.png)"></div>
        <div class="container">
            <div class="section-content">

                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer text-center">
                    <div class="wt-small-separator site-text-primary">
                        <div class="sep-leaf-left"></div>
                        <div>Nos Expert</div>
                        <div class="sep-leaf-right"></div>
                    </div>
                    <h2>Une équipe dynamique, complémentaire et compétente</h2>
                    <p>
                        Pour mener à bien sa mission, l’agence dispose d’un moyen
                        humain représentatif aux compétences variées
                    </p>
                </div>
                <!-- TITLE END-->

                <div class="section-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media">
                                    <img src="assets/images/team/pic1.jpg" alt="">
                                    <div class="team-social-center">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30  p-b0">
                                    <div class="team-detail  text-center">
                                        <h3 class="m-t0 team-name"><a href="team-single.html" class=" site-text-white">BOSSON N’Djaboué Arsène </a></h3>
                                        <span class="title-style-2 team-position site-text-primary" style="color: #fff;">Directeur technique Coordination & Chargé C.U. O</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media">
                                    <img src="assets/images/team/pic2.jpg" alt="">
                                    <div class="team-social-center">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30  p-b0">
                                    <div class="team-detail  text-center">
                                        <h3 class="m-t0 team-name"><a href="team-single.html" class=" site-text-white">KOUASSI Kouamé David </a></h3>
                                        <span class="title-style-2 team-position site-text-primary" style="color: #fff;">Responsable C.U.P. R</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="wt-team-1">

                                <div class="wt-media">
                                    <img src="assets/images/team/pic3.jpg" alt="">
                                    <div class="team-social-center">
                                        <ul class="team-social-bar">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="wt-info p-a30 p-b0">
                                    <div class="team-detail  text-center">
                                        <h3 class="m-t0 team-name"><a href="team-single.html" class=" site-text-white">DANVIDE Bénoît</a></h3>
                                        <span class="title-style-2 team-position site-text-primary" style="color: #fff;">Consultants</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- OUR TEAM SECTION END -->


    <!-- CLIENT LOGO SECTION START -->
    <div class="section-full bg-gray">
        <div class="container">
            <div class="section-content">

                <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                <div class="section-content">
                    <div class="section-content p-tb30 owl-btn-vertical-center">
                        <div class="owl-carousel home-client-carousel-2">
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="assets/images/client-logo/w1.png" width="97" height="90" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="assets/images/client-logo/w2.png" width="97" height="90" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="assets/images/client-logo/w3.png" width="97" height="90" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="assets/images/client-logo/w4.png" width="97" height="90" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="assets/images/client-logo/w5.png" width="97" height="90" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                        <a href="javascript:void(0);"><img src="assets/images/client-logo/w6.png" width="97" height="90" alt=""></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CLIENT LOGO  SECTION End -->
</div>

@endsection
