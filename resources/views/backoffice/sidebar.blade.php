
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('/assets/images/logo-light.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/assets/images/logo-light.png')}}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('/assets/images/logo-light.png')}}" alt="" height="17ss">
            </span>
            <span class="logo-lg">
                <img src="{{asset('/assets/images/logo-light.png')}}" alt="" height="50">
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
                    <a href="{{ route('backoffice.espace') }}" class="nav-link menu-link {{ request()->routeIs('backoffice.espace') ? 'active' : '' }}" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-dashboard-2-line"></i> <span data-key=""> <b>Tableau de bord</b> </span>
                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pages-line"></i> <span data-key=""> <b>Gestion de pages</b> </span>
                    </a>

                    <div class="col-lg-12">
                        <ul class="nav nav-sm flex-column">
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-alerts">Acceuil</a>
                                <a href="#" class="nav-link" data-key="t-alerts">Services</a>
                                <a href="#" class="nav-link" data-key="t-alerts">Projets</a>
                                <a href="#" class="nav-link" data-key="t-alerts">Carrieres</a>
                                <a href="#" class="nav-link" data-key="t-alerts">Messageries</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link menu-link" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-account-circle-line"></i> <span data-key=""> <b>Gestion des utilisateurs</b> </span>
                    </a>

                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->