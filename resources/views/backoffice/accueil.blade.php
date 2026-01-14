@extends('backoffice.layout')

@section('content')
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- TITRE DE LA PAGE -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Gestion de la Page d'Accueil</h4>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <!-- SECTION 1 : DIAPORAMA (SLIDERS) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-soft-primary">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Gestion du Diaporama (Sliders)</h5>
                                <a href="{{ route('backoffice.slider') }}" class="btn btn-success btn-sm">Ajouter un slider</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Image</th>
                                            <th>Titre</th>
                                            <th>Sous-titre</th>
                                            <th>Lien</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Exemple 1 -->
                                        <tr>
                                            <td><img src="https://via.placeholder.com/800x400.png?text=Slider+1" style="width:100px; height:50px; object-fit: cover; border-radius: 4px;"></td>
                                            <td>Bienvenue chez 3AU</td>
                                            <td>L'expertise à votre service</td>
                                            <td><a href="https://google.com" target="_blank">Lien externe</a></td>
                                            <td>
                                                <a href="{{ route('backoffice.detailSlide', 1) }}" class="btn btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                <a href="/supprimer/slider/1" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')"><i class="ri-delete-bin-line"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <!-- SECTION : QUI SOMMES-NOUS -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-start border-primary">
                        <div class="card-header bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0 text-primary"><i class="ri-community-line align-middle me-1"></i> Section : Qui Sommes-Nous</h5>
                                <a href="{{ route('backoffice.ajoutContenu') }}" class="btn btn-sm btn-outline-primary">Modifier les textes</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th width="20%">Titre principal</th>
                                            <th width="25%">Sous-titre</th>
                                            <th>Description / Texte de présentation</th>
                                            <th width="100">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold">Qui sommes-nous ?</td>
                                            <td class="text-muted small">Notre expertise à votre service depuis 10 ans</td>
                                            <td>
                                                <div class="text-muted small" style="max-height: 60px; overflow: hidden;">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="/modifier/accueil-contenu/1" class="btn btn-sm btn-soft-primary" title="Modifier cette section">
                                                    <i class="ri-edit-box-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION : LE MOT DU DIRECTEUR -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-start border-success">
                        <div class="card-header bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0 text-success"><i class="ri-user-voice-line align-middle me-1"></i> Section : Le Mot du Directeur</h5>
                                <a href="{{ route('backoffice.ajoutContenu') }}" class="btn btn-sm btn-outline-success">Modifier le mot du DG</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th width="10%">Photo</th>
                                            <th width="20%">Directeur / Signataire</th>
                                            <th width="20%">Titre & Sous-titre</th>
                                            <th>Texte du message</th>
                                            <th width="15%">Signature</th>
                                            <th width="80">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <img src="https://via.placeholder.com/150/000000/FFFFFF?text=Directeur" style="width:60px; height:60px; border-radius: 8px; object-fit: cover; border: 1px solid #eee;">
                                            </td>
                                            <td>
                                                <div class="fw-bold">M. Jean Paul Durand</div>
                                                <span class="badge badge-soft-success">Directeur Général</span>
                                            </td>
                                            <td>
                                                <div class="fw-medium text-success small">Le mot du Directeur</div>
                                                <div class="text-muted smaller" style="font-size: 11px;">Engagement et Vision</div>
                                            </td>
                                            <td>
                                                <div class="text-muted small" style="max-height: 60px; overflow: hidden;">
                                                    "C'est avec une immense fierté que je vous accueille sur notre plateforme. Notre mission reste l'excellence..."
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <img src="https://via.placeholder.com/100x40/ffffff/000000?text=Signature" style="width:80px; height:auto; filter: grayscale(1);">
                                            </td>
                                            <td class="text-center">
                                                <a href="/modifier/accueil-contenu/1" class="btn btn-sm btn-soft-success" title="Modifier cette section">
                                                    <i class="ri-edit-box-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION : NOS EXPERTS / EQUIPE -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Nos Experts / Équipe</h4>
                            <div class="flex-shrink-0">
                                <a href="/ajout/expert" class="btn btn-success btn-sm">Ajouter un membre</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th width="80">Photo</th>
                                            <th>Nom complet</th>
                                            <th>Poste / Fonction</th>
                                            <th width="150">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="https://via.placeholder.com/100/34c38f/FFFFFF?text=EX" class="rounded-circle" style="width:50px; height:50px; object-fit: cover;">
                                            </td>
                                            <td>Alice Martin</td>
                                            <td>Consultante Senior</td>
                                            <td>
                                                <a href="/modifier/expert/1" class="btn btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                <a href="/supprimer/expert/1" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce membre ?')"><i class="ri-delete-bin-line"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION : PARTENAIRES -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Nos Partenaires</h4>
                            <div class="flex-shrink-0">
                                <a href="/ajout/partenaire" class="btn btn-success btn-sm">Ajouter un partenaire</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th width="150">Logo</th>
                                            <th>Nom du partenaire</th>
                                            <th>Lien Web</th>
                                            <th width="150">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <img src="https://via.placeholder.com/120x60/f3f3f3/000000?text=LOGO+1" style="max-width:120px; max-height:60px; object-fit: contain;">
                                            </td>
                                            <td>Partenaire Stratégique S.A.</td>
                                            <td>www.partenaire.com</td>
                                            <td>
                                                <a href="/modifier/partenaire/1" class="btn btn-sm btn-info"><i class="ri-edit-line"></i></a>
                                                <a href="/supprimer/partenaire/1" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce partenaire ?')"><i class="ri-delete-bin-line"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © 3AU.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Tous droits réservés.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection