@extends('backoffice.layout')

@section('content')
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Configuration de la Page d'Accueil (Mode Test)</h4>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#qui-sommes-nous" role="tab">
                                        <i class="ri-community-line me-1 align-middle"></i> 1. Qui sommes-nous ?
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#mot-directeur" role="tab">
                                        <i class="ri-user-voice-line me-1 align-middle"></i> 2. Le mot du Directeur
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <form method="POST" action="/update-accueil/1" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="tab-content text-muted">

                                    <!-- ONGLET 1 : QUI SOMMES NOUS -->
                                    <div class="tab-pane active" id="qui-sommes-nous" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Titre Section 1</label>
                                                <input type="text" class="form-control" name="titre_section_one" value="À propos de 3AU">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Sous-titre Section 1</label>
                                                <input type="text" class="form-control" name="sous_titre_section_one" value="L'expertise au service de votre croissance">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label">Description (Qui sommes-nous)</label>
                                                <textarea name="description_section_one" class="form-control summernote" rows="8">
                                                    <p>Depuis plus de 10 ans, notre cabinet accompagne les entreprises dans leur transformation stratégique. Nous croyons en une approche personnalisée pour chaque client.</p>
                                                    <ul>
                                                        <li>Audit et Conseil</li>
                                                        <li>Gestion de projet</li>
                                                        <li>Expertise financière</li>
                                                    </ul>
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ONGLET 2 : MOT DU DIRECTEUR -->
                                    <div class="tab-pane" id="mot-directeur" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Titre Section 2</label>
                                                <input type="text" class="form-control" name="titre_section_two" value="Le Mot du Directeur">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Sous-titre Section 2</label>
                                                <input type="text" class="form-control" name="sous_titre_section_two" value="Vision et Engagement pour 2024">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Nom du signataire</label>
                                                <input type="text" class="form-control" name="nom_signataire" value="Dr. Marc-Antoine Traoré">
                                            </div>

                                            <div class="col-12 mb-4">
                                                <label class="form-label">Message du Directeur</label>
                                                <textarea name="description_section_two" class="form-control summernote" rows="8">
                                                    <p>"Chers partenaires, notre mission est de bâtir un avenir solide basé sur l'intégrité et l'excellence opérationnelle. Nous sommes fiers de notre parcours et de la confiance que vous nous accordez."</p>
                                                </textarea>
                                            </div>

                                            <!-- Photos Section -->
                                            <div class="col-md-6">
                                                <div class="card border border-dashed shadow-none p-3 text-center">
                                                    <label class="form-label d-block fw-bold">Photo du Directeur</label>
                                                    <img src="https://via.placeholder.com/150/f3f3f3/cccccc?text=Photo"
                                                        id="preview-directeur" class="rounded-circle img-thumbnail mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                                                    <input type="file" name="image_directeur" class="form-control" onchange="previewImage(this, 'preview-directeur')">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card border border-dashed shadow-none p-3 text-center">
                                                    <label class="form-label d-block fw-bold">Image de la Signature</label>
                                                    <img src="https://via.placeholder.com/200x80/f3f3f3/cccccc?text=Signature"
                                                        id="preview-signature" class="img-thumbnail mb-3" style="width: 200px; height: 120px; object-fit: contain; background: #fdfdfd;">
                                                    <input type="file" name="signature_image_path" class="form-control" onchange="previewImage(this, 'preview-signature')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end tab content -->
                    </div> <!-- end card body -->

                    <div class="card-footer bg-light text-end">
                        <button type="submit" class="btn btn-primary px-5">Enregistrer les modifications</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // On change la source de l'image avec l'ID correspondant
                $('#' + previewId).attr('src', e.target.result);

                // Optionnel : Ajouter une petite animation pour montrer le changement
                $('#' + previewId).hide().fadeIn(650);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection