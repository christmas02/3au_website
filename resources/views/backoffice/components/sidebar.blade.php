
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('/template/image/Logo_multipalms.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/template/image/Logo_multipalms.png')}}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('/template/image/Logo_multipalms_footer.png')}}" alt="" height="17ss">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/template/image/Logo_multipalms_footer.png')}}" alt="" height="60">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>

            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key=""> <b>Tableau de bord</b> </span>
                    </a>
                    <div class="col-lg-12">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/espace" class="nav-link" data-key="t-alerts">Tableau de bord</a>
                            </li>
                            <li class="nav-item">
                                <a href="/liste/articles" class="nav-link" data-key="t-alerts">Nos publications</a>
                            </li>
                            <li class="nav-item">
                                <a href="/liste/campagnes" class="nav-link" data-key="t-alerts">Missions de terrain
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/liste/categories" class="nav-link" data-key="t-alerts">Catégories</a>
                            </li>

                            <li class="nav-item">
                                <a href="/liste/messages" class="nav-link" data-key="t-alerts">Messages</a>
                            </li>
                        </ul>
                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key=""> <b>Gestion de pages</b> </span>
                    </a>

                    <div class="col-lg-12">
                        <ul class="nav nav-sm flex-column">
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-alerts">page 1</a>
                                <a href="#" class="nav-link" data-key="t-alerts">page 2</a>
                                <a href="#" class="nav-link" data-key="t-alerts">page 3</a>
                                <a href="#" class="nav-link" data-key="t-alerts">page 4</a>
                                <a href="#" class="nav-link" data-key="t-alerts">page 5</a>
                            </li>
                            

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key=""> <b>Pays</b> </span>
                    </a>

                    <div class="col-lg-12">
                        <ul class="nav nav-sm flex-column">
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-alerts">pays 1</a>
                                <a href="#" class="nav-link" data-key="t-alerts">pays 1</a>
                                <a href="#" class="nav-link" data-key="t-alerts">pays 1</a>
                                <a href="#" class="nav-link" data-key="t-alerts">pays 1</a>
                            </li>
                           

                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key=""> <b>Administrateur</b> </span>
                    </a>

                    <div class="col-lg-12">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/ajout/contenue" class="nav-link" data-key="t-alerts">Ajouter un contenue</a>
                            </li>
                            <li class="nav-item">
                                <a href="/liste/administrateur" class="nav-link" data-key="t-alerts">Liste Administrateurs</a>
                            </li>

                        </ul>
                    </div>

                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->