@extends('backoffice.layout')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Publier une nouvelle offre</h4>
                        <a href="{{ route('backoffice.carriere') }}" class="btn btn-soft-dark btn-sm">
                            <i class="ri-arrow-left-line me-1"></i> Retour à la liste
                        </a>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <form method="POST" action="/carrieres/store">
                @csrf
                <div class="row">
                    <!-- COLONNE PRINCIPALE -->
                    <div class="col-lg-8">
                        <div class="card shadow-sm border-top border-primary">
                            <div class="card-body">
                                <div class="mb-4">
                                    <label class="form-label fw-bold text-uppercase fs-12">Intitulé du poste</label>
                                    <input type="text" name="titre_carriere" class="form-control form-control-lg" placeholder="Ex: Consultant IT Senior" required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold text-uppercase fs-12">Sous-titre / Localisation ou Département</label>
                                    <input type="text" name="sous_titre_carriere" class="form-control" placeholder="Ex: CDI - Abidjan - Département Audit" required>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label fw-bold text-uppercase fs-12">Présentation brève (Accroche)</label>
                                    <textarea name="presentation" class="form-control" rows="3" placeholder="Résumez le poste en 2 ou 3 phrases..."></textarea>
                                </div>

                                <div class="mb-0">
                                    <label class="form-label fw-bold text-uppercase fs-12">Description complète (Missions, Profil, Compétences)</label>
                                    <textarea name="description" class="form-control summernote" rows="12"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLONNE LATERALE (INFO & ACTION) -->
                    <div class="col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-light">
                                <h6 class="card-title mb-0">Action & Statut</h6>
                            </div>
                            <div class="card-body">
                                <div class="alert alert-info border-0 shadow-none">
                                    <p class="small mb-0">
                                        <i class="ri-information-line me-1"></i>
                                        Cette offre sera immédiatement visible sur la page "Carrières" de votre site web après publication.
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-success w-100 py-2">
                                        <i class="ri-send-plane-fill me-1"></i> Publier l'offre d'emploi
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Conseils -->
                        <div class="card bg-soft-warning border-0">
                            <div class="card-body">
                                <h6 class="text-warning fw-bold"><i class="ri-lightbulb-line me-1"></i> Conseils</h6>
                                <ul class="list-unstyled mb-0 fs-13">
                                    <li class="mb-2"><i class="ri-check-line me-1"></i> Soyez clair sur le titre du poste.</li>
                                    <li class="mb-2"><i class="ri-check-line me-1"></i> Listez bien les prérequis dans la description.</li>
                                    <li><i class="ri-check-line me-1"></i> Utilisez des listes à puces via l'éditeur.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection