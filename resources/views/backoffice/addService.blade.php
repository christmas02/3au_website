@extends('backoffice.layout')

@section('content')
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Ajouter un Nouveau Service</h4>
                        <div class="page-title-right">
                            <a href="{{ route('backoffice.services') }}" class="btn btn-soft-dark btn-sm">
                                <i class="ri-arrow-left-line align-middle"></i> Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-soft-primary">
                            <h5 class="card-title mb-0">Détails du Service</h5>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="/services/store" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Colonne Gauche -->
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Titre du Service</label>
                                            <input type="text" class="form-control" name="titre_service" placeholder="Ex: Audit de conformité fiscale" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Type de Service (Catégorie)</label>
                                            <select name="id_type_service" class="form-select" required>
                                                <option value="">-- Sélectionner un type --</option>
                                                <!-- Boucle sur vos types depuis la BD -->
                                                <option value="1">Conseil et Stratégie</option>
                                                <option value="2">Formation</option>
                                                <option value="3">Audit</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-bold">Description complète du service</label>
                                            <textarea name="description_service" class="form-control summernote" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <!-- Colonne Droite (Options supplémentaires) -->
                                    <div class="col-md-4">
                                        <div class="card bg-light border-0">
                                            <div class="card-body">
                                                <h6 class="fs-14 mb-3"><i class="ri-settings-4-line me-1"></i> Paramètres de publication</h6>
                                                
                                                <div class="mb-3">
                                                    <label class="form-label">Statut</label>
                                                    <select class="form-select" name="is_deleted">
                                                        <option value="0">Publié</option>
                                                        <option value="1">Brouillon / Masqué</option>
                                                    </select>
                                                </div>

                                                <div class="alert alert-info border-0 shadow-none mb-0">
                                                    <p class="mb-0 small">
                                                        <i class="ri-lightbulb-line me-1"></i>
                                                        <b>Astuce :</b> Utilisez l'éditeur de texte pour mettre en forme les bénéfices du service pour vos clients.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Optionnel : Ajouter une image pour le service si vous le souhaitez plus tard -->
                                        <!-- <div class="mt-4 p-2 border border-dashed rounded text-center">
                                            <label class="form-label d-block">Icône ou Image illustrative</label>
                                            <i class="ri-image-add-line display-4 text-muted"></i>
                                            <input type="file" name="image_service" class="form-control mt-2">
                                        </div> -->
                                    </div>
                                </div>

                                <div class="card-footer bg-transparent border-top text-end mt-4 px-0">
                                    <button type="submit" class="btn btn-primary px-5">
                                        <i class="ri-check-line align-bottom me-1"></i> Créer le service
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection