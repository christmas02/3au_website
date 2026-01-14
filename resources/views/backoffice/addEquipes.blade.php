@extends('backoffice.layout')

@section('content')
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Ajouter un Expert / Membre de l'équipe</h4>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Informations de l'Expert</h5>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('backoffice.saveEquipe') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Photo de l'expert -->
                                    <div class="col-md-3 text-center border-end">
                                        <div class="mb-3">
                                            <label class="form-label d-block fw-bold">Photo de profil</label>
                                            <img src="https://via.placeholder.com/200x200/f3f3f3/cccccc?text=Expert"
                                                id="preview-expert" class="img-thumbnail mb-3" style="width: 200px; height: 200px; object-fit: cover;">
                                            <input type="file" name="photo" class="form-control" onchange="previewImage(this, 'preview-expert')" required>
                                            <small class="text-muted">Format carré recommandé (ex: 500x500px)</small>
                                        </div>
                                    </div>

                                    <!-- Détails de l'expert -->
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Nom complet</label>
                                                <input type="text" class="form-control" name="nom_complet" placeholder="Ex: Jean Dupont" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Poste / Fonction</label>
                                                <input type="text" class="form-control" name="poste" placeholder="Ex: Consultant Senior" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label class="form-label">Description / Biographie</label>
                                                <textarea name="description" class="form-control" rows="4" placeholder="Brève présentation de l'expert..."></textarea>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <!-- RESEAUX SOCIAUX DYNAMIQUES -->
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <label class="form-label fw-bold mb-0"><i class="ri-share-line me-1"></i> Réseaux Sociaux</label>
                                                <button type="button" class="btn btn-soft-success btn-sm" id="add-social-row">
                                                    <i class="ri-add-line"></i> Ajouter un réseau
                                                </button>
                                            </div>

                                            <div id="social-media-container">
                                                <!-- Ligne par défaut -->
                                                <div class="row social-row mb-2">
                                                    <div class="col-md-4">
                                                        <select name="social_platform[]" class="form-select">
                                                            <option value="linkedin">LinkedIn</option>
                                                            <option value="twitter">Twitter / X</option>
                                                            <option value="facebook">Facebook</option>
                                                            <option value="instagram">Instagram</option>
                                                            <option value="website">Site Web Personnel</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <input type="url" name="social_url[]" class="form-control" placeholder="https://...">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button type="button" class="btn btn-soft-danger w-100 remove-social-row">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer bg-light text-end mt-4">
                                    <button type="submit" class="btn btn-primary px-5">Enregistrer l'Expert</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Template masqué pour l'ajout de nouvelles lignes -->
<div id="social-template" style="display: none;">
    <div class="row social-row mb-2">
        <div class="col-md-4">
            <select name="social_platform[]" class="form-select">
                <option value="linkedin">LinkedIn</option>
                <option value="twitter">Twitter / X</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="website">Site Web Personnel</option>
            </select>
        </div>
        <div class="col-md-7">
            <input type="url" name="social_url[]" class="form-control" placeholder="https://...">
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-soft-danger w-100 remove-social-row">
                <i class="ri-delete-bin-line"></i>
            </button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // 1. Prévisualisation de l'image
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#' + previewId).attr('src', e.target.result).hide().fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // 2. Gestion dynamique des réseaux sociaux
    $(document).ready(function() {
        // Ajouter une ligne
        $('#add-social-row').click(function() {
            var newRow = $('#social-template').html();
            $('#social-media-container').append(newRow);
        });

        // Supprimer une ligne (délégation d'événement car les lignes sont dynamiques)
        $(document).on('click', '.remove-social-row', function() {
            // On s'assure qu'il reste au moins une ligne si vous voulez, sinon on supprime
            $(this).closest('.social-row').remove();
        });
    });
</script>
@endsection