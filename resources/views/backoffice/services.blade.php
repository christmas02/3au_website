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
                        <h4 class="mb-sm-0">Gestion des Services</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                <li class="breadcrumb-item active">Services</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <!-- SECTION 1 : TYPES DE SERVICES (Catégories) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-start border-info">
                        <div class="card-header bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0 text-info">
                                    <i class="ri-stack-line align-middle me-1"></i> Types de Services
                                </h5>
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#addTypeServiceModal">
                                    <i class="ri-add-line align-middle"></i> Nouveau Type
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th width="50">ID</th>
                                            <th>Libellé du Type</th>
                                            <th>Slug</th>
                                            <th width="150" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Exemple de Type -->
                                        <tr>
                                            <td>1</td>
                                            <td class="fw-bold">Conseil et Stratégie</td>
                                            <td><code class="text-primary">conseil-et-strategie</code></td>
                                            <td class="text-center">
                                                <a href="/modifier/type-service/1" class="btn btn-sm btn-soft-info" title="Modifier">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                                <a href="/supprimer/type-service/1" class="btn btn-sm btn-soft-danger" onclick="return confirm('Supprimer ce type ? Cela peut affecter les services liés.')">
                                                    <i class="ri-delete-bin-line"></i>
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

            <!-- SECTION 2 : LISTE DES SERVICES -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-start border-primary">
                        <div class="card-header bg-light">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0 text-primary">
                                    <i class="ri-customer-service-2-line align-middle me-1"></i> Tous les Services
                                </h5>
                                <a href="{{ route('backoffice.ajoutService') }}" class="btn btn-primary btn-sm">
                                    <i class="ri-add-line align-middle"></i> Ajouter un Service
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Titre du Service</th>
                                            <th>Type / Catégorie</th>
                                            <th>Description</th>
                                            <th width="120" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Exemple de Service -->
                                        <tr>
                                            <td class="fw-medium">Audit Financier</td>
                                            <td>
                                                <span class="badge badge-soft-info fs-12">Conseil et Stratégie</span>
                                            </td>
                                            <td>
                                                <div class="text-muted small" style="max-height: 50px; overflow: hidden; text-overflow: ellipsis;">
                                                    Nous réalisons des audits approfondis pour sécuriser vos investissements et optimiser...
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex gap-2 justify-content-center">
                                                    <a href="/modifier/service/1" class="btn btn-sm btn-info">
                                                        <i class="ri-edit-line"></i>
                                                    </a>
                                                    <a href="/supprimer/service/1" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce service ?')">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination fictive -->
                            <div class="d-flex justify-content-end mt-3">
                                <nav>
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item disabled"><span class="page-link">Précédent</span></li>
                                        <li class="page-item active"><span class="page-link">1</span></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Ajouter Type de Service -->
            <div class="modal fade" id="addTypeServiceModal" tabindex="-1" aria-labelledby="addTypeServiceModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0">
                        <div class="modal-header bg-info-subtle p-3">
                            <h5 class="modal-title" id="addTypeServiceModalLabel">Créer un Type de Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/type-service/store" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="libelle_type_service" class="form-label">Nom de la catégorie (Libellé)</label>
                                    <input type="text" name="libelle_type_service" id="libelle_type_service" class="form-control" placeholder="Ex: Audit, Conseil, Formation" required>
                                </div>
                                <div class="alert alert-soft-warning fs-12">
                                    <i class="ri-information-line me-1"></i> Le <b>slug</b> sera généré automatiquement à partir du nom.
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-info">Enregistrer le type</button>
                            </div>
                        </form>
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
                        Gestion des services
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection