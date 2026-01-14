@extends('backoffice.layout')

@section('content')
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Gestion des Projets & Réalisations</h4>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <!-- SECTION : TYPES DE PROJETS -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-start border-warning">
                        <div class="card-header bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0 text-warning"><i class="ri-price-tag-3-line align-middle me-1"></i> Catégories de Projets</h5>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#addTypeProjetModal">
                                    <i class="ri-add-line align-middle"></i> Nouvelle Catégorie
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Libellé</th>
                                            <th>Slug</th>
                                            <th width="120" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-medium">Infrastructure IT</td>
                                            <td><code class="text-warning">infrastructure-it</code></td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-sm btn-soft-warning"><i class="ri-edit-line"></i></a>
                                                <a href="#" class="btn btn-sm btn-soft-danger"><i class="ri-delete-bin-line"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION : LISTE DES PROJETS -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-start border-primary">
                        <div class="card-header bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0 text-primary"><i class="ri-folders-line align-middle me-1"></i> Liste des Projets</h5>
                                <a href="{{ route('backoffice.ajoutProjet') }}" class="btn btn-primary btn-sm">
                                    <i class="ri-add-line align-middle"></i> Ajouter un Projet
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th width="80">Image</th>
                                            <th>Projet</th>
                                            <th>Client & Temps</th>
                                            <th>Service Lié</th>
                                            <th>Statut</th>
                                            <th width="100" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="https://via.placeholder.com/100x100" class="rounded" style="width:50px; height:50px; object-fit: cover;">
                                            </td>
                                            <td>
                                                <div class="fw-bold">Modernisation DataCenter</div>
                                                <small class="text-muted">Type: Infrastructure</small>
                                            </td>
                                            <td>
                                                <div class="small"><b>Client:</b> Groupe NSIA</div>
                                                <div class="small text-muted"><b>Durée:</b> 6 mois</div>
                                            </td>
                                            <td><span class="badge bg-light text-primary">Conseil IT</span></td>
                                            <td><span class="badge badge-soft-success text-uppercase">Terminé</span></td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Modifier</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Supprimer</a></li>
                                                    </ul>
                                                </div>
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
</div>

<!-- MODAL AJOUT TYPE PROJET -->
<div class="modal fade" id="addTypeProjetModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-warning-subtle p-3">
                <h5 class="modal-title">Nouveau Type de Projet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/type-projet/store" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Libellé du type</label>
                        <input type="text" name="libelle_type_projet" class="form-control" placeholder="Ex: Transformation Digitale" required>
                    </div>
                </div>
                <div class="alert alert-soft-warning fs-12">
                    <i class="ri-information-line me-1"></i> Le <b>slug</b> sera généré automatiquement à partir du nom.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-warning">Créer la catégorie</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection