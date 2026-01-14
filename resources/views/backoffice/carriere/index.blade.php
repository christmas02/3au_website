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
                        <h4 class="mb-sm-0">Gestion des Carrières</h4>
                        <div class="page-title-right">
                            <a href="{{ route('backoffice.ajoutOffre') }}" class="btn btn-primary btn-sm">
                                <i class="ri-add-line align-middle"></i> Nouvelle Offre
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-start border-danger">
                        <div class="card-header bg-light">
                            <h5 class="card-title mb-0 text-danger">
                                <i class="ri-briefcase-line align-middle me-1"></i> Liste des offres d'emploi / opportunités
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <!-- Dans la table de la page Liste des Carrières -->
                                    <thead class="table-light">
                                        <tr>
                                            <th>Titre de l'offre</th>
                                            <th>Département</th>
                                            <th class="text-center">Candidats</th> <!-- Nouvelle colonne -->
                                            <th>Date</th>
                                            <th width="150" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold text-primary">Consultant Senior en Audit</td>
                                            <td>Finance</td>
                                            <td class="text-center">
                                                <a href="{{ route('backoffice.detailOffre')}}" class="badge bg-soft-info text-info fs-12 p-2">
                                                    <i class="ri-user-received-2-line"></i> 5 Candidats
                                                </a>
                                            </td>
                                            <td>12/05/2024</td>
                                            <td class="text-center">
                                                <div class="d-flex gap-2 justify-content-center">
                                                    <a href="/modifier/carriere/1" class="btn btn-sm btn-soft-info"><i class="ri-edit-line"></i></a>
                                                    <a href="/supprimer/carriere/1" class="btn btn-sm btn-soft-danger"><i class="ri-delete-bin-line"></i></a>
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
@endsection