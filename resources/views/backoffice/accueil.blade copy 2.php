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
                    <div class="card">
                        <div class="card-header bg-soft-primary">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Gestion du Diaporama (Sliders)</h5>
                                <a href="/ajout/slider" class="btn btn-success">Ajouter une image au slider</a>
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
                                        @foreach($sliders as $slider)
                                        <tr>
                                            <td><img src="{{ env('IMAGES_PATH') }}/{{ $slider->image }}" style="width:100px; height:50px; object-fit: cover;"></td>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->subtitle }}</td>
                                            <td><a href="{{ $slider->lnk }}" target="_blank">Lien</a></td>
                                            <td>
                                                <a href="/modifier/slider/{{ $slider->id }}" class="btn btn-sm btn-info">Modifier</a>
                                                <a href="/supprimer/slider/{{ $slider->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')">Supprimer</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2 : CONTENU DES SECTIONS (ACCEUILS) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-soft-secondary">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Autres Contenus de l'Accueil</h5>
                                <!-- Souvent un seul enregistrement pour l'accueil, donc on vérifie s'il existe -->
                                @if($acceuils->isEmpty())
                                <a href="/ajout/accueil-contenu" class="btn btn-primary">Initialiser le contenu</a>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Section 1 (Titre)</th>
                                            <th>Section 2 (Titre)</th>
                                            <th>Signataire</th>
                                            <th>Photo Directeur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($acceuils as $item)
                                        <tr>
                                            <td>{{ $item->titre_section_one }}</td>
                                            <td>{{ $item->titre_section_two }}</td>
                                            <td>{{ $item->nom_signataire }}</td>
                                            <td>
                                                <img src="{{ env('IMAGES_PATH') }}/{{ $item->image_directeur }}" style="width:42px; height:42px; border-radius: 50%;">
                                            </td>
                                            <td>
                                                <a href="/modifier/accueil-contenu/{{ $item->id }}" class="btn btn-sm btn-warning">Editer le contenu complet</a>
                                            </td>
                                        </tr>
                                        @endforeach
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
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Nos Experts / Équipe</h4>
                            <div class="flex-shrink-0">
                                <a href="/ajout/expert" class="btn btn-success">Ajouter un membre</a>
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
                                        @foreach($experts as $expert)
                                        <tr>
                                            <td>
                                                <img src="{{ env('IMAGES_PATH') }}/{{ $expert->image }}" class="rounded-circle" style="width:50px; height:50px; object-fit: cover;">
                                            </td>
                                            <td>{{ $expert->nom }}</td>
                                            <td>{{ $expert->poste }}</td>
                                            <td>
                                                <a href="/modifier/expert/{{ $expert->id }}" class="btn btn-sm btn-info">Modifier</a>
                                                <a href="/supprimer/expert/{{ $expert->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce membre ?')">Supprimer</a>
                                            </td>
                                        </tr>
                                        @endforeach
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
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Nos Partenaires</h4>
                            <div class="flex-shrink-0">
                                <a href="/ajout/partenaire" class="btn btn-success">Ajouter un partenaire</a>
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
                                        @foreach($partenaires as $partenaire)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ env('IMAGES_PATH') }}/{{ $partenaire->logo }}" style="max-width:120px; max-height:60px;">
                                            </td>
                                            <td>{{ $partenaire->nom }}</td>
                                            <td>{{ $partenaire->lien_web ?? 'N/A' }}</td>
                                            <td>
                                                <a href="/modifier/partenaire/{{ $partenaire->id }}" class="btn btn-sm btn-info">Modifier</a>
                                                <a href="/supprimer/partenaire/{{ $partenaire->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce partenaire ?')">Supprimer</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 3 : ARTICLES (VOTRE CODE ORIGINAL) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <a href="/ajout/article" class="btn btn-success">Ajouter un article</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <td>Image</td>
                                            <th width="150">Titre</th>
                                            <th width="300">Résumé du contenue</th>
                                            <th width="80">Création le</th>
                                            <th width="130">Dernier mise a jour</th>
                                            <th>Statut / Etiquette</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($articles as $contenu)
                                        <tr>
                                            <td><img src="{{ env('IMAGES_PATH') }}/{{ $contenu['image'] }}" style="width:42px; height:42px;"></td>
                                            <td>{{ $contenu['titre'] }}</td>
                                            <td>{!! Str::limit($contenu['resumer'], 50) !!}</td>
                                            <td>{{ \Carbon\Carbon::parse($contenu['created_at'])->format('M d, Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($contenu['updated_at'])->format('M d, Y') }}</td>
                                            <td>
                                                <div class="d-flex flex-column gap-1">
                                                    @if($contenu['archives'] == 0)
                                                    <span class="badge bg-info">Article publié</span>
                                                    @else
                                                    <span class="badge bg-danger">Non publié</span>
                                                    @endif

                                                    @if($contenu['ethiquette'] == 1)
                                                    <span class="badge bg-success">Actualité & médias</span>
                                                    @elseif($contenu['ethiquette'] == 2)
                                                    <span class="badge bg-warning text-dark">Publications</span>
                                                    @else
                                                    <span class="badge bg-secondary">Non attribué</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <a href="/detail_article/{{ $contenu['id'] }}" class="btn btn-sm btn-success">Voir</a>
                                            </td>
                                        </tr>
                                        @endforeach
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
                    <script>document.write(new Date().getFullYear())</script> © 3AU.
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