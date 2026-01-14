@extends('backoffice.layout')

@section('content')
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- TITRE DE LA PAGE -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Gestion des Utilisateurs</h4>
                        <div class="page-title-right">
                            <!-- Bouton d'ajout souvent manquant dans la liste -->
                            <a class="btn btn-primary btn-sm" href="{{ route('backoffice.createAdministrator') }}">
                                <i class="ri-user-add-line align-middle me-1"></i> Ajouter un administrateur
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-soft-light border-bottom-dashed">
                            <h5 class="card-title mb-0">Liste des accès administratifs</h5>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="table table-hover align-middle table-nowrap mb-0">
                                    <thead class="table-light text-muted">
                                        <tr>
                                            <th style="width: 50px;">#</th>
                                            <th>Utilisateur</th>
                                            <th>Contact</th>
                                            <th>Rôle</th>
                                            <th>Statut</th>
                                            <th class="text-center" style="width: 120px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- ADMINISTRATEUR 1 -->
                                        <tr>
                                            <td>01</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-soft-danger text-danger fw-bold">MT</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Marc-Antoine Traoré</h6>
                                                        <p class="text-muted mb-0 small">Dernière connexion : Aujourd'hui</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small fw-medium">m.traore@3au.ci</div>
                                                <div class="text-muted small">+225 07 01 02 03 04</div>
                                            </td>
                                            <td>
                                                <span class="badge bg-soft-danger text-danger fs-11 text-uppercase">Super Admin</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-success-subtle text-success fs-11"><i class="ri-checkbox-circle-line align-bottom me-1"></i> Actif</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex gap-2 justify-content-center">
                                                    <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal1">
                                                        <i class="ri-pencil-line"></i>
                                                    </button>
                                                    <button class="btn btn-soft-danger btn-sm" title="Supprimer">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- ADMINISTRATEUR 2 -->
                                        <tr>
                                            <td>02</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary fw-bold">SK</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fs-14 mb-1">Sarah Koné</h6>
                                                        <p class="text-muted mb-0 small">Dernière connexion : Hier</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small fw-medium">s.kone@3au.ci</div>
                                                <div class="text-muted small">+225 05 88 99 77 66</div>
                                            </td>
                                            <td>
                                                <span class="badge bg-soft-primary text-primary fs-11 text-uppercase">Administrateur</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-success-subtle text-success fs-11"><i class="ri-checkbox-circle-line align-bottom me-1"></i> Actif</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex gap-2 justify-content-center">
                                                    <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal1">
                                                        <i class="ri-pencil-line"></i>
                                                    </button>
                                                    <button class="btn btn-soft-danger btn-sm">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
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

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © 3AU.
                </div>
                <div class="col-sm-6 text-sm-end">
                    Gestion des Accès
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- MODAL MODIFICATION (EXEMPLE) -->
<div class="modal fade" id="editModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title">Modifier l'Administrateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/update/administrateur" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <input type="hidden" name="id" value="1" />
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom et Prénom</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ri-user-line"></i></span>
                            <input type="text" class="form-control" name="name" value="Marc-Antoine Traoré" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Adresse Électronique</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ri-mail-line"></i></span>
                            <input type="email" class="form-control" name="email" value="m.traore@3au.ci" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Numéro de téléphone</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="ri-phone-line"></i></span>
                            <input type="text" class="form-control" name="phone" value="+225 0701020304" required>
                        </div>
                    </div>

                    <div class="mb-0">
                        <label class="form-label fw-bold">Rôle de l'administrateur</label>
                        <select name="role" class="form-select border-primary">
                            <option value="1" selected>Super Administrateur</option>
                            <option value="2">Administrateur Standard</option>
                            <option value="3">Éditeur / Rédacteur</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-success px-4">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection