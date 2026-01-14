@extends('backoffice.layout')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Nouveau Projet</h4>
                        <a href="/projets" class="btn btn-soft-dark btn-sm"><i class="ri-arrow-left-line me-1"></i> Retour</a>
                    </div>
                </div>
            </div>

            <form method="POST" action="/projets/store" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- COLONNE PRINCIPALE -->
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Titre du Projet</label>
                                    <input type="text" name="titre_projet" class="form-control form-control-lg" placeholder="Entrez le titre du projet" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sous-titre / Slogan</label>
                                    <input type="text" name="sous_titre_projet" class="form-control" placeholder="Bref résumé accrocheur">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phrase d'accroche (Intro)</label>
                                    <textarea name="phrase_acceroche" class="form-control" rows="2"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description détaillée</label>
                                    <textarea name="description" class="form-control summernote" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLONNE LATERALE -->
                    <div class="col-lg-4">
                        <!-- Image du projet -->
                        <div class="card shadow-sm">
                            <div class="card-header bg-light"><h6 class="card-title mb-0">Image du Projet</h6></div>
                            <div class="card-body text-center">
                                <img src="https://via.placeholder.com/300x200/f3f3f3/cccccc?text=IMAGE+PROJET" id="preview-projet" class="img-fluid rounded mb-3">
                                <input type="file" name="picture_projet" class="form-control" onchange="previewImage(this, 'preview-projet')" required>
                            </div>
                        </div>

                        <!-- Caractéristiques -->
                        <div class="card shadow-sm">
                            <div class="card-header bg-light"><h6 class="card-title mb-0">Détails techniques</h6></div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Catégorie de Projet</label>
                                    <select name="id_type_projet" class="form-select" required>
                                        <option value="">Sélectionner...</option>
                                        <option value="1">Infrastructure</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Service associé</label>
                                    <select name="id_service" class="form-select" required>
                                        <option value="">Sélectionner le service...</option>
                                        <option value="1">Audit IT</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Client</label>
                                    <input type="text" name="client_projet" class="form-control" placeholder="Nom du client">
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Statut</label>
                                        <input type="text" name="status" class="form-control" placeholder="Ex: En cours">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Temps / Durée</label>
                                        <input type="text" name="temps" class="form-control" placeholder="Ex: 3 mois">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm bg-primary border-0 text-white">
                            <div class="card-body">
                                <button type="submit" class="btn btn-white w-100">Publier le Projet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#' + previewId).attr('src', e.target.result).hide().fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection