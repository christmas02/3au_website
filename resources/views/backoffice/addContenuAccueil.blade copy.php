@extends('backoffice.layout')

@section('content')
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Configuration de la Page d'Accueil</h4>
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
                                        <i class="ri-community-line me-1 align-middle"></i> Qui sommes-nous ?
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#mot-directeur" role="tab">
                                        <i class="ri-user-voice-line me-1 align-middle"></i> Le mot du Directeur
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <form method="POST" action="{{ route('backoffice.modifierAccueil', $accueil->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="card-body">
                                <div class="tab-content text-muted">
                                    
                                    <!-- ONGLET 1 : QUI SOMMES NOUS -->
                                    <div class="tab-pane active" id="qui-sommes-nous" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Titre Section 1</label>
                                                <input type="text" class="form-control" name="titre_section_one" value="{{ $accueil->titre_section_one }}">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Sous-titre Section 1</label>
                                                <input type="text" class="form-control" name="sous_titre_section_one" value="{{ $accueil->sous_titre_section_one }}">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label">Description (Qui sommes-nous)</label>
                                                <textarea name="description_section_one" id="summernote1" class="form-control" rows="8">{{ $accueil->description_section_one }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ONGLET 2 : MOT DU DIRECTEUR -->
                                    <div class="tab-pane" id="mot-directeur" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Titre Section 2</label>
                                                <input type="text" class="form-control" name="titre_section_two" value="{{ $accueil->titre_section_two }}">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Sous-titre Section 2</label>
                                                <input type="text" class="form-control" name="sous_titre_section_two" value="{{ $accueil->sous_titre_section_two }}">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Nom du signataire (Directeur)</label>
                                                <input type="text" class="form-control" name="nom_signataire" value="{{ $accueil->nom_signataire }}">
                                            </div>

                                            <div class="col-12 mb-4">
                                                <label class="form-label">Message du Directeur</label>
                                                <textarea name="description_section_two" id="summernote2" class="form-control" rows="8">{{ $accueil->description_section_two }}</textarea>
                                            </div>

                                            <!-- Photos Section -->
                                            <div class="col-md-6">
                                                <div class="card border-dashed p-3 text-center">
                                                    <label class="form-label d-block">Photo du Directeur</label>
                                                    <img src="{{ $accueil->image_directeur ? env('IMAGES_PATH').'/'.$accueil->image_directeur : asset('assets/images/users/avatar-blank.jpg') }}" 
                                                         id="preview-directeur" class="rounded-circle img-thumbnail mb-2" style="width: 100px; height: 100px; object-fit: cover;">
                                                    <input type="file" name="image_directeur" class="form-control" onchange="previewFile(this, 'preview-directeur')">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card border-dashed p-3 text-center">
                                                    <label class="form-label d-block">Image de la Signature</label>
                                                    <img src="{{ $accueil->signature_image_path ? env('IMAGES_PATH').'/'.$accueil->signature_image_path : asset('assets/images/signature-placeholder.png') }}" 
                                                         id="preview-signature" class="img-thumbnail mb-2" style="width: 150px; height: 100px; object-fit: contain; background: #f8f9fa;">
                                                    <input type="file" name="signature_image_path" class="form-control" onchange="previewFile(this, 'preview-signature')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end tab content -->
                            </div> <!-- end card body -->

                            <div class="card-footer bg-light text-end">
                                <a href="/backoffice/accueil" class="btn btn-ghost-danger">Annuler</a>
                                <button type="submit" class="btn btn-primary px-4">Enregistrer toutes les modifications</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Fonction universelle pour l'aperçu des images
    function previewFile(input, previewId) {
        var file = input.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById(previewId).src = reader.result;
            }
            reader.readAsDataURL(file);
        }
    }

//     // Initialisation Summernote (si vous l'utilisez)
//     $(document).ready(function() {
//         $('#summernote1, #summernote2').summernote({
//             height: 250,
//             toolbar: [
//                 ['style', ['style']],
//                 ['font', ['bold', 'underline', 'clear']],
//                 ['para', ['ul', 'ol', 'paragraph']],
//                 ['insert', ['link']],
//                 ['view', ['codeview']]
//             ]
//         });
//     });
// </script>
@endsection